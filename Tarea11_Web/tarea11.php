<!-- Gabriel De La Rosa Grijalva -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 11 Formulario</title>

    <script src="js/jquery-4.0.0.min.js"></script>

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

        select, input {
            width: 90%;
            padding: 8px;
            margin-bottom: 10px;
        }

        #mensaje {
            color: red;
            font-weight: bold;
        }
    </style>

    <script>
        function valida(){
            var numero = $("#numero").val();

            // Si el valor es 0 (Selecciona), se muestra el mensaje
            if(numero == 0){
                $("#mensaje").html("Selecciona un valor mayor a 0");
            } else {
                // Si es mayor a 0, se envia al PHP
                document.forma01.submit();
            }
        }
    </script>
</head>
<body>

    <div id="caja">

        <h2>Crear filas</h2>

        <form name="forma01" id="forma01" method="get" action="recibe.php">

            <select name="numero" id="numero">
                <option value="0">Selecciona</option>

                <?php
                    // Se generan las opciones de 1 a 5000
                    for($i = 1; $i <= 5000; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>

            </select>
            <br>

            <input type="button" value="Enviar" onclick="valida()" />

            <div id="mensaje"></div>

        </form>

    </div>

</body>
</html>
