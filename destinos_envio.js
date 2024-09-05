<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta General de Vuelo o Avión</title>
    <style>
        body {
            background-color: beige;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            padding: 12px 25px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        p {
            margin-top: 15px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Consulta General de Vuelo o Avión</h2>
        <form method="POST" action="consulta_avion.php">
            <input type="submit" name="Ok" value="Enviar">
        </form>
        <p>Haga clic en el botón para enviar la consulta.</p>
    </div>
</body>
</html>
