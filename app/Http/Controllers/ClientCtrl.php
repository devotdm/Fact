<?php

namespace App\Http\Controllers;

use Request;
use App\Client;
use App\Societe;
use App\Devi;
use App\Facture;
use App\Countrie;

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

	function add() {
		$socs = Societe::pluck('nom','id')->prepend('Selectionnez une societe','');
		$cntrs = Countrie::pluck('country_name','country_name')->prepend('Selectionnez une pays','');;

		return view('clients.new')->with(array('title'=>'Nouveau client', 'obj'=>'client' ,
			'societes' => $socs ,'countries' => $cntrs ,
		 'ind'=>'1' , 'path'=>'../'));
	}

	function add_($id) {
		$socs = Societe::pluck('nom','id')->prepend('Selectionnez une societe','');
		$societe = Societe::find($id);
		$cntrs = Countrie::pluck('country_name','country_name')->prepend('Selectionnez une pays','');;

		return view('clients.new')->with(array('title'=>'Nouveau client', 'obj'=>'client' ,
			'societes' => $socs , 'societe' => $societe , 'countries' => $cntrs ,
		 'ind'=>'1' , 'path'=>'../../'));
	}

	function create() {
		Request::validate([
			'email' => 'nullable|email',
			'prenom' => 'required',
			'nom' => 'required' ,
		],
		[
			'required' => 'doit etre rempli',
			'email' => 'n\'est pas un email valide'
		]);

		$data = Client::create(Request::all());
		$msg = "Un nouveau client (".$data->prenom." ".$data->nom.") a été créé avec succès";

		return redirect('clients/info/'.$data->id)->withSuccess($msg);
	}

	function create_() {
		Request::validate([
			'email' => 'nullable|email',
			'prenom' => 'required',
			'nom' => 'required' ,
			'societe_id' => 'required'
		],
		[
			'required' => 'doit etre rempli',
			'email' => 'n\'est pas un email valide'
		]);

		$data = Client::create(Request::all());
		$msg = "Un nouveau client (".$data->prenom." ".$data->nom.") a été créé avec succès";

		return redirect('clients/info/'.$data->id)->withSuccess($msg);
	}


	function edit($id) {
		$data = Client::find($id);
		$socs = Societe::pluck('nom','id')->prepend('Selectionnez une societe','');
		$cntrs = Countrie::pluck('country_name','country_name')->prepend('Selectionnez une pays','');

		$title = "Modifier ".$data->prenom." ".$data->nom;
		if(isset($data->societe_id))
			$title .= " de ".$data->societe->nom;

		return view('clients.edit')->with(array('title'=>$title, 'obj'=>'client' ,
			'data' => $data ,'societes' => $socs ,'countries' => $cntrs ,
		 'ind'=>'1' , 'path'=>'../../'));
	}

	function update($id) {
		Request::validate([
			'email' => 'nullable|email',
			'prenom' => 'required',
			'nom' => 'required' ,
		]);

		$data = Client::find($id);
		$data->update(Request::all());

		$msg = "les informations du client".$data->prenom." ".$data->nom." ont été modifiées avec succès";

		return redirect('clients/info/'.$data->id)->withSuccess($msg);
	}

	function update_($id) {
		Request::validate([
			'email' => 'nullable|email',
			'prenom' => 'required',
			'nom' => 'required' ,
			'societe_id' => 'required'
		]);
		
		$data = Client::find($id);
		$data->update(Request::all());

		$msg = "les informations du client".$data->prenom." ".$data->nom." ont été modifiées avec succès";

		return redirect('clients/info/'.$data->id)->withSuccess($msg);
	}

	function delete($id) {
		$data = Client::find($id);
		$data->delete();

		$msg = "Client ".$data->prenom." ".$data->nom." a été supprimé avec succès";

		return redirect('clients/list')->withSuccess($msg);
	}
}
