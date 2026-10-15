<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    protected $fillable = ['nombreservicio', 'descripcion', 'precio', 'tiempo', 'estatus'];

     public function reservacion()
    {
        return $this->hasMany(reservacion::class);
    }
}
