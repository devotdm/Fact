<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Societe;

class SocieteCtrl extends Controller
{
    function ShowList() {
        $data = Societe::All();
        $count = count($data);

        return view('societes.list')->with(array('data'=> $data, 'count'=> $count, 'title'=>'Gérer les sociétés', 'obj'=>'société' , 'ind'=>'2' , 'path'=>'../'));
    }

    function ShowInfo($id) {
        $data = Societe::find($id);
        
        $header = $data->nom;
        
        return view('societes.info')->with(array('data'=> $data, 'header'=> $header, 'title'=>'Infos du société', 'obj'=>'société' , 'ind'=>'2' , 'path'=>'../'));
    }
}
