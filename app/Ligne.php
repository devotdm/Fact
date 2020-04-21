<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
	public $timestamps = false;
    protected $fillable = ["type", "quantity", "prix", "tva", "reduction", "total", "description", "id_devis", "id_facture"];
    
    public function devis()
    {
        return $this->belongsTo('App\Devi','id_devis');
    }

    public function facture()
    {
        return $this->belongsTo('App\Facture','id_facture');
    }
}
