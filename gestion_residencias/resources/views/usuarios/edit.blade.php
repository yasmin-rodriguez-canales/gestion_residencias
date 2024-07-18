<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ $usuario->name }}" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $usuario->email }}" required>
        <!-- Otros campos según tus necesidades -->
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('usuarios.index') }}">Volver</a>
</body>
</html>
