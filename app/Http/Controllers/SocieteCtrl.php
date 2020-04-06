<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Societe;
use App\Client;

class SocieteCtrl extends Controller
{
    function ShowList() {
        $data = Societe::All();
        // $_data = Client::with(['societes' => function($query) { $query->with('client'); }])
        //     ->where('id',$id)->first()->societes;

        return view('societes.list')->with(array('data'=> $data, 'title'=>'Sociétés', 'obj'=>'société' , 'ind'=>'2' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Societe::find($id);
        $_data = Client::where('societe_id',$id)->get();

        if(count($_data) > 0) {
            $dataD = Client::where('societe_id',$id)->first()->devis;
            $dataF = Client::where('societe_id',$id)->first()->factures;
        } else {
            $dataD = array('');
            $dataF = array('');
        }
        
        $title = $data->nom;
        
        return view('societes.info')->with(array('data'=> $data, '_data'=> $_data,'dataD'=> $dataD, 'dataF'=> $dataF,
            'title'=> $title, 'obj'=>'société' , 'ind'=>'2' , 'path'=>'../../'));
    }
}
