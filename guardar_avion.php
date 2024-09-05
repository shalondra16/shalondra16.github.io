<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>



<?php 
include "conexion.php";

// Información del avion
$cp = $_POST["capacidad"];
$bol_codi = $_POST["cboleto"];

// Consulta para insertar datos
$consulta = "INSERT INTO avion (avi_capacidad, bole_codigo) VALUES ('$cp', '$bol_codi')";
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