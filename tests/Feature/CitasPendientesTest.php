<?php

use App\Models\reservacion;
use App\Models\servicio;
use App\Services\TwilioService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('opens the decision modal without submitting the appointment form', function () {
    $servicio = servicio::create([
        'nombreservicio' => 'Corte',
        'descripcion' => 'Corte de cabello',
        'precio' => 18,
        'tiempo' => 40,
    ]);

    $cita = reservacion::create([
        'nombre' => 'Ana',
        'telefono' => 525512345678,
        'fecha' => '2026-10-15',
        'hora' => '10:30:00',
        'estado' => 'Pendiente',
        'servicios_id' => $servicio->id,
        'estatus' => 0,
    ]);

    $response = $this->get('/administrador/citaspendientes');

    $response->assertOk()
        ->assertSee('type="button"', false)
        ->assertSee('data-bs-target="#citaModal-'.$cita->id.'"', false)
        ->assertSee('name="estatus" value="3"', false)
        ->assertSee('Confirmar y notificar')
        ->assertSee('Rechazar y notificar');
});

it('updates the appointment status and notifies the registered phone', function (int $estatus, string $estado) {
    $servicio = servicio::create([
        'nombreservicio' => 'Corte',
        'descripcion' => 'Corte de cabello',
        'precio' => 18,
        'tiempo' => 40,
    ]);

    $cita = reservacion::create([
        'nombre' => 'Ana',
        'telefono' => 525512345678,
        'fecha' => '2026-10-15',
        'hora' => '10:30:00',
        'estado' => 'Pendiente',
        'servicios_id' => $servicio->id,
        'estatus' => 0,
    ]);

    $twilio = Mockery::mock(TwilioService::class);
    $twilio->shouldReceive('sendWhatsAppMessage')
        ->once()
        ->with(
            '525512345678',
            "Hola Ana, tu cita del 15/10/2026 a las 10:30 ha sido {$estado}."
        );
    $this->app->instance(TwilioService::class, $twilio);

    $response = $this->put("/administrador/citaspendientes/update/{$cita->id}", [
        'estatus' => $estatus,
    ]);

    $response->assertRedirect('/administrador/citaspendientes')
        ->assertSessionHas('success', "La cita fue {$estado} y se notificó al cliente por WhatsApp.");
    $this->assertDatabaseHas('reservacions', [
        'id' => $cita->id,
        'estatus' => $estatus,
        'estado' => $estado,
    ]);
})->with([
    'confirmed' => [1, 'Confirmado'],
    'rejected' => [3, 'Cancelado'],
]);

it('reports a WhatsApp delivery failure after updating the appointment', function () {
    $servicio = servicio::create([
        'nombreservicio' => 'Corte',
        'descripcion' => 'Corte de cabello',
        'precio' => 18,
        'tiempo' => 40,
    ]);

    $cita = reservacion::create([
        'nombre' => 'Ana',
        'telefono' => 525512345678,
        'fecha' => '2026-10-15',
        'hora' => '10:30:00',
        'estado' => 'Pendiente',
        'servicios_id' => $servicio->id,
        'estatus' => 0,
    ]);

    $twilio = Mockery::mock(TwilioService::class);
    $twilio->shouldReceive('sendWhatsAppMessage')
        ->once()
        ->andThrow(new RuntimeException('Twilio unavailable'));
    $this->app->instance(TwilioService::class, $twilio);

    $response = $this->put("/administrador/citaspendientes/update/{$cita->id}", [
        'estatus' => 1,
    ]);

    $response->assertRedirect('/administrador/citaspendientes')
        ->assertSessionHas('warning', 'El estatus se actualizó, pero no se pudo enviar el mensaje de WhatsApp.');
    $this->assertDatabaseHas('reservacions', [
        'id' => $cita->id,
        'estatus' => 1,
        'estado' => 'Confirmado',
    ]);
});

it('rejects unsupported appointment statuses without notifying the client', function () {
    $servicio = servicio::create([
        'nombreservicio' => 'Corte',
        'descripcion' => 'Corte de cabello',
        'precio' => 18,
        'tiempo' => 40,
    ]);

    $cita = reservacion::create([
        'nombre' => 'Ana',
        'telefono' => 525512345678,
        'fecha' => '2026-10-15',
        'hora' => '10:30:00',
        'estado' => 'Pendiente',
        'servicios_id' => $servicio->id,
        'estatus' => 0,
    ]);

    $twilio = Mockery::mock(TwilioService::class);
    $twilio->shouldNotReceive('sendWhatsAppMessage');
    $this->app->instance(TwilioService::class, $twilio);

    $response = $this->put("/administrador/citaspendientes/update/{$cita->id}", [
        'estatus' => 2,
    ]);

    $response->assertSessionHasErrors('estatus');
    $this->assertDatabaseHas('reservacions', [
        'id' => $cita->id,
        'estatus' => 0,
    ]);
});
