document.addEventListener('DOMContentLoaded', function() {
    let contenedor = document.getElementsByClassName('fullcalendar');

    if (contenedor.length > 0) {
        let calendario = new FullCalendar.Calendar(contenedor[0], {
            plugins: ['dayGrid', 'timeGrid', 'list'],
            locale: 'es', // Para mostrar los textos en español
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            }
        });

        calendario.render();
    } else {
        console.error("No se encontró el contenedor del calendario.");
    }
});