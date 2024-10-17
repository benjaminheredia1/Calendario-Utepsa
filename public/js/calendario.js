// Variable auxiliar, normalmente iniciará en módulo presencial
var feriados = [];
var auxiliar = 0;

function modalidades(botones) {
    for (let i = 0; i < botones.length; i++) { // Cambiado a 'length'
        let elemento = document.getElementById(botones[i]);

        if (elemento) { // Verifica que el elemento existe antes de agregar el listener
            console.log(elemento, 'Botón encontrado');
            elemento.addEventListener('click', function() {
                auxiliar = i; // Cambia el valor de auxiliar según el botón presionado
                console.log("Auxiliar ahora es:", auxiliar);
            });
        } else {
            console.log(`No se encontró el botón con clase: ${botones[i]}`);
        }
    }
}

function marcarCada20Dias(calendario, fechaInicial, color, cantidadDias, sabados = false) {


    let cantidad_dias = sabados ? 28 : 28
    let fecha = new Date(fechaInicial);
    if (!sabados) {

        for (let i = 0; i < feriados.length; i++) {
            let todasLasFechas = document.querySelectorAll('[data-date]');
            todasLasFechas.forEach(fecha => {
                if (fecha.getAttribute('data-date') == feriados[i]) {
                    cantidad_dias += 1;

                };
            });
        }
    }
    for (let i = 0; i < cantidadDias; i += cantidad_dias) {
        let fechaFutura = new Date(fecha); // Clonar la fecha inicial
        fechaFutura.setDate(fecha.getDate() + i); // Añadir 20 días al contador

        let dateStr = fechaFutura.toISOString().split('T')[0]; // Obtener formato 'YYYY-MM-DD'
        let objeto = document.querySelector(`[data-date='${dateStr}']`);
        let conector = objeto.getElementsByTagName('a')[0];
        conector.style.color = 'white';
        if (objeto) {
            objeto.style.background = color;
            // Marcar el color rojo
        }
    }
}

function Crear_Cargar_Calendarios(meses, ano) {
    var contenedor = document.getElementsByClassName('fullcalendar')[0]; // Obtén el contenedor correcto

    for (let i = 0; i < meses; i++) { // Recorre de 0 a meses - 1 (12 meses en total)
        let calendario_mes = document.createElement('div');
        calendario_mes.classList.add('calendario-mes');
        contenedor.appendChild(calendario_mes); // Añade el calendario al contenedor
        const calendario = new FullCalendar.Calendar(calendario_mes, {
            locale: 'es',
            initialView: 'dayGridMonth',
            showNonCurrentDates: false,
            headerToolbar: {
                left: '',
                center: 'title',
                right: ''
            },
            fixedWeekCount: true,
            titleFormat: {
                year: undefined, // Oculta el año
                month: 'long' // Solo muestra el mes
            },
            showNonCurrentDates: false,
            dateClick: function(info) {
                let dateStr = info['dateStr']; // Fecha en formato 'YYYY-MM-DD'
                let objeto = document.querySelector(`[data-date='${dateStr}']`);

                // Aplicar colores según el valor de `auxiliar`
                if (objeto) {
                    let color = '';
                    if (auxiliar === 0) {
                        color = 'red';
                    } else if (auxiliar === 1) {
                        color = '#FF9100';
                    } else if (auxiliar === 2) {
                        color = '#692C92';
                    } else if (auxiliar === 3) {
                        color = '#0084FF';
                    } else if (auxiliar === 4) {
                        color = 'festivo';
                    }

                    // Marca el día seleccionado

                    if (color === 'red') { // Solo marcar cada 20 días si es color rojo
                        marcarCada20Dias(calendario, info.date, color, 365); // Marcar 365 días (aproximadamente 1 año)
                        let click = document.querySelector(`[data-date='${dateStr}']`);
                        let dias = click.getElementsByTagName('a')[0];
                        dias.style.color = 'white';
                    }
                    if (color === '#FF9100') { // Solo marcar cada 20 días si es color rojo
                        marcarCada20Dias(calendario, info.date, color, 365);
                        let click = document.querySelector(`[data-date='${dateStr}']`);
                        let dias = click.getElementsByTagName('a')[0];
                        dias.style.color = 'white'; // Marcar 365 días (aproximadamente 1 año)
                    }
                    if (color === '#692C92') { // Solo marcar cada 20 días si es color rojo
                        marcarCada20Dias(calendario, info.date, color, 365);
                        let click = document.querySelector(`[data-date='${dateStr}']`);
                        let dias = click.getElementsByTagName('a')[0];
                        dias.style.color = 'white'; // Marcar 365 días (aproximadamente 1 año)
                    }
                    if (color === '#0084FF') { // Solo marcar cada 20 días si es color rojo
                        marcarCada20Dias(calendario, info.date, color, 365, sabados = true);
                        let click = document.querySelector(`[data-date='${dateStr}']`);
                        let dias = click.getElementsByTagName('a')[0];
                        dias.style.color = 'white'; // Marcar 365 días (aproximadamente 1 año)
                    }
                    if (color === 'festivo') {
                        // Seleccionar la celda <td> que contiene la fecha
                        let dayCell = document.querySelector(`[data-date='${dateStr}']`);
                        if (!feriados.includes(dateStr)) {
                            feriados.push(dateStr);
                        }
                        console.log(feriados)

                        if (dayCell) {
                            // Buscar el enlace <a> dentro de la celda <td>
                            let link = dayCell.querySelector('a');

                            if (link) {
                                console.log(link); // Verifica si el enlace está siendo seleccionado correctamente
                                // Cambiar el color del texto del enlace <a>
                                link.style.color = 'red';
                            } else {
                                console.log("Enlace no encontrado dentro de la celda: " + dateStr);
                            }
                        } else {
                            console.log("Día no encontrado: " + dateStr);
                        }
                    }

                }

            },

            initialDate: new Date(ano, i), // Usa 'i' como el mes, y 'ano' como el año
        });

        calendario.render();

    }
    // Llama a la función `modalidades` con las clases de los botones

}

document.addEventListener('DOMContentLoaded', function() {
    Crear_Cargar_Calendarios(12, 2024);
    modalidades(['btn-presencial', 'btn-semi-presencial', 'btn-semi-presencial-mier-vier', 'btn-sabado', 'btn-agregar-festivo']); // Llama a la función para renderizar los 12 meses
    let borrar_calendario = document.getElementById('btn-borrar');
    borrar_calendario.addEventListener('click', function() {
        let dias = document.getElementsByClassName('fc-day');
        for (let i = 0; i < dias.length; i++) {
            dias[i].style.background = 'white';

        }
        let columna = document.querySelectorAll('[role="columnheader"]');
        for (let i = 0; i < columna.length; i++) {
            columna[i].style.background = 'black';

        }
        let domingo = document.querySelectorAll('fc-scrollgrid-sync-inner ');
        for (let i = 0; i < domingo.length; i++) {
            domingo[i].style.background = 'gray';
            domingo[i].parentElement.style.background = 'gray';

        }
    });
});