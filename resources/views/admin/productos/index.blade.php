<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="theme-color" content="#000000" />

    <title>Lista de Productos</title>

    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <img src="{{ url('assets/img/imagen 1.png') }}" alt="" class="w-50 h-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('home') }}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('nosotros')}}">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('admin/productos') }}">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('admin/clientes') }}">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">contacto</a>
                                </li>
                            </ul>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br><br><br><br>
    <div class="container mt-5 mb-5">

        <div class="row">

            <div class="col-md-12">

                <h1 style="font-size: 28px;" class=" text-center">Lista de precios</h1>

                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <!-- Logo -->
                                <div class="logo">
                                    
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group form">
                                            <!--
                           <input type="text" class="form-control" placeholder="Buscar...">
                           <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">Buscar</button>
                           </span>
                           -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="navbar navbar-inverse" role="banner">
                                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right"
                                        role="navigation">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{ route('admin/productos') }}">Administrador</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-10">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin/productos') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Productos</li>
                        </ol>
                    </nav>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="content-box-large">

                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h2>Productos</h2>
                                    </div>

                                </div>

                                <div class="panel-body">

                                    @if (Session::has('message'))
                                        <div class="alert alert-primary" role="alert">
                                            {{ Session::get('message') }}
                                        </div>
                                        <script>
                                            swal.fire({
                                                icon: "success",
                                                title: "A sido creado con exito"
                                            });
                                        </script>
                                    @endif


                                    <a href="{{ route('admin/productos/crear') }}" class="btn btn-success mt-4 ml-3">
                                        Crear
                                    </a>

                                    <section class="example mt-4">

                                        <div class="table-responsive">

                                            <table class="table table-striped" id="productos">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Precio</th>
                                                        <th>Stock</th>
                                                        <th>Imagen</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($productos as $prod)
                                                        <tr>
                                                            <td scope="row" class="v-align-middle">
                                                                {{ $prod->nombre }}</td>
                                                            <td class="v-align-middle">{{ $prod->precio }}</td>
                                                            <td class="v-align-middle">{{ $prod->stock }}</td>
                                                            <td class="v-align-middle">
                                                                <img src="{!! asset("uploads/$prod->img") !!}" width="30"
                                                                    class="img-responsive">
                                                            </td>
                                                            <td class="v-align-middle">

                                                                <form
                                                                    action="{{ route('admin/productos/eliminar', $prod->id) }}"
                                                                    method="POST" class="form-horizontal"
                                                                    role="form"
                                                                    onsubmit="return confirmarEliminar()">

                                                                    <input type="hidden" name="_method"
                                                                        value="PUT">
                                                                    <input type="hidden" name="_token"
                                                                        value="{{ csrf_token() }}">
                                                                    <a href="{{ route('admin/productos/detalles', $prod->id) }}"
                                                                        class="btn btn-dark">Detalles</a>
                                                                    <a href="{{ route('admin/productos/actualizar', $prod->id) }}"
                                                                        class="btn btn-primary">Editar</a>
                                                                    <a name=btnborrar id="btnborrar"
                                                                        class="btn btn-danger"
                                                                        href="javascript:borrar('id')"
                                                                        role="button">Eliminar</a>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>

    <hr>




    <footer class="text-muted mt-3 mb-3">
        <div align="center">
            Desarrollado por <a href="" target="_blank">Pablo Diego Perotti</a>
        </div>
    </footer>
    <script>
        $('#productos').DataTable()
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        function borrar(id) {
            Swal.fire({
                title: 'Desea borrar el vino?',
                text: "No vas a poder recuperarlo si lo borras!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Borralo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "index.php?txtID=" + nombre;
                    Swal.fire(
                        'Borrado!',
                        'El usuario ha sido borrado con exito.',
                        'Correcto'
                    )

                }
            })
        }
    </script>


</body>

</html>
