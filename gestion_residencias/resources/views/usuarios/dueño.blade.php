<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Residencias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
        }
        table {
            margin: 0 auto 20px;
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Responsable</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de datos en la tabla -->
                <tr>
                    <td>1</td>
                    <td>Residencia A</td>
                    <td>Calle Falsa 123</td>
                    <td>Juan Pérez</td>
                    <td>555-1234</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Residencia B</td>
                    <td>Avenida Siempre Viva 456</td>
                    <td>Ana García</td>
                    <td>555-5678</td>
                </tr>
                <!-- Más filas según sea necesario -->
            </tbody>
        </table>

        <div class="button-container">
            <button onclick="location.href='{{ route('residencias.create') }}'">Agregar Residencia</button>
            <button onclick="location.href='{{ route('residencias.edit') }}'">Modificar Residencia</button>
            <button onclick="location.href='{{ route('solicitudes.pendientes') }}'">Solicitudes Pendientes</button>
        </div>
    </div>
</body>
</html>
