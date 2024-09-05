<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>


<?php 
    // Conexión a la base de datos
    include "conexion.php";

    // Información del pasajero
    $nombre_pasa = $_POST["npasajeros"];
    $apellido_pasa = $_POST["apasajeros"];
    $telefono_pasa = $_POST["tpasajeros"];

    // Consulta para insertar datos
    $consulta = "INSERT INTO pasajero(pasa_nombre, pasa_apellido, pasa_telefono) VALUES ('$nombre_pasa', '$apellido_pasa', '$telefono_pasa')";
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