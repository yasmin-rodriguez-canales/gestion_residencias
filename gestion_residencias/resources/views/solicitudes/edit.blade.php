<!DOCTYPE html>
<html>
<head>
    <title>Editar Solicitud</title>
</head>
<body>
    <h1>Editar Solicitud</h1>
    <form action="{{ route('solicitudes.update', $solicitud->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="estudiante_id">Estudiante:</label>
        <select id="estudiante_id" name="estudiante_id" required>
            @foreach($estudiantes as $estudiante)
                <option value="{{ $estudiante->id }}" {{ $solicitud->estudiante_id == $estudiante->id ? 'selected' : '' }}>
                    {{ $estudiante->name }}
                </option>
            @endforeach
        </select>
        <label for="residencia_id">Residencia:</label>
        <select id="residencia_id" name="residencia_id" required>
            @foreach($residencias as $residencia)
                <option value="{{ $residencia->id }}" {{ $solicitud->residencia_id == $residencia->id ? 'selected' : '' }}>
                    {{ $residencia->nombre }}
                </option>
            @endforeach
        </select>
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" value="{{ $solicitud->estado }}" required>
        <!-- Otros campos según tus necesidades -->
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('solicitudes.index') }}">Volver</a>
</body>
</html>
