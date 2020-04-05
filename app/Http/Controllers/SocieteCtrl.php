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

        $count = count($data);

        return view('societes.list')->with(array('data'=> $data, 'count'=> $count, 
            'title'=>'Gérer les sociétés', 'obj'=>'société' , 'ind'=>'2' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Societe::find($id);
        $_data = Societe::with(['clients' => function($query) { $query->with('societe'); }])
            ->where('id',$id)->first()->clients;

        $dataD = Client::with(['devis' => function($query) { $query->with('client'); }])
            ->where('societe_id',$id)->first()->devis;

        $dataF = Client::with(['factures' => function($query) { $query->with('client'); }])
            ->where('societe_id',$id)->first()->factures;

        $count = count($_data);
        $countD = count($dataD);
        $countF = count($dataF);
        
        $header = $data->nom;
        
        return view('societes.info')->with(array('data'=> $data, '_data'=> $_data,'count'=> $count,
        'dataD'=> $dataD, 'countD'=> $countD, 'dataF'=> $dataF, 'countF'=> $countF,
        'header'=> $header, 'title'=>'Infos du société', 'obj'=>'société' , 'ind'=>'2' , 'path'=>'../../'));
    }
}
