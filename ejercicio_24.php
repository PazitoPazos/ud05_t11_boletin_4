<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 24</title>
    </head>
    <body>
        <h3>Ejercicio 24</h3>
        <p>Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier para que los espacios tengan la misma anchura que los números.</p>

        <form action="ejercicio_24.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $h=isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?intval($_REQUEST["num"]):"a";
            for ($i=0; $i < $h; $i++) { 
                for ($j=0; $j <= $i; $j++) { 
                    echo "0&nbsp;";
                }
                echo "<br />";
            }
        ?>
    </body>
</html>