<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="contraseña" placeholder="Contraseña" required>
        <select name="rol" required>
            <option value="">Selecciona un rol</option>
            <option value="Dueño">Dueño</option>
            <option value="Estudiante">Estudiante</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
