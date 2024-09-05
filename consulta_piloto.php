<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Pilotos</title>
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
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Consulta de Pilotos</h2>
    
    <?php  
    include "conexion.php";

    $consulta = "SELECT * FROM piloto";
    $resultado = mysqli_query($conec, $consulta);

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='record'>";
        echo "<p><strong>Codigo del piloto:</strong> " . $fila['pilo_codigo'] . "</p>";
        echo "<p><strong>Nombre:</strong> " . $fila['pilo_nombre'] . "</p>";
        echo "<p><strong>Apellido:</strong> " . $fila['pilo_apellido'] . "</p>";
        echo "<p><strong>Telefono:</strong> " . $fila['pilo_telefono'] . "</p>";
        echo "<p><strong>Código del Avion:</strong> " . $fila['avi_codigo'] . "</p>";
        echo "</div>";
    }
    ?>

    <div class="button-container">
        <form method="POST" action="Eliminar_datos_Piloto.html" style="display: inline;">
            <input type="submit" name="ok" value="Eliminar" class="btn">
        </form>
        <form method="POST" action="consulta_piloto.html" style="display: inline;">
            <input type="submit" name="ok" value="Volver" class="btn">
        </form>
    </div>

</div>

</body>
</html>
