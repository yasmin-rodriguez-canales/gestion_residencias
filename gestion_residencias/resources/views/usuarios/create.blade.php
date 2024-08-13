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
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="contraseña" placeholder="Contraseña" required>
        <select name="rol" required>
            <option value="">Selecciona un rol</option>
            <option value="Dueño">Dueño</option>
            <option value="Estudiante">Estudiante</option>
        </select>
        <button type="submit">Guardar</button>
    </form>

    <h1>Lista de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->rol }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
