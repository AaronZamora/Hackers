<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GruposHackers extends Model
{
    use HasFactory;

    //Tabla de los grupos de hackers
    protected $table = 'grupos_hackers';
}
