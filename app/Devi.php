<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devi extends Model
{
    protected $fillable = ["client_id", "duree", "devise", "statut", "date_statut", "id_num", "total_ht", "remise","total_tva", "total", 
        "cond_reg", "mode_reg", "intr_retard", "mot_cle" , "facture_id", "devi_id"];
    
    public function lignes()
    {
        return $this->hasMany('App\Ligne');
    }

    public function client()
    {
        return $this->belongsTo('App\Client','client_id');
    }
}
