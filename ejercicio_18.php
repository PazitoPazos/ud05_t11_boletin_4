<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 18</title>
    </head>
    <body>
        <h3>Ejercicio 18</h3>
        <p>Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos por teclado y validados como distintos, el programa debe empezar por el menor de los enteros introducidos e ir incrementando de 7 en 7.</p>

        <form action="ejercicio_18.php" method="post">
            <p><input type="text" name="num1"></p>
            <p><input type="text" name="num2"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $num1=isset($_REQUEST["num1"])&&is_numeric($_REQUEST["num1"])?intval($_REQUEST["num1"]):"a";
        $num2=isset($_REQUEST["num2"])&&is_numeric($_REQUEST["num2"])?intval($_REQUEST["num2"]):"a";
        if ($num1 < $num2) {
            $start=$num1+1;
            $limit=$num2;
        } else {
            $start=$num2+1;
            $limit=$num1;
        }
        
        if ($num1 == $num2) {
            echo "<p>Introduce un número.</p>";
        } else {
            for ($i=$start; $i <= $limit; $i+=7) { 
                echo "<p>$i</p>";
            }
        }
        ?>
    </body>
</html>