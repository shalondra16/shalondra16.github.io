<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eliminar Piloto</title>
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
            gap: 10px; 
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
$cod=$_POST['cpiloto'];
include "conexion.php";

$consulta="SELECT * FROM piloto WHERE pilo_codigo='$cod'";
$resultado=mysqli_query($conec,$consulta);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='info'>";         
        echo "<p>Codigo del Piloto: " . $fila['pilo_codigo'] . "</p>";
        echo "<p>Nombre: " . $fila['pilo_nombre'] . "</p>";
        echo "<p>Apellido: " . $fila['pilo_apellido'] . "</p>";
        echo "<p>Telefono: " . $fila['pilo_telefono'] . "</p>";
        echo "<p>Código del Avion: " . $fila['avi_codigo'] . "</p>";
    echo "</div>";
    }

    } else {
            echo "<p>No se encontraron datos para el código proporcionado.</p>";
            

        }

        ?>

        <div class="form-container">
            <form action="eliminar_datos_piloto.php" method="POST">
                <h3>¿Desea eliminar el registro?</h3><br>
                <input type="hidden" name="cpiloto" value="<?php echo $cod; ?>"> 

                <div class="button-container">
                    <input type="submit" name="ok" value="Eliminar">
                    <a href="consulta_piloto.php" class="back-button">Volver</a>
                </div>
            </form>
        </div> 
    </div>

</body>
</html>