<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Universitario</title>
    <link rel="stylesheet" href="{{ asset('css/calendario.css') }}">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

</head>

<body>
    <header>
        <nav>
            <h1>Calendario Universitario</h1>
            <ul>
                <li><a href="#agregar">Agregar Fecha</a></li>
                <li><a href="#calendario">Ver Calendario</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Sección de agregar fecha -->
        <section id="agregar">
            <h2>Agregar Fecha</h2>
            <form id="form-fecha">
                <label for="titulo">Título del evento:</label>
                <input type="text" id="titulo" placeholder="Ej. Examen Final" required>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" required>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" placeholder="Detalles del evento"></textarea>

                <button type="submit" class="btn agregar">Agregar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Universidad XYZ - Todos los derechos reservados</p>
    </footer>

    <script src="{{ asset('js/calendario.js') }}"></script>

</body>

</html>
