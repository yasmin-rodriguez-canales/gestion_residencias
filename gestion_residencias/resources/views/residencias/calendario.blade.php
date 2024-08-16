<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Residencias</title>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>
    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id='calendar'></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    // Aquí puedes agregar tus eventos, por ejemplo:
                    {
                        title: 'Residencia Disponible',
                        start: '2024-08-10',
                        end: '2024-08-12',
                        description: 'Residencia 101'
                    },
                    {
                        title: 'Residencia No Disponible',
                        start: '2024-08-15',
                        end: '2024-08-16',
                        description: 'Residencia 102'
                    }
                ]
            });

            calendar.render();
        });
    </script>
</body>
</html>
