<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Inserción</title>
    <style>
        body {
           
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;

        }
        .resultado {
            width: 28%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .resultado p {
            font-size: 28px;
            text-align: center;
        }
         .resultado th {
            font-size: 28px;
            text-align: center;
        }
        .guardado {
            color: #28a745;
        }
        .error {
            color: #dc3545;
        }
        .volver {
            display: block;
            margin: 20px auto 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .volver:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <table>
            <tr>
                <th>Resultado</th>
               </tr>
                <tr>
                <td>
                    <?php 
                 
         $nombre_pasa=$_POST["npasajeros"];   $apellido_pasa=$_POST["apasajeros"];    $telefono_pasa=$_POST["tpasajeros"]; 

         include "conexion.php";

        $consulta="INSERT INTO pasajero(pasa_nombre,pasa_apellido,pasa_telefono) VALUES ('$nombre_pasa','$apellido_pasa','$telefono_pasa')";

        $x=mysqli_query($conec,$consulta);

        if ($x){
        echo "<p class='guardado'>Datos Conectados Correctamente</p>";
        } else {
        echo "<p class='error'>Error al Guardar</p>";
        }
        ?>
                </td>
                </tr>
              </table>
        <a href="pasajeros.html" class="volver">Volver</a>
    </div>
</body>
</html>
