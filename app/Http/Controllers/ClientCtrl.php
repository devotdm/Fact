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

        return view('clients.list')->with(array('data'=> $data, 'title'=>'Clients', 'obj'=>'client' , 'ind'=>'1' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Client::find($id);

        $dataD = Client::where('id',$id)->first()->devis;

        $dataF = Client::where('id',$id)->first()->factures;
        
        $title = $data->prenom." ".$data->nom;
        if(isset($data->societe_id))
            $title .= " de ".$data->societe->nom;
        
        return view('clients.info')->with(array('data'=> $data,'dataD'=> $dataD, 'dataF'=> $dataF,
         'title'=>$title, 'obj'=>'client' , 'ind'=>'1' , 'path'=>'../../'));
    }
}
