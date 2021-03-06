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

Route::get('/','HomeController@home');

Route::get('clients/list', "ClientCtrl@ShowList");

Route::get('clients/info/{id}', "ClientCtrl@ShowInfo");

Route::get('clients/new', "ClientCtrl@add");

Route::get('clients/new/{id}', "ClientCtrl@add_");

Route::post('clients/create', "ClientCtrl@create");

Route::post('clients/create_', "ClientCtrl@create_");

Route::get('clients/edit/{id}', "ClientCtrl@edit");

Route::put('clients/update/{id}', "ClientCtrl@update");

Route::put('clients/update_/{id}', "ClientCtrl@update_");

Route::get('clients/delete/{id}', "ClientCtrl@delete");

Route::get('societes/list', "SocieteCtrl@ShowList");

Route::get('societes/new', "SocieteCtrl@add");

Route::post('societes/create', "SocieteCtrl@create");

Route::get('societes/info/{id}', "SocieteCtrl@ShowInfo");

Route::get('societes/edit/{id}', "SocieteCtrl@edit");

Route::put('societes/update/{id}', "SocieteCtrl@update");

Route::get('societes/delete/{id}', "SocieteCtrl@delete");

Route::get('devis/list', "DevisCtrl@ShowList");

Route::get('devis/list/{s}', "DevisCtrl@ShowListF");

Route::get('devis/new', "DevisCtrl@add");

Route::get('devis/new/{id}', "DevisCtrl@add_");

Route::post('devis/create', "DevisCtrl@create");

Route::get('devis/info/{id}', "DevisCtrl@ShowInfo");

Route::get('devis/edit/{id}', "DevisCtrl@edit");

Route::put('devis/update/{id}', "DevisCtrl@update");

Route::get('devis/delete/{id}', "DevisCtrl@delete");

Route::get('devis/statut/{id}/{s}', "DevisCtrl@statut");

Route::get('devis/cancel/{id}', "DevisCtrl@cancel");

Route::get('factures/list', "FactureCtrl@ShowList");

Route::get('factures/list/{s}', "FactureCtrl@ShowListF");

Route::get('factures/new', "FactureCtrl@add");

Route::get('factures/new/{id}', "FactureCtrl@add_");

Route::post('factures/create', "FactureCtrl@create");

Route::get('factures/info/{id}', "FactureCtrl@ShowInfo");

Route::get('factures/edit/{id}', "FactureCtrl@edit");

Route::put('factures/update/{id}', "FactureCtrl@update");

Route::get('factures/delete/{id}', "FactureCtrl@delete");

Route::get('factures/statut/{id}/{s}', "FactureCtrl@statut");

Route::get('factures/cancel/{id}', "FactureCtrl@cancel");

Route::get('parametres/', 'UserCtrl@edit');

Route::put('parametres/update', 'UserCtrl@update');

Route::get('parametres/compte/change', 'UserCtrl@change');

Route::post('parametres/compte/update', 'UserCtrl@update_');

Route::get('parametres/compte/remove', 'UserCtrl@remove');

Route::post('parametres/compte/delete', 'UserCtrl@delete');

Auth::routes();
