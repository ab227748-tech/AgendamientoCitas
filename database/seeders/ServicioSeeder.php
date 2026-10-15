<?php

namespace Database\Seeders;

use App\Models\servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        $servicios = [
            [
                'nombreservicio' => 'Corte Clasico y Moderno',
                'descripcion' => 'Lavado purificante, asesoria de imagen, cortea tijera/maquina y peinado final',
                'precio' => 18,
                'tiempo' => 40,
                'estatus' => 1
            ],
            [
                'nombreservicio' => 'Arreglo de Barba con Toalla Caliente',
                'descripcion' => 'Perfilado con navaja recta tradicional, vaporizado facial y aceites nutritivos',
                'precio' => 14,
                'tiempo' => 30,
                'estatus' =>1
            ],
            [
                'nombreservicio' => 'Paquete Completo "Imperium VIP"',
                'descripcion' => 'Corte + Perfilado de barba + Exfoliacion facial + Bebida de cortesia de la casa',
                'precio' => 28,
                'tiempo' => 65,
                'estatus' => 1
            ],
        ];

        foreach ($servicios as $datosServicio) {
            servicio::updateOrCreate(
                ['nombreservicio' => $datosServicio['nombreservicio']],
                $datosServicio
            );
        }
    }
}
