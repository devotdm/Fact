<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devi;
use App\Ligne;
use App\Client;
use App\Societe;
use App\Facture;

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
        
        $doc1 = Facture::where('devi_id',$id);
        $doc2 = Devi::where('devi_id',$id);

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
}
