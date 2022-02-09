<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h3>Ejercicio 5</h3>
        <p>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while.</p>
        <?php
            $i=0;
            while ($i <= 8) {
                $count= $i * 20;
                $res= 320 - $count;
                echo "<p>$res</p>";
                $i= $i + 1;
            }
        ?>
    </body>
</html>