<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Societe;

class ClientCtrl extends Controller
{
    function ShowList() {
        //$data = Societe::with(['clients' => function($query) { $query->with('societe'); }])->all()->clients;
        $data = Client::All();
        $count = count($data);

        return view('clients.list')->with(array('data'=> $data, 'count'=> $count,'title'=>'Gérer les clients', 'obj'=>'client' , 'ind'=>'1' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Client::find($id);
        $_data = Societe::find($data->societe_id);
        
        $header = "";
        if(isset($data->societe_id)){
            $header = $data->prenom." ".$data->nom." de ".$_data->nom;
        } else {
            $header = $data->prenom." ".$data->nom;
        }
        
        return view('clients.info')->with(array('data'=> $data, '_data'=> $_data, 'header'=> $header, 'title'=>'Infos du client', 'obj'=>'client' , 'ind'=>'1' , 'path'=>'../'));
    }
}
