<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index')->with(array('title'=>'Accueil' , 'ind'=>'0'  , 'path'=>''));
});

Route::get('clients/list', function () {
    return view('clients.list')->with(array('title'=>'Gérer les clients' , 'ind'=>'1' , 'path'=>'../'));
});

Route::get('clients/new', function () {
    return view('clients.new')->with(array('title'=>'Ajouter un client' , 'ind'=>'1' , 'path'=>'../'));
});

Route::get('societes/list', function () {
    return view('societes.list')->with(array('title'=>'Gérer les sociétés' , 'ind'=>'2' , 'path'=>'../'));
});

Route::get('societes/new', function () {
    return view('societes.new')->with(array('title'=>'Ajouter une société' , 'ind'=>'2' , 'path'=>'../'));
});

Route::get('devis/list', function () {
    return view('devis.list')->with(array('title'=>'Gérer les devis' , 'ind'=>'3' , 'path'=>'../'));
});

Route::get('devis/new', function () {
    return view('devis.new')->with(array('title'=>'Ajouter un devis' , 'ind'=>'3' , 'path'=>'../'));
});

Route::get('factures/list', function () {
    return view('factures.list')->with(array('title'=>'Gérer les factures' , 'ind'=>'4' , 'path'=>'../'));
});

Route::get('factures/new', function () {
    return view('factures.new')->with(array('title'=>'Ajouter une facture' , 'ind'=>'4' , 'path'=>'../'));
});