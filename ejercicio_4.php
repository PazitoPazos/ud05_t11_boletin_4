<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h3>Ejercicio 4</h3>
        <p>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for.</p>
        <?php
            for ($i=0; $i <= 8; $i++) { 
                $count= $i * 20;
                $res= 320 - $count;
                echo "<p>$res</p>";
            }
        ?>
    </body>
</html>