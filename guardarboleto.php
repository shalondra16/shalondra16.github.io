<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>


 <?php
// Conexión a la base de datos
include "conexion.php";

// Información del boleto
$bole_fecha = $_POST["fvuelo"];
$bole_clase = $_POST["class"];
$pasa_codigo = $_POST["cpasajeros"];

// Consulta para insertar datos
$consulta = "INSERT INTO boleto (bole_fecha, bole_clase, pasa_codigo) VALUES ('$bole_fecha', '$bole_clase', '$pasa_codigo')";
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