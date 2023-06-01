<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <style>
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #1f1f1f;
            color: #ffffff;
            font-family: "Arial", sans-serif;
        }
        .container h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 4px;
        }
        .container input[type="text"],
        .container input[type="email"],
        .container input[type="password"] {
            width: 100%;
            padding: 3px;
            margin-bottom: 10px;
            background-color: #9c2c2c;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-family: "Arial", sans-serif;
        }
        .container input[type="text"]:focus,
        .container input[type="email"]:focus,
        .container input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 3px #2691d9;
        }
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #2691d9;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: "Arial", sans-serif;
        }
        .container input[type="submit"]:hover {
            background-color: #1a6ca2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form method="POST" action="procesar_registro.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br>

            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>
