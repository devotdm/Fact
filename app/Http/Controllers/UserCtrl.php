<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

class UserCtrl extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

    public function edit(){
    	$user = User::find(Auth::id());

    	return view('parametres.compte.edit')->with(['title'=>'Cordonnées', 'user' => $user ,
    	 'obj'=>'' , 'ind'=>'5' , 'path'=>'../']);
    }

    public function update(){
    	$user = User::find(Auth::id());
    	$user->update(Request::all());

    	return redirect('/');
    }

    public function change(){

    	return view('parametres.compte.change')->with(['title'=>'Changer mot de passe',
    	 'obj'=>'' , 'ind'=>'6' , 'path'=>'../']);
    }

    public function update_()
    {
        Request::validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ],
        [
        	'same' => 'erreur de mot de passe actuel'
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make(Request::get('new_password'))]);
   
        return redirect('/');
    }

    public function remove(){

    	return view('parametres.compte.remove')->with(['title'=>'Supprimer mon compte',
    	 'obj'=>'' , 'ind'=>'6' , 'path'=>'../']);
    }

    public function delete()
    {
        Request::validate([
            'password' => ['required', new MatchOldPassword]
        ]);

   		$id = Auth::id();
        Auth::logout();
        User::find($id)->delete();
   
        return redirect('/');
    }
}
