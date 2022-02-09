<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h3>Ejercicio 1</h3>
        <p>Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for.</p>
        <?php
            for ($i=0; $i <= 20; $i++) { 
                $res= $i * 5;
                echo "<p>5 * $i = $res</p>";
            }
        ?>
    </body>
</html>