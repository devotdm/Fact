<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facture;
use App\Client;
use App\Societe;

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

        $title = "Facture ";
        if($data->statut=='provisoire'){
            $title .= $data->statut;
        } else {
            $title .= $data->id_num;
        }

        return view('factures.info')->with(array('data'=> $data, '_data'=> $_data, 'dataC'=> $dataC , 'dataS'=> $dataS
        ,'title'=>$title, 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../../'));
    }

}
