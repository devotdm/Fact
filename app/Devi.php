<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devi extends Model
{
    protected $fillable = ["client_id", "duree", "devise", "statut", "date_finalise", "date_signe", "id_num", "total_ht", "remise","total_tva", "total_ttc", 
        "cond_reg", "mode_reg", "intr_retard", "mot_cle" , "facture_id", "devi_id"];
    protected $dates = ["date_finalise", "date_signe"];
    
    public function lignes()
    {
        return $this->hasMany('App\Ligne');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    
    public function devis()
    {
        return $this->belongsTo('App\Devi');
    }

    public function facture()
    {
        return $this->belongsTo('App\Facture');
    }

    
}
