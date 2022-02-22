<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 16</title>
    </head>
    <body>
        <h3>Ejercicio 16</h3>
        <p>Escribe un programa que diga si un número introducido por teclado es o no primo. Un número primo es aquel que sólo es divisible entre él mismo y la unidad.</p>

        <form action="ejercicio_16.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $num=isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?intval($_REQUEST["num"]):"a";
        $esprimo = true;
        if (!is_numeric($num) || $num < 0) {
            echo "<p>Introduce un número.</p>";
        } else {
            for ($i=2; $i < $num; $i++) { 
                if ($num % $i == 0) {
                    echo "<p>El número $num no es primo.</p>";
                    $esprimo = false;
                    break;
                }
            }
            if ($esprimo) {
                echo "<p>El número $num es primo.</p>";
            }
        }
        ?>
    </body>
</html>