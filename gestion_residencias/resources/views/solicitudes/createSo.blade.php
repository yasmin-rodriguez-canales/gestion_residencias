<!DOCTYPE html>
<html>
<head>
    <title>Agregar Solicitud</title>
</head>
<body>
    <h1>Agregar Solicitud</h1>
    <form action="{{ route('solicitudes.store') }}" method="POST">
        @csrf
        <label for="estudiante_id">Estudiante:</label>
        <select id="estudiante_id" name="estudiante_id" required>
            @foreach($estudiantes as $estudiante)
                <option value="{{ $estudiante->id }}">{{ $estudiante->name }}</option>
            @endforeach
        </select>
        <label for="residencia_id">Residencia:</label>
        <select id="residencia_id" name="residencia_id" required>
            @foreach($residencias as $residencia)
                <option value="{{ $residencia->id }}">{{ $residencia->nombre }}</option>
            @endforeach
        </select>
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required>
        <!-- Otros campos según tus necesidades -->
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('solicitudes.index') }}">Volver</a>
</body>
</html>
