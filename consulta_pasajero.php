<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Pasajero</title>
    <style>
       body {
            background-color:#82e0aa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
           background-color: #d6eaf8 ;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            text-align: left;
            border: 5px solid #196f3d;
        }
        h2 {
            color: black;
            margin-bottom: 20px;
            text-align: center;
        }
        .record {
            background-color:#58d68d;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .record p {
            margin: 5px 0;
            color: black;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Consulta de Pasajero</h2>
    
    <?php  
    include "conexion.php";

    $consulta = "SELECT * FROM pasajero";
    $resultado = mysqli_query($conec, $consulta);

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='record'>";
        echo "<p><strong>Nombre del pasajero:</strong> " . $fila['pasa_nombre'] . "</p>";
        echo "<p><strong>Apellido del pasajero:</strong> " . $fila['pasa_apellido'] . "</p>";
        echo "<p><strong>Telefono del pasajero:</strong> " . $fila['pasa_telefono'] . "</p>";

        echo "</div>";
    }
    ?>

</div>

</body>
</html>
