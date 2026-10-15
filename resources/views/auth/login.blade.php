@extends('layout.ClientMain')

@section('contenido')
    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="authentication-wrapper authentication-basic container-p-x" style="background:#fdf9f2"></div>
            <div class="card text-center col-6">
                <div class="card-header">
                    <h5 class="fw-semibold">Login</h5>
                </div>
                <div class="card-body">
                    <form action="/login/admin" method="POST">
                        @if (session('mensaje'))
                            <h5>{{ session('mensaje') }}</h5>
                        @endif
                        <div class="form-group">
                            <label class="fw-semibold">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="example@example.com"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="fw-semibold">Contrasenia</label>
                            <input class="form-control" type="password" name="password" placeholder="Contrasenia" required
                                minlength="8">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
