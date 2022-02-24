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
        $primos = array(2);
        for ($i=2; $i <= 100; $i++) { 
            $esprimo = true;
            for ($j=1; $j < count($primos); $j++) { 
                if ($i % $primos[$j] == 0) {
                    $esprimo = false;
                    break;
                }
            }
            if ($esprimo) {
                array_push($primos, $i);
                echo "<p>$i</p>";
            }
        }
        ?>
    </body>
</html>