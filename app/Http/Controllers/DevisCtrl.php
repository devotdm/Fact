<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devi;
use App\Ligne;
use App\Client;
use App\Societe;

class DevisCtrl extends Controller
{
    function ShowList() {
        $data = Devi::All();
        $count = count($data);
        $url = "";

        return view('devis.list')->with(array('data'=> $data, 'count'=> $count, 'url'=> $url,
            'title'=>'Gérer les devis', 'obj'=>'devis' , 'ind'=>'3' , 'path'=>'../'));
    }

    function ShowListF($s) {
        $data = Devi::where('statut',$s)->get();
        $count = count($data);
        $url = $s;

        return view('devis.list')->with(array('data'=> $data, 'count'=> $count, 'url'=> $url,
            'title'=>'Gérer les devis', 'obj'=>'devis' , 'ind'=>'3' , 'path'=>'../../'));
    }

    function ShowInfo($id) {
        $data = Devi::find($id);
        $_data = Devi::with(['lignes' => function($query) { $query->with('devis'); }])
            ->where('id',$id)->first()->lignes;
        $dataC = Client::find($data->client_id);
        $dataS = Societe::find($dataC->societe_id);       

        $header = "";
        if($data->statut=='provisoire'){
            $header = "Devis ".$data->statut;
        } else {
            $header = $data->id_num;
        }
        
        return view('devis.info')->with(array('data'=> $data, '_data'=> $_data, 'header'=> $header, 'dataC'=> $dataC , 'dataS'=> $dataS, 
          'title'=>'Ajouter un devis', 'obj'=>'devis' , 'ind'=>'3' , 'path'=>'../../'));
    }
}
