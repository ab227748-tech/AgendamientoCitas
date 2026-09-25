<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="Layout-container">
        @include('layout.navheader.index')

        <!-- 2. Contenedor principal con fila (Row) -->
        <div class="container-fluid p-4">
            <div class="row">
                @include('layout.siedvar.index')
                <main class="col-md-9 col-lg-10">
                    @yield('contenido')
                </main>
            </div>
        </div>

        @include('layout.footers.index')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
