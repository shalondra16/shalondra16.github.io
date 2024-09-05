<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Conexión a la Base de Datos</title>
    <style>
       
        .guardado { color: #4CAF50; 
                    font-size: 18px;
                    margin-bottom: 20px; }

        .error { color: #F44336; 
                 font-size: 18px;
                 margin-bottom: 20px; }
    </style>
</head>
<body>

    <?php 
    $conec=mysqli_connect("localhost", "root", "", "agencia");

    if (mysqli_connect_errno()) {
        echo "<p class='error'>Error al conectar la Base de Datos: ".mysqli_connect_error()."</p>";
    } else {
        echo "<p class='guardado'>Conexión Exitosa</p>";
    }
    ?>

</body>
</html>
