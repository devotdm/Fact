<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
	public $timestamps = false;
    protected $fillable = ["type", "quantity", "prix", "tva", "reduction", "total", "description", "devi_id", "facture_id"];
    
    public function devis()
    {
        return $this->belongsTo('App\Devi','devi_id');
    }

    public function facture()
    {
        return $this->belongsTo('App\Facture','facture_id');
    }
}
