<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facture;

class FactureCtrl extends Controller
{
    function ShowList() {
        $data = Facture::All();
        $count = count($data);
        
        return view('factures.list')->with(array('data'=> $data, 'count'=> $count,'title'=>'Gérer les factures', 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../'));
    }
}
