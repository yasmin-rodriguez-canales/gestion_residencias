<!DOCTYPE html>
<html>
<head>
    <title>Editar Residencia</title>
</head>
<body>
    <h1>Editar Residencia</h1>
    <form action="{{ route('residencias.update', $residencia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $residencia->nombre }}" required>
        <!-- Otros campos según tus necesidades -->
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('residencias.index') }}">Volver</a>
</body>
</html>
