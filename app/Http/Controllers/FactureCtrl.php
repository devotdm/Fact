<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
