<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 22</title>
    </head>
    <body>
        <h3>Ejercicio 22</h3>
        <p>Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.</p>

        <?php
        for ($num=2; $num <= 100; $num++) { 
            $esprimo = true;
            for ($i=2; $i < $num; $i++) { 
                if ($num % $i == 0) {
                    $esprimo = false;
                    break;
                }
            }
            if ($esprimo) {
                echo "<p>$num</p>";
            }
        }
        ?>
    </body>
</html>