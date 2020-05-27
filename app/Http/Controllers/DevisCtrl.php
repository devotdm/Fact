<?php

namespace App\Http\Controllers;

use Request;
use App\Devi;
use App\Ligne;
use App\Client;
use App\Societe;
use App\Facture;
use App\Article;

class DevisCtrl extends Controller
{
    function ShowList() {
        $data = Devi::All();
        $url = "";

        return view('devis.list')->with(array('data'=> $data, 'url'=> $url,
            'title'=>'Devis', 'obj'=>'devis' , 'ind'=>'3' , 'path'=>'../'));
    }

    function ShowListF($s) {
        $data = Devi::where('statut',$s)->get();
        $url = $s;

        return view('devis.list')->with(array('data'=> $data, 'url'=> $url,
            'title'=>'Devis', 'obj'=>'devis'  , 'ind'=>'3' , 'path'=>'../../'));
    }

    function ShowInfo($id) {
        $data = Devi::find($id);
        $_data = Devi::where('id',$id)->first()->lignes;

        $dataC = Client::find($data->client_id);
        $dataS = Societe::find($dataC->societe_id);
        
        $doc1 = Devi::where('devi_id',$id);
        $doc2 = Facture::where('facture_id',$id);

        $title = "";
        if($data->statut=='provisoire'){
            $title = "Devis ".$data->statut;
        } else {
            $title = "Devis ".$data->id_num;
        }
        
        return view('devis.info')->with(array('data'=> $data, '_data'=> $_data,
          'dataC'=> $dataC , 'dataS'=> $dataS, 'doc1' => $doc1 , 'doc2' => $doc2 ,
          'title'=>$title , 'obj'=>'devis' , 'ind'=>'3' , 'path'=>'../../'));
    }

    function add() {
        $clients = Client::pluck('nom','id')->prepend('Sélectionnez un destinataire','');
        $articles = Article::pluck('titre','titre')->prepend('Sélectionnez un type','');

        return view('devis.new')->with(array('title'=>'Nouveau devis', 'obj'=>'devis' ,
            'clients' => $clients ,'articles' => $articles , 'ind'=>'3' , 'path'=>'../'));
    }

    function add_($id) {
        $client = Client::find($id);
        $clients = Client::pluck('nom','id')->prepend('Sélectionnez un destinataire','');
        $articles = Article::pluck('titre','titre')->prepend('Sélectionnez un type','');

        return view('devis.new')->with(array('title'=>'Nouveau devis', 'obj'=>'devis' ,
            'client' => $client ,'clients' => $clients ,'articles' => $articles ,
             'ind'=>'3' , 'path'=>'../'));
    }

    function create() {
        Request::validate([
            'client_id' => 'required'
            // 'type' => 'required',
            // 'quantity' => 'required|numeric|min:1',
            // 'prix' => 'required|numeric|min:1',
        ],
        [
            'required' => 'requis'
        ]);

        $data = Devi::create(Request::all());
        for ($i=0; $i < count(Request::get('type')) ; $i++) { 
            $ligne = new Ligne();
            $ligne->type = Request::get('type')[$i];
            $ligne->prix = Request::get('prix')[$i]; 
            $ligne->quantity = Request::get('quantity')[$i];
            $ligne->tva = Request::get('tva')[$i]; 
            $ligne->reduction = Request::get('reduction')[$i];
            $ligne->total = Request::get('total')[$i]; 
            $ligne->description = Request::get('description')[$i];
            $ligne->devi_id = $data->id;
            $ligne->save();
        }

        return redirect('devis/info/'.$data->id);
    }

    function edit($id){
        $data = Devi::find($id);
        $clients = Client::pluck('nom','id')->prepend('Sélectionnez un destinataire','');
        $articles = Article::pluck('titre','titre')->prepend('Sélectionnez un type','');

        $title = "Modifier le devis pour ".$data->client->prenom." ".$data->client->nom;

        return view('devis.edit')->with(array('title' => $title, 'obj' => 'devis' ,
            'clients' => $clients ,'articles' => $articles ,
            'data' => $data , 'ind'=>'3' , 'path'=>'../../'));
    }

    function delete($id){
        $data = Devi::find($id);
        $data->delete();

        $msg = "Le devis ";
        if($data->statut == 'provisoire')
            $msg .= "de ".$data->client->prenom." ".$data->client->nom;
        else
            $msg .= $data->id_num;
        $msg .= " a été supprimé avec succès";

        return redirect('devis/list')->withSuccess($msg);
    }

    function statut($id,$s){
        $data = Devi::find($id);
        $data->statut = $s;
        $data->save();

        return redirect('devis/info/'.$data->id);
    }

    function cancel($id){
        $data = Devi::find($id);
        $data->statut = "finalisé";
        $data->date_signe = null;
        $data->save();

        return redirect('devis/info/'.$data->id);
    }

}
