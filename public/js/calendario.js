function Crear_Cargar_Calendarios(meses, ano) {
    var contenedor = document.getElementsByClassName('fullcalendar')[0]; // Obtén el contenedor correcto

    for (let i = 0; i < meses; i++) { // Recorre de 0 a meses - 1 (12 meses en total)
        let calendario_mes = document.createElement('div');
        calendario_mes.classList.add('calendario-mes');
        contenedor.appendChild(calendario_mes); // Añade el calendario al contenedor
        const calendario = new FullCalendar.Calendar(calendario_mes, {
            locale: 'es',
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: '',
                center: 'title',
                right: ''
            },
            initialDate: new Date(ano, i), // Usa 'i' como el mes, y 'ano' como el año
        });

        calendario.render();
    }
}

document.addEventListener('DOMContentLoaded', function() {
    Crear_Cargar_Calendarios(12, 2024); // Llama a la función para renderizar los 12 meses
});