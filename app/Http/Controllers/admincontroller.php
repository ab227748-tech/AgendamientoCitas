<?php

namespace App\Http\Controllers;

use App\Models\reservacion;
use App\Models\servicio;
use App\Services\TwilioService;
use Exception;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    // servicios
    public function servicio()
    {
        $servicio = servicio::where('estatus', 1)->get();

        return view('admin.servicio', ['servicios' => $servicio]);
    }

    public function serviciostore(Request $request)
    {
        $datos=$request->validate([
            'nombreservicio' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'precio' => ['required', 'integer'],
            'tiempo' => ['required', 'integer'],
        ]);

        $datos['estatus']=1;

        servicio::create($datos);

        return redirect('/administrador/servicio');
    }

    public function servicioupdate(Request $request, $id)
    {
        $datos=$request->validate([
            'nombreservicio' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
            'precio' => ['required', 'integer'],
            'tiempo' => ['required', 'integer'],
        ]);

        $servicio = servicio::findOrFail($id);

        $servicio->update($datos);

        return redirect('/administrador/servicio');
    }

    public function serviciodelete($id){
        $servicio=servicio::findorfail($id);
        $estado=0;

        $servicio->update([
            'estatus'=>$estado
        ]);

        return redirect('/administrador/servicio');
    }







    // Citas pendientes
    public function citaspendientes()
    {
        $cita = reservacion::where('estatus', 0)->with('servicio')->get();

        return view('admin.citas-pendientes', ['citas' => $cita]);
    }

    public function citaspendientesupdate(Request $request, $id, TwilioService $twilio)
    {
        $validated = $request->validate([
            'estatus' => ['required', 'integer', 'in:1,2'],
        ]);

        $cita = reservacion::findOrFail($id);
        $estatus = (int) $validated['estatus'];

        if ($estatus === 1) {
            $estado = 'Confirmado';
        } else {
            $estado = 'Cancelado';
        }

        $cita->update([
            'estatus' => $estatus,
            'estado' => $estado,
        ]);

        $mensaje = "Hola {$cita->nombre}, tu cita del "
            .date('d/m/Y', strtotime($cita->fecha)).' a las '
            .substr($cita->hora, 0, 5)." ha sido {$estado}.";

        try {
            $twilio->sendWhatsAppMessage((string) $cita->telefono, $mensaje);
        } catch (Exception $exception) {
            report($exception);

            return redirect('/administrador/citaspendientes')
                ->with('warning', 'El estatus se actualizó, pero no se pudo enviar el mensaje de WhatsApp.');
        }

        return redirect('/administrador/citaspendientes')
            ->with('success', "La cita fue {$estado} y se notificó al cliente por WhatsApp.");
    }





    // citas confirmadas
    public function citasconfirmadas()
    {
        $cita = reservacion::where('estatus', 1)->with('servicio')->get();

        return view('admin.citas-confirmadas', ['citas' => $cita]);
    }

    public function citasconfirmadasupdate(Request $request, $id)
    {
        $citaspendientes = reservacion::findOrFail($id);
        $citaspendientes->update([
            'estatus' => 2,
            'estado' =>'Terminado'
        ]);

        return redirect('administrador/citasconfirmadas');

    }




    // historial
    public function historial()
    {
        $historial = reservacion::where('estatus', 2)->with('servicio')->get();

        return view('admin.historial', ['historial' => $historial]);
    }
}
