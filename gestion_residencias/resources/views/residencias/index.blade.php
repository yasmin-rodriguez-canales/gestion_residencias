<!DOCTYPE html>
<html>
<head>
    <title>Residencias</title>
</head>
<body>
    <h1>Residencias</h1>
    <a href="{{ route('residencias.create') }}">Agregar Nueva Residencia</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($residencias as $residencia)
                <tr>
                    <td>{{ $residencia->nombre }}</td>
                    <td>
                        <a href="{{ route('residencias.edit', $residencia->id) }}">Editar</a>
                        <form action="{{ route('residencias.destroy', $residencia->id) }}" method="POST" style="display:inline;">
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
