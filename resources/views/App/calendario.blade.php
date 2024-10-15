<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Universitario</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
    <script src="{{ asset('js/funcionalidad_calendario.js') }}"></script>
</head>

<body>

    <header>
        <h1>Calendario Universitario</h1>
        <nav>
            <ul>
                <li><a href="#agregar-festivo">Agregar Fecha Festiva</a></li>
                <li><a href="#fechas-importantes">Fechas Importantes</a></li>
                <li><a class="eventos-modal-li-a" href="#buscar-eventos">Buscar Eventos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="modal-container">
            <div class="modal">
                <div class="div-exit-jpg-modal-eventos">
                    <img src="{{ asset('img/exit.png') }}" class="exit-jpg-modal-eventos">
                </div>
                <section class="modal-content">
                    <h2 class="modal-title">Buscar Eventos</h2>
                    <input type="text" id="buscar-input" class="modal-input"
                        placeholder="Buscar evento por título o fecha">
                    <button class="modal-btn" id="btn-buscar">Buscar</button>
                </section>
            </div>
        </div>



        </div>
        <!-- Contenedor del calendario -->
        <section id="calendario-container">
            <div class="calendario-grid fullcalendar" id="calendar"></div>
        </section>

        <!-- Botones para manejar el calendario -->
        <section id="control-panel">
            <button class="btn" id="btn-presencial">Inicio Módulo Presencial</button>
            <button class="btn" id="btn-semi-presencial">Inicio Módulo Semipresencial Lunes-Martes</button>
            <button class="btn" id="btn-semi-presencial-mier-vier">Inicio Módulo Semipresencial
                Miércoles-Viernes</button>
            <button class="btn" id="btn-sabado">Sábados</button>
            <button class="btn" id="btn-agregar-festivo">Agregar Fecha Festiva</button>
            <button class="btn delete" id="btn-eliminar-festivo">Eliminar Fechas Festivas</button>
            <button class="btn delete" id="btn-borrar">Borrar Calendario</button>
        </section>

        <!-- Fechas importantes -->
        <section id="fechas-importantes">
            <h2>Fechas Importantes</h2>
            <ul id="lista-fechas">
                <!-- Fechas importantes generadas dinámicamente -->
            </ul>
        </section>


        <!-- Próximos eventos -->
        <section id="proximos-eventos">
            <h2>Próximos Eventos</h2>
            <ul id="lista-proximos-eventos">
                <!-- Lista de próximos eventos generada dinámicamente -->
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Universidad XYZ - Todos los derechos reservados</p>
    </footer>

    <!-- Script para manejar el calendario y los botones -->
    <script src="{{ asset('js/calendario.js') }}"></script>
</body>

</html>
