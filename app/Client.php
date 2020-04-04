<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =["id", "email", "prenom", "nom", "fonction", "adresse", "codep", "ville", "pays", "tele", "site", "mot_cle", "societe_id"];
    
    public function societe()
    {
        return $this->belongsTo('App\Societe','societe_id');
    }
}
