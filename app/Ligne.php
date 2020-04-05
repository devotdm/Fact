<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    protected $fillable = ["type", "quantity", "prix", "tva", "reduction", "total", "description", "id_devis", "id_facture"];
    
    public function devis()
    {
        return $this->belongsTo('App\Devi','devi_id');
    }

    public function facture()
    {
        return $this->belongsTo('App\Facture','facture_id');
    }
}
