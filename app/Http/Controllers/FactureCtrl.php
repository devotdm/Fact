<?php

namespace App\Http\Controllers;

use Request;
use App\Devi;
use App\Ligne;
use App\Client;
use App\Societe;
use App\Facture;
use App\Article;

class FactureCtrl extends Controller
{
    function ShowList() {
        $data = Facture::All();
        $url = "";
        
        return view('factures.list')->with(array('data'=> $data, 'url'=> $url,
            'title'=>'Factures', 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../'));
    }

    function ShowListF($s) {
        if($s=='provisoire') {
            $data = Facture::where('statut',$s)->get();
        }
        else if($s=='finalisé') {
            $data = Facture::whereNotNull('date_finalise')->get();
        }
        else if($s=='payée') {
            $data = Facture::whereNotNull('date_payee')->get();
        } else {
            $data = Facture::whereNotNull('date_finalise')->whereNull('date_payee')->get();
        }
        $url = $s;

        return view('factures.list')->with(array('data'=> $data, 'url'=> $url,
            'title'=>'Factures', 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Facture::find($id);
        $_data = Facture::where('id',$id)->first()->lignes;
        $dataC = Client::find($data->client_id);
        $dataS = Societe::find($dataC->societe_id);
        
        $doc1 = Devi::where('devi_id',$id);
        $doc2 = Facture::where('facture_id',$id);

        $title = "Facture ";
        if($data->statut=='provisoire'){
            $title .= $data->statut;
        } else {
            $title .= $data->id_num;
        }

        return view('factures.info')->with(array('data'=> $data, '_data'=> $_data, 'dataC'=> $dataC , 'dataS'=> $dataS ,'doc1' => $doc1 , 'doc2' => $doc2 
        ,'title'=>$title, 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../../'));
    }

    function add() {
        $clients = Client::pluck('nom','id')->prepend('Sélectionnez un destinataire','');
        $articles = Article::pluck('titre','titre')->prepend('Sélectionnez un type','');

        return view('factures.new')->with(array('title'=>'Nouvelle facture', 'obj'=>'facture' ,
            'clients' => $clients ,'articles' => $articles , 'ind'=>'4' , 'path'=>'../'));
    }

    function add_($id) {
        $client = Client::find($id);
        $clients = Client::pluck('nom','id')->prepend('Sélectionnez un destinataire','');
        $articles = Article::pluck('titre','titre')->prepend('Sélectionnez un type','');

        return view('factures.new')->with(array('title'=>'Nouvelle facture', 'obj'=>'facture' , 'client' => $client, 'clients' => $clients ,'articles' => $articles , 'ind'=>'4' , 'path'=>'../'));
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

        $data = Facture::create(Request::all());
        for ($i=0; $i < count(Request::get('type')) ; $i++) { 
            $ligne = new Ligne();
            $ligne->type = Request::get('type')[$i];
            $ligne->prix = Request::get('prix')[$i]; 
            $ligne->quantity = Request::get('quantity')[$i];
            $ligne->tva = Request::get('tva')[$i]; 
            $ligne->reduction = Request::get('reduction')[$i];
            $ligne->total = Request::get('total')[$i]; 
            $ligne->description = Request::get('description')[$i];
            $ligne->facture_id = $data->id;
            $ligne->save();
        }

        return redirect('factures/info/'.$data->id);
    }

    function edit($id){
        $data = Facture::find($id);
        $clients = Client::pluck('nom','id')->prepend('Sélectionnez un destinataire','');
        $articles = Article::pluck('titre','titre')->prepend('Sélectionnez un type','');

        $title = "Modifier la facture pour ".$data->client->prenom." ".$data->client->nom;

        return view('factures.edit')->with(array('title' => $title, 'obj' => 'facture' ,
            'clients' => $clients ,'articles' => $articles ,
            'data' => $data , 'ind'=>'4' , 'path'=>'../../'));
    }

    function delete($id){
        $data = Facture::find($id);
        $data->delete();

        $msg = "La facture ";
        if($data->statut == 'provisoire')
            $msg .= "de ".$data->client->prenom." ".$data->client->nom;
        else
            $msg .= $data->id_num;
        $msg .= " a été supprimé avec succès";

        return redirect('factures/list')->withSuccess($msg);
    }

    function statut($id,$s){
        $data = Facture::find($id);
        $data->statut = $s;
        $data->save();

        return redirect('factures/info/'.$data->id);
    }

    function cancel($id){
        $data = Facture::find($id);
        $data->statut = "finalisé";
        $data->date_payee = null;
        $data->save();

        return redirect('factures/info/'.$data->id);
    }

}
