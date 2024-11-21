<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Personalización para la barra de navegación */
        .navbar {
            background-color: #2c3e50; /* Fondo oscuro para la barra */
        }
        .navbar-brand {
            color: #ecf0f1;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #ecf0f1;
        }
        .navbar-nav .nav-link:hover {
            color: #3498db; /* Azul para el hover */
        }

        /* Estilo para el título de la página */
        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #34495e;
            margin-top: 30px;
        }

        .hero p {
            font-size: 1.2rem;
            color: #7f8c8d;
        }

        /* Estilo para las tarjetas de navegación */
        .card {
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #2c3e50;
            color: #fff;
        }

        .card-body {
            padding: 20px;
        }

        /* Estilo para el pie de página */
        .footer {
            text-align: center;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 15px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .footer a {
            color: #ecf0f1;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }

        /* Estilos para los botones */
        .btn-primary {
            background-color: #3498db;
            border-color: #2980b9;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #1c5981;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Logo dentro de la barra de navegación -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/img/logo.png" alt="Logo AS" class="rounded-circle" style="width: 80px; height: 80px; margin-right: 20px;">
                <h3>AS Accesorios</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/dashboard">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/reportes">Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/logout">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy; 2024 AS Accesorios | <a href="#">Política de Privacidad</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
