<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>


 <?php
// Conexión a la base de datos
include "conexion.php";

// Información del piloto
$pilo_nombre = $_POST["npiloto"];
$pilo_apellido = $_POST["apiloto"];
$pilo_telefono = $_POST["tpiloto"];
$avi_codigo = $_POST["codigoa"];


// Consulta para insertar datos
$consulta = "INSERT INTO piloto (pilo_nombre, pilo_apellido, pilo_telefono, avi_codigo) VALUES ('$pilo_nombre', '$pilo_apellido', '$pilo_telefono','$avi_codigo')";
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