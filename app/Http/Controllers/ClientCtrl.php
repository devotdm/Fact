<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Societe;
use App\Devi;
use App\Facture;

class ClientCtrl extends Controller
{
    function ShowList() {
        //$data = Societe::with(['clients' => function($query) { $query->with('societe'); }])->all()->clients;
        $data = Client::All();
        $count = count($data);

        return view('clients.list')->with(array('data'=> $data, 'count'=> $count, 'title'=>'Gérer les clients', 'obj'=>'client' , 'ind'=>'1' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Client::find($id);

        $dataD = Client::with(['devis' => function($query) { $query->with('client'); }])
            ->where('id',$id)->first()->devis;

        $dataF = Client::with(['factures' => function($query) { $query->with('client'); }])
            ->where('id',$id)->first()->factures;

        $countD = count($dataD);
        $countF = count($dataF);
        
        $header = $data->prenom." ".$data->nom;
        if(isset($data->societe_id))
            $header .= " de ".$data->societe->nom;
        
        return view('clients.info')->with(array('data'=> $data, 'header'=> $header,
        'dataD'=> $dataD, 'dataF'=> $dataF, 'countD'=> $countD, 'countF'=> $countF, 
         'title'=>'Infos du client', 'obj'=>'client' , 'ind'=>'1' , 'path'=>'../../'));
    }
}
