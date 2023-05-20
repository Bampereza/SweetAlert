<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    public $table='camions';
    use HasFactory;

    //Relación uno a muchos (inversa)
    public function transporte(){
        return $this->belongsTo('App\Models\Transporte');
    }
}
