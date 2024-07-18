<!DOCTYPE html>
<html>
<head>
    <title>Enviar Mensaje</title>
</head>
<body>
    <h1>Enviar Mensaje</h1>
    <form action="{{ route('mensajes.store') }}" method="POST">
        @csrf
        <label for="de_id">De:</label>
        <select id="de_id" name="de_id" required>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
        <label for="para_id">Para:</label>
        <select id="para_id" name="para_id" required>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
        <label for="contenido">Mensaje:</label>
        <textarea id="contenido" name="contenido" required></textarea>
        <button type="submit">Enviar</button>
    </form>
    <a href="{{ route('mensajes.index') }}">Volver</a>
</body>
</html>
