<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Habitaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, button {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registrar Residencia</h1>
        <form action="{{ route('residencias.store') }}" method="POST">
            @csrf
            <label for="dueno_id">Dueño:</label>
            <select id="dueno_id" name="dueno_id" required>
                @foreach($duenos as $dueno)
                    <option value="{{ $dueno->id }}">{{ $dueno->nombre }}</option>
                @endforeach
            </select>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="100" required>

            <label for="disponibilidad">Disponibilidad:</label>
            <select id="disponibilidad" name="disponibilidad" required>
                <option value="Disponible">Disponible</option>
                <option value="No Disponible">No Disponible</option>
            </select>

            <button type="submit">Registrar Residencia</button>
        </form>
    </div>
</body>
</html>
