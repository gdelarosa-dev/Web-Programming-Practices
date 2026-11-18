<?php

    //recibe.php
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $rol  = $_GET['rol'];

    $rol_txt = ($rol == 1) ? 'Gerente' : 'Ejecutivo';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos recibidos</title>

    <style>
        body {
            background-color: #e8f0fe;
            font-family: Arial;
        }

        #caja {
            width: 300px;
            margin: 80px auto;
            padding: 20px;
            background-color: white;
            border: 2px solid #4a90e2;
            text-align: center;
        }
    </style>
</head>
<body>

    <div id="caja">
        <h2>Datos recibidos</h2>

        <?php
            echo "Bienvenido: $user<br>";
            echo "Pass: $pass <br>";
            echo "Rol: $rol_txt";
        ?>

        <br><br>
        <a href="formulario_request.html">Regresar</a>
    </div>

</body>
</html>