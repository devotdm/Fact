<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = ["destinataire_id", "devise", "statut", "date_statut", "id_num", "total", "remise", "cond_reg", "mode_reg", "intr_retard", "mot_cle"];
}
