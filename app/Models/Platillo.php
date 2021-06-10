<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_platillos';
    protected $fillable = ['nombre', 'ingredientes','precio','disponibilidad'];
}
