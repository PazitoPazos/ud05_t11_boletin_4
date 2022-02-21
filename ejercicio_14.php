<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 14</title>
    </head>
    <body>
        <h3>Ejercicio 14</h3>
        <p>Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.</p>

        <form action="ejercicio_14.php" method="post">
            <p><input type="text" name="base"></p>
            <p><input type="text" name="exp"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $base=isset($_REQUEST["base"])?intval($_REQUEST["base"]):"a";
        $exp=isset($_REQUEST["exp"])?intval($_REQUEST["exp"]):"a";
        if (!is_numeric($base) || !is_numeric($exp) || $exp < 0) {
            echo "<p>Introduce un número para la base y un entero positivo para el exponente.</p>";
        } else {
            $calc = pow($base, $exp);
            echo "<p>El resultado es: $calc</p>";
        }
        ?>
    </body>
</html>