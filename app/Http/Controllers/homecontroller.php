<?php

namespace App\Http\Controllers;

use App\Models\reservacion;
use App\Models\servicio;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $servicio = servicio::where('estatus', 1)->get();

        return view('home', ['servicios' => $servicio]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string'],
            'telefono' => ['required', 'string'],
            'fecha' => ['required', 'date'],
            'hora' => ['required'],
        ]);

        $request['estado']='pendiente';

        $request['estatus'] = 0;     

        reservacion::create($request->all());

        return redirect('/');
    }
}
