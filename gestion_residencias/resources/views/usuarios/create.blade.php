<!DOCTYPE html>
<html>
<head>
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <!-- Otros campos según tus necesidades -->
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('usuarios.index') }}">Volver</a>
</body>
</html>
