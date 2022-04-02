<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaHacker extends Model
{
    use HasFactory;

    //Tabala para la historia de los hackers
    protected $table = 'historia_hackers';
}
