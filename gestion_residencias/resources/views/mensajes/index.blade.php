<!DOCTYPE html>
<html>
<head>
    <title>Mensajes</title>
</head>
<body>
    <h1>Mensajes</h1>
    <a href="{{ route('mensajes.create') }}">Enviar Nuevo Mensaje</a>
    <table>
        <thead>
            <tr>
                <th>De</th>
                <th>Para</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mensajes as $mensaje)
                <tr>
                    <td>{{ $mensaje->de->name }}</td>
                    <td>{{ $mensaje->para->name }}</td>
                    <td>{{ $mensaje->contenido }}</td>
                    <td>{{ $mensaje->created_at }}</td>
                    <td>
                        <a href="{{ route('mensajes.edit', $mensaje->id) }}">Editar</a>
                        <form action="{{ route('mensajes.destroy', $mensaje->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
