<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <h3>Ejercicio 15</h3>
        <p>Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), saque por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y el 5, se deberán mostrar 2¹, 2², 2³, 2⁴, 2⁵.</p>

        <form action="ejercicio_15.php" method="post">
            <p><input type="text" name="base"></p>
            <p><input type="text" name="exp"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $base=isset($_REQUEST["base"])?intval($_REQUEST["base"]):"a";
        $exp=isset($_REQUEST["exp"])?intval($_REQUEST["exp"]):"a";
        $res = 1;
        if (!is_numeric($base) || !is_numeric($exp) || $exp < 0) {
            echo "<p>Introduce un número para la base y un entero positivo para el exponente.</p>";
        } else {
            for ($i=0; $i <= $exp; $i++) {
                $res = 1;
                for ($j=0; $j <$i; $j++) {                         
                    $res *= $base;                           
                }
                echo "<p>$base<sup>$i</sup> = $res</p>";
                
            }
        }
        ?>
    </body>
</html>