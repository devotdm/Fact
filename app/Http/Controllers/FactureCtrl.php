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
        $count = count($data);
        $url = "";
        
        return view('factures.list')->with(array('data'=> $data, 'count'=> $count, 'url'=> $url,
            'title'=>'Gérer les factures', 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../'));
    }

    function ShowListF($s) {
        $data = Facture::where('statut',$s)->get();
        $count = count($data);
        $url = $s;

        return view('factures.list')->with(array('data'=> $data, 'count'=> $count, 'url'=> $url,
            'title'=>'Gérer les factures', 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Facture::find($id);
        $_data = Facture::with(['lignes' => function($query) { $query->with('Facture'); }])
            ->where('id',$id)->first()->lignes;
        $dataC = Client::find($data->client_id);
        $dataS = Societe::find($dataC->societe_id);

        $header = "";
        if($data->statut=='provisoire'){
            $header = "Facture ".$data->statut;
        } else {
            $header = $data->id_num;
        }

        return view('factures.info')->with(array('data'=> $data, '_data'=> $_data, 'header'=> $header, 'dataC'=> $dataC , 'dataS'=> $dataS, 
         'title'=>'Infos du facture', 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../../'));
    }

}
