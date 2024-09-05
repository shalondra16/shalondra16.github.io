<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Eliminado</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0c3fc, #8ec5fc); 
            color: #333;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
            margin: auto;
        }

        h1 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #4a4a4a;
        }

        .message {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #666;
        }

        .btn {
            background: linear-gradient(145deg, #ffddc1, #ffd1dc); 
            border: none;
            color: #333;
            padding: 15px 30px;
            font-size: 1rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 9px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .btn:hover {
            background: linear-gradient(145deg, #ffd1dc, #ffddc1);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
        }

        .success {
            color: #81c784; 
        }

        .error {
            color: #e57373; 
        }
    </style>
</head>
<body>

<div class="container">
    <?php 
    $cod = $_POST['cpasajero'];
    include "conexion.php";

    $consulta = "DELETE FROM pasajero WHERE pasa_codigo='$cod'";
    $resultado = mysqli_query($conec, $consulta);

    if ($resultado) {
        echo "<h1 class='success'>Registro Eliminado</h1>";
    } else {
        echo "<h1 class='error'>Error, Registro NO Eliminado</h1>";
    }
    ?>
    <a href="consulta_general.html" class="btn">Volver al Inicio</a>
</div>

</body>
</html>

