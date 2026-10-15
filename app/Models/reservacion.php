<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservacion extends Model
{
    protected $fillable = ['nombre', 'telefono', 'fecha', 'hora', 'estado', 'servicios_id','estatus'];

    public function servicio()
    {
        return $this->belongsTo(servicio::class, 'servicios_id');
    }
}
