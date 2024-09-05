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
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
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
            background: linear-gradient(145deg, #a1c4fd, #c2e9fb); 
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
            background: linear-gradient(145deg, #c2e9fb, #a1c4fd); 
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
        }

        .success {
            color: #66bb6a;
        }

        .error {
            color: #ef5350; 
        }
    </style>
</head>
<body>

<div class="container">
    <?php 
    $cod = $_POST['cpiloto'];
    include "conexion.php";

    $consulta = "DELETE FROM piloto WHERE pilo_codigo='$cod'";
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
