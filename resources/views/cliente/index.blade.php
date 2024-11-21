@extends('layout.plantillaCli')

@section('title', 'Home As')

@section('content')
    <style>
        /* Personalización para adaptar los colores y márgenes */
        body {
            background-color: #f0f0f0; /* Fondo gris claro */
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        /* Barra de navegación */
        .navbar {
            background-color: #d6d6d6; /* Color gris claro */
        }
        .navbar-brand, .nav-link {
            color: #000; /* Color negro */
        }
        .nav-link:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            margin-top: 3vh; /* Asegura que esté bien centrado verticalmente */
        }
        .hero h1 {
            font-family: 'Georgia', serif;
            font-size: 3rem;
            font-weight: bold;
            color: #2c3e50;
            transition: color 0.3s ease-in-out;
        }
        .hero h1:hover {
            color: #e74c3c; /* Cambia el color al pasar el ratón */
        }

        /* Galería de imágenes */
        .gallery img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Pie de página */
        .footer {
            text-align: center;
            background-color: #d6d6d6;
            padding: 10px 0;
            color: #333;
            margin-top: 50px;
        }

        /* Mejorar la visibilidad del fondo */
        .hero {
            position: relative;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Fondo semitransparente */
            border-radius: 10px;
        }

        .footer p {
            font-size: 1.2rem;
            color: #333;
        }

        .footer a {
            color: #2c3e50;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }

    </style>

    <!-- Contenedor principal -->
    <div class="container">
            <!-- Título principal -->
            <div class="d-flex justify-content-between align-items-center hero">
                
            <a href="#"><h1>Productos</h1></a>
            <h1>Marcas</h1>
            <h1>Outlet</h1>
            <h1 class="ms-3">Colecciones</h1> <!-- Agregamos un margen a la izquierda -->
        </div>
        

        <!-- Galería de imágenes -->
        <div class="row gallery mt-4">
            <div class="col-md-4">
                <img src="/img/tenisc.jpg" alt="Imagen 1" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="/img/tenis2.jpg" alt="Imagen 2" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="/img/accesorios.jpg" alt="Imagen 3" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <p>Tienda hecha a la medida | <a href="#">Política de Privacidad</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YW0E2s7gGo90XbtaYGSDEHoJhhZj6cN/mVgElFRW+dKXHnycqV6k8mV8dMZoavxI" crossorigin="anonymous"></script>
@endsection
