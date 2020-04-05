<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =["email", "prenom", "nom", "fonction", "adresse", "codep", "ville", "pays", "tele", "site", "mot_cle", "societe_id"];
    
    public function societe()
    {
        return $this->belongsTo('App\Societe','societe_id');
    }

    public function devis()
    {
        return $this->hasMany('App\Devi');
    }

    public function factures()
    {
        return $this->hasMany('App\Facture');
    }
}
