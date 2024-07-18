<!DOCTYPE html>
<html>
<head>
    <title>Solicitudes</title>
</head>
<body>
    <h1>Solicitudes</h1>
    <a href="{{ route('solicitudes.create') }}">Agregar Nueva Solicitud</a>
    <table>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Residencia</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitudes as $solicitud)
                <tr>
                    <td>{{ $solicitud->estudiante->name }}</td>
                    <td>{{ $solicitud->residencia->nombre }}</td>
                    <td>{{ $solicitud->estado }}</td>
                    <td>
                        <a href="{{ route('solicitudes.edit', $solicitud->id) }}">Editar</a>
                        <form action="{{ route('solicitudes.destroy', $solicitud->id) }}" method="POST" style="display:inline;">
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
