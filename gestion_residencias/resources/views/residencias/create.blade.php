<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Habitaciones</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input, select, textarea, button {
    margin-bottom: 15px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

textarea {
    resize: vertical;
    height: 100px;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

#availableRooms {
    margin-top: 20px;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    background-color: #eee;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Registrar Habitaciones Disponibles</h1>
        <form id="roomRegistrationForm">
            <label for="residence">Residencia:</label>
            <select id="residence" name="residence">
                <option value="residencia1">Residencia 1</option>
                <option value="residencia2">Residencia 2</option>
                <!-- Añadir más residencias según sea necesario -->
            </select>
            
            <label for="roomNumber">Número de Habitación:</label>
            <input type="text" id="roomNumber" name="roomNumber" required>
            
            <label for="roomDescription">Descripción:</label>
            <textarea id="roomDescription" name="roomDescription" required></textarea>
            
            <label for="roomPrice">Precio:</label>
            <input type="number" id="roomPrice" name="roomPrice" required>
            
            <button type="submit">Registrar Habitación</button>
        </form>
        
        <div id="availableRooms">
            <h2>Habitaciones Disponibles</h2>
            <ul>
                <li>Habitación 101 - Descripción breve - $300</li>
                <li>Habitación 102 - Descripción breve - $350</li>
                <!-- Mostrar habitaciones reales según sea necesario -->
            </ul>
        </div>
    </div>
</body>
</html>
