<!DOCTYPE html>
<html>
<head>
    <title>Agregar Residencia</title>
</head>
<body>
    <h1>Agregar Residencia</h1>
    <form action="{{ route('residencias.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <!-- Otros campos según tus necesidades -->
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('residencias.index') }}">Volver</a>
</body>
</html>
