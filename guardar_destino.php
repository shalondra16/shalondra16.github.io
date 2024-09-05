<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
</head>
<body>



<?php 
include "conexion.php";

// Información del destino
$des_nombre = $_POST["country"];
$des_cont = $_POST["continent"];
$avi_codigo = $_POST["cavion"];


// Consulta para insertar datos
$consulta = "INSERT INTO destino (des_nombre, des_continente, avi_codigo) VALUES ('$des_nombre', '$des_cont','$avi_codigo')";
$x = mysqli_query($conec, $consulta);

if ($x) {
    // Mensaje de éxito y redirección rápida
    echo "<script>
            alert('Datos Guardados Correctamente');
            window.location.href = 'avion.html';
          </script>";
} else {
    // Mensaje de error y redirección rápida
    echo "<script>
            alert('Error al Guardar');
            window.location.href = 'avion.html';
          </script>";
}

// Cerrar la conexión rápidamente
mysqli_close($conec);
?>
</body>
</html>