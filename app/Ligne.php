<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    protected $fillable = ["type", "quantity", "prix", "tva", "reduction", "total", "description", "id_devis", "id_facture"];
    
    public function devis()
    {
        return $this->belongsTo('App\Devi','devis_id');
    }
}
