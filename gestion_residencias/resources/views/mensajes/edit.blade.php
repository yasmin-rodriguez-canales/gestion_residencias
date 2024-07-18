<!DOCTYPE html>
<html>
<head>
    <title>Editar Mensaje</title>
</head>
<body>
    <h1>Editar Mensaje</h1>
    <form action="{{ route('mensajes.update', $mensaje->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="de_id">De:</label>
        <select id="de_id" name="de_id" required>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}" {{ $mensaje->de_id == $usuario->id ? 'selected' : '' }}>
                    {{ $usuario->name }}
                </option>
            @endforeach
        </select>
        <label for="para_id">Para:</label>
        <select id="para_id" name="para_id" required>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}" {{ $mensaje->para_id == $usuario->id ? 'selected' : '' }}>
                    {{ $usuario->name }}
                </option>
            @endforeach
        </select>
        <label for="contenido">Mensaje:</label>
        <textarea id="contenido" name="contenido" required>{{ $mensaje->contenido }}</textarea>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('mensajes.index') }}">Volver</a>
</body>
</html>
