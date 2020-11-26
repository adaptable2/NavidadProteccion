<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinatario extends Model
{
    protected $table = 'destinatario';

	protected $fillable = ['correo_remitente','correo_destinatario','nombre_destinatario'];
}


