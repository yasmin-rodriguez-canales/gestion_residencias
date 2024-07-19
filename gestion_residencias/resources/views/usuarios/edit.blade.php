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
        <input type="text" name="name" value="{{ $usuario->name }}" required>
        <input type="email" name="email" value="{{ $usuario->email }}" required>
        <input type="password" name="password" placeholder="Nueva Contraseña (opcional)">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
