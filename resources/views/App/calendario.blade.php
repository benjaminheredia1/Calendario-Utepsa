<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Universitario</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css" rel="stylesheet">
    <link rel='stylesheet' href="{{ asset('css/estilos_dias.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
    <script src="{{ asset('js/funcionalidad_calendario.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <section id="control-panel">
            <div class="clase-padre">
                <div class="modalidades_dias">
                    <button class="btn" id="btn-presencial"> <svg width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="15" height="15" x="4" y="4"
                                style="fill:rgb(255,0,0);stroke:white; stroke-width: 1;" />
                        </svg> Inicio Módulo Presencial</button>
                    <button class="btn" id="btn-semi-presencial">
                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                            <rect width="15" height="15" x="4" y="4"
                                style="fill:rgb(255, 145, 0);stroke:white; stroke-width: 1;" />
                        </svg>
                        Inicio Módulo Semipresencial Lunes-Miercoles</button>
                    <button class="btn" id="btn-semi-presencial-mier-vier">
                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                            <rect width="15" height="15" x="4" y="4"
                                style="fill:rgb(105, 44, 146);stroke:white; stroke-width: 1;" />
                        </svg>
                        Inicio Módulo Semipresencial
                        Martes y jueves</button>
                    <button class="btn" id="btn-sabado">
                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                            <rect width="15" height="15" x="4" y="4"
                                style="fill:rgb(0, 132, 255);stroke:white; stroke-width: 1;" />
                        </svg>
                        Sábados</button>
                </div>



            </div>
            <button class="btn delete" id="btn-agregar-festivo">Agregar Fecha Festiva</button>
            <button class="btn delete" id="btn-eliminar-festivo">Eliminar Fechas Festivas</button>
            <button class="btn delete" id="btn-borrar">Borrar Calendario</button>
        </section>
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


        <!-- Fechas importantes -->
        <section id="fechas-importantes">
            <h2>Fechas Importantes</h2>
            <ul id="lista-fechas">
                <!-- Fechas importantes generadas dinámicamente -->
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Universidad Utepsas - Todos los derechos reservados</p>
    </footer>

    <!-- Script para manejar el calendario y los botones -->
    <script src="{{ asset('js/calendario.js') }}"></script>
</body>

</html>
