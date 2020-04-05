<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = ["nom", "tva", "code_ice", "adresse", "codep", "ville", "pays", "tele", "site", "mot_cle"];
    
    public function clients()
    {
        return $this->hasMany('App\Client');
    }
}
