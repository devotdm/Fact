<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devi;
use App\Ligne;

class DevisCtrl extends Controller
{
    function ShowList() {
        $data = Devi::All();
        $count = count($data);

        return view('devis.list')->with(array('data'=> $data, 'count'=> $count,'title'=>'Gérer les devis', 'obj'=>'devis' , 'ind'=>'3' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Devi::find($id);
//        $_data = Ligne::with(['devis' => function($query) { $query->with('devis'); }])->where('id_devis',$id)->first()->devis;
        
        $header = "";
        if($data->statut=='provisoire'){
            $header = "Devis ".$data->statut;
        } else {
            $header = $data->id_num;
        }
        
        return view('devis.info')->with(array('data'=> $data, 'header'=> $header, 'title'=>'Ajouter un devis', 'obj'=>'devis' , 'ind'=>'3' , 'path'=>'../'));
    }
}
