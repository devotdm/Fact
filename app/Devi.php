<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devi extends Model
{
    protected $fillable = ["destinataire_id", "duree", "devise", "statut", "date_statut", "id_num", "total", "remise", "cond_reg", "mode_reg", "intr_retard", "mot_cle"];
    
    public function lignes()
    {
        return $this->hasMany('App\Ligne');
    }
}
