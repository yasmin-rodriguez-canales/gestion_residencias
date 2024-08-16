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
    </style>
</head>
<body>
    <div class="container">
        <h1>Panel del Dueño</h1>
        
        <div class="button-container">
            <a href="{{ route('residencias.create') }}">
                <button>Nueva Residencia</button>
            </a>
            
                <button>Modificar Residencia</button>
            
            
                <button>Solicitudes Pendientes</button>
            
        </div>
    </div>
</body>
</html>
