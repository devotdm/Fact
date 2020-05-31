<?php

namespace App\Http\Controllers;

use Request;
use App\Societe;
use App\Client;
use App\Countrie;
use Auth;

class SocieteCtrl extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function ShowList() {
        $data = Societe::withCount('clients')->get()->where('user_id',Auth::id());
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
            $dataD = array();
            $dataF = array();
        }
        
        $title = $data->nom;
        
        return view('societes.info')->with(array('data'=> $data, '_data'=> $_data,'dataD'=> $dataD, 'dataF'=> $dataF,
            'title'=> $title, 'obj'=>'société' , 'ind'=>'2' , 'path'=>'../../'));
    }

    function add() {
        $clients = Client::whereNull('societe_id')->pluck('nom','id')->prepend('Selectionnez un client','');
        $cntrs = Countrie::pluck('country_name','country_name')->prepend('Selectionnez une pays','');

        return view('societes.new')->with(array('title'=>'Nouvelle société', 'obj'=>'société',
            'clients' => $clients ,'countries' => $cntrs , 'ind'=>'2' , 'path'=>'../'));
    }

    function create() {
        $validate = Request::validate([
            'nom' => 'required'
        ],
        [
            'required' => 'doit etre rempli',
        ]);
        
        $data = Societe::create(Request::all());
        $msg = "Une nouvelle société (".$data->nom.") a été créé avec succès";

        return redirect('societes/info/'.$data->id)->withSuccess($msg);
    }

    function edit($id) {
        $data = Societe::find($id);
        $clients = Client::whereNull('societe_id')->pluck('nom','id')->prepend('Selectionnez un client','');
        $cntrs = Countrie::pluck('country_name','country_name')->prepend('Selectionnez une pays','');

        $title = "Modifier ".$data->nom;

        return view('societes.edit')->with(array('title' => $title, 'obj' => 'société' ,
            'data' => $data ,'clients' => $clients ,'countries' => $cntrs ,
         'ind' => '2' , 'path' => '../../'));
    }

    function update($id) {
        Request::validate([
            'nom' => 'required' ,
        ],
        [
            'required' => 'doit etre rempli',
        ]);

        $data = Societe::find($id);
        $data->update(Request::all());

        $msg = "les informations du société".$data->nom." ont été modifiées avec succès";

        return redirect('societes/info/'.$data->id)->withSuccess($msg);
    }

    function delete($id) {
        $data = Societe::find($id);
        $data->delete();

        $msg = "Société ".$data->nom." a été supprimé avec succès";

        return redirect('societes/list')->withSuccess($msg);
    }
}