<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Boleto</title>
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
    <h2>Consulta por Codigo</h2>
<?php 

$cod = $_POST['codi'];

include "conexion.php";

// Corrigiendo la consulta SQL
$consulta = "SELECT pasajero. pasa_nombre, pasajero. pasa_apellido, boleto. bole_codigo, avion. avi_codigo, destino. des_nombre FROM pasajero INNER JOIN boleto ON pasajero. pasa_codigo = boleto. pasa_codigo INNER JOIN avion ON boleto. bole_codigo = avion. avi_codigo INNER JOIN destino ON avion. avi_codigo = destino. des_codigo";

$resultado = mysqli_query($conec, $consulta);

while ($fila = mysqli_fetch_assoc($resultado)) { 
	
    echo "<div class='record'>";
    echo "<p><strong>Nombre del Pasajero:</strong> " . $fila['pasa_nombre'] . "</p>";
    echo "<p><strong>Apellido del Pasajero:</strong> " . $fila['pasa_apellido'] . "</p>";
    echo "<p><strong>Código del Boleto:</strong> " . $fila['bole_codigo'] . "</p>";
    echo "<p><strong>Código del Avión:</strong> " . $fila['avi_codigo'] . "</p>";
    echo "<p><strong>Nombre del Destino:</strong> " . $fila['des_nombre'] . "</p>";
    echo "</div>";
}

?>
</body>
</html>
