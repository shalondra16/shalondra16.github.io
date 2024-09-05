<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eliminar Pasajero</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .info {
            text-align: left;
            margin-bottom: 20px;
        }

        .info p {
            margin: 5px 0;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Spacing between buttons */
        }

        .button-container input[type="submit"], .button-container .back-button {
            background-color: #ff6b6b;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            width: 100%;
        }

        .button-container input[type="submit"]:hover, .button-container .back-button:hover {
            background-color: #ff4b4b;
        }

        .back-button {
            background-color: #4CAF50;
        }

        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
	<?php 
$cod=$_POST['cpasajero'];
include "conexion.php";

$consulta="SELECT * FROM pasajero WHERE pasa_codigo='$cod'";
$resultado=mysqli_query($conec,$consulta);

          if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='info'>"; 
        echo "<p>Codigo de Pasajero: " . $fila['pasa_codigo'] . "</p>";
        echo "<p>Nombre: " . $fila['pasa_nombre'] . "</p>";
        echo "<p>Apellido: " . $fila['pasa_apellido'] . "</p>";
        echo "<p>Telefono: " . $fila['pasa_telefono'] . "</p>";
    echo "</div>";
    }

    } else {
            echo "<p>No se encontraron datos para el código proporcionado.</p>";
            

        }

        ?>


        <div class="form-container">
            <form action="eliminar_datos_pasajero.php" method="POST">
                <h3>¿Desea eliminar el registro?</h3><br>
                <input type="hidden" name="cpasajero" value="<?php echo $cod; ?>"> 

                <div class="button-container">
                    <input type="submit" name="ok" value="Eliminar">
                    <a href="pasajeros_consulta.php" class="back-button">Volver</a>
                </div>
            </form>
        </div> 
    </div>

</body>
</html>