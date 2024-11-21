@extends('layout.plantillaAdm')

@section('title', 'Panel de Administración')

@section('content')
    <style>
        /* Estilo general para el panel de administración */
        body {
            background-color: #f4f4f9; /* Fondo gris suave */
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        /* Barra de navegación */
        .navbar {
            background-color: #2c3e50; /* Barra de navegación oscura */
        }
        .navbar-brand {
            color: #ecf0f1; /* Color claro para el logo */
        }
        .nav-link {
            color: #ecf0f1;
        }
        .nav-link:hover {
            text-decoration: underline;
            color: #3498db; /* Color azul al pasar el mouse */
        }

        /* Contenedor principal del panel */
        .container {
            margin-top: 40px;
        }

        .hero {
            text-align: center;
            margin-top: 50px;
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #34495e;
        }

        /* Estilo para las tarjetas de contenido */
        .card {
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #2c3e50;
            color: #fff;
            font-weight: bold;
        }

        .card-body {
            background-color: #fff;
            padding: 20px;
        }

        /* Pie de página */
        .footer {
            text-align: center;
            background-color: #2c3e50;
            padding: 20px;
            color: #ecf0f1;
            margin-top: 50px;
        }

        .footer a {
            color: #ecf0f1;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Botones estilizados */
        .btn-primary {
            background-color: #3498db;
            border-color: #2980b9;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #1c5981;
        }

        /* Estilo para las imágenes */
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
        }
    </style>

    <div class="container">
        <!-- Título principal -->
        <div class="hero">
            <h1>Bienvenido al Panel de Administración</h1>
        </div>

        <!-- Contenido principal (tarjetas) -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Gestión de Clientes
                    </div>
                    <div class="card-body">
                        <p>Administra a tus clientes de manera eficiente.</p>
                        <a href="#" class="btn btn-primary">Ver clientes</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Gestión de Productos
                    </div>
                    <div class="card-body">
                        <p>Agrega, edita o elimina productos de la tienda.</p>
                        <a href="#" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Pedidos
                    </div>
                    <div class="card-body">
                        <p>Consulta y maneja los pedidos de los clientes.</p>
                        <a href="#" class="btn btn-primary">Ver pedidos</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Galería de imágenes 
        <div class="row gallery mt-5">
            <div class="col-md-4">
                <img src="/img/tenisc.jpg" alt="Imagen 1" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="placeholder2.jpg" alt="Imagen 2" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="placeholder3.jpg" alt="Imagen 3" class="img-fluid">
            </div>
        </div>
    </div>-->

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy; 2024 Joyería Delicada | <a href="#">Política de Privacidad</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YW0E2s7gGo90XbtaYGSDEHoJhhZj6cN/mVgElFRW+dKXHnycqV6k8mV8dMZoavxI" crossorigin="anonymous"></script>
@endsection
