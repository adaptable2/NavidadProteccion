<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remitente extends Model
{
    protected $table = 'remitente';

    protected $fillable = ['nombre','correo','mensaje'];

}

