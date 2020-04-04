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

Route::get('clients/list', "ClientCtrl@ShowList");

Route::get('clients/new', function () {
    return view('clients.new')->with(array('title'=>'Ajouter un client', 'obj'=>'client' , 'ind'=>'1' , 'path'=>'../'));
});

Route::get('clients/info/{id}', "ClientCtrl@ShowInfo");

Route::get('societes/list', "SocieteCtrl@ShowList");

Route::get('societes/new', function () {
    return view('societes.new')->with(array('title'=>'Ajouter une société', 'obj'=>'société' , 'ind'=>'2' , 'path'=>'../'));
});

Route::get('societes/info/{id}', "SocieteCtrl@ShowInfo");

Route::get('devis/list', "DevisCtrl@ShowList");

Route::get('devis/new', function () {
    return view('devis.new')->with(array('title'=>'Ajouter un devis', 'obj'=>'devis' , 'ind'=>'3' , 'path'=>'../'));
});

Route::get('devis/info/{id}', "DevisCtrl@ShowInfo");

Route::get('factures/list', "FactureCtrl@ShowList");

Route::get('factures/new', function () {
    return view('factures.new')->with(array('title'=>'Ajouter une facture', 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../'));
});

Route::get('factures/info', function () {
    return view('factures.info')->with(array('title'=>'Infos du facture', 'obj'=>'facture' , 'ind'=>'4' , 'path'=>'../'));
});

Route::get('parametres/', function () {
    return view('parametres.preferences.general')->with(array('title'=>'Paramètres | Préférences générales', 'obj'=>'' , 'ind'=>'5' , 'path'=>'../'));
});

Route::get('parametres/preferences/devis', function () {
    return view('parametres.preferences.devis')->with(array('title'=>'Paramètres | Préférences pour les devis', 'obj'=>'' , 'ind'=>'5' , 'path'=>'../'));
});

Route::get('parametres/preferences/factures', function () {
    return view('parametres.preferences.factures')->with(array('title'=>'Paramètres | Préférences pour les factures', 'obj'=>'' , 'ind'=>'5' , 'path'=>'../'));
});

Route::get('parametres/preferences/numerotation', function () {
    return view('parametres.preferences.numerotation')->with(array('title'=>'Paramètres | Préférences pour la numérotation', 'obj'=>'' , 'ind'=>'5' , 'path'=>'../'));
});

Route::get('parametres/types_articles', function () {
    return view('parametres.types_articles.list')->with(array('title'=>'Paramètres | Types d\'article', 'obj'=>'' , 'ind'=>'6' , 'path'=>'../'));
});

Route::get('parametres/update', function () {
    return view('parametres.update')->with(array('title'=>'Paramètres | Cordonnées', 'obj'=>'' , 'ind'=>'7' , 'path'=>'../'));
});

Route::get('parametres/types_articles/new', function () {
    return view('parametres.types_articles.new')->with(array('title'=>'Paramètres | Nouveau type d\'article', 'obj'=>'' , 'ind'=>'6' , 'path'=>'../'));
});

Route::get('parametres/compte/change', function () {
    return view('parametres.compte.change')->with(array('title'=>'Paramètres | Compte', 'obj'=>'' , 'ind'=>'8' , 'path'=>'../'));
});

Route::get('parametres/compte/delete', function () {
    return view('parametres.compte.delete')->with(array('title'=>'Paramètres | Supprimer mon compte', 'obj'=>'' , 'ind'=>'8' , 'path'=>'../'));
});