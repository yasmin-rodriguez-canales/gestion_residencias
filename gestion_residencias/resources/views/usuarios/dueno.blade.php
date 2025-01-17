<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Dueño</title>
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
            width: 80%; 
        }
        .button-container {
            margin-top: 20px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panel del Dueño</h1>
        
        <div class="button-container">
            <a href="{{ route('residencias.create') }}">
                <button>Nueva Residencia</button>
            </a>
            
            <a href="{{ route('residencias.calendario') }}" target="_blank">
    <button>Ver calendario</button>
</a>
            
            <button>Solicitudes Pendientes</button>
        </div>

        <h2>Residencias Registradas</h2>
        <table>
            <thead>
                <tr>
                    <th>No. Registro</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($residencias as $residencia)
                    <tr>
                        <td>{{ $residencia->id }}</td>
                        <td>{{ $residencia->descripcion }}</td>
                        <td>{{ $residencia->precio }}</td>
                        <td>{{ $residencia->disponibilidad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>