<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 17</title>
    </head>
    <body>
        <h3>Ejercicio 17</h3>
        <p>Realiza un programa que sume los 100 números siguientes a un número entero y positivo introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número positivo).</p>

        <form action="ejercicio_17.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $num=isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?intval($_REQUEST["num"]):"a";
        $start=$num + 1;
        $limit=$num + 100;
        $res=0;
        if (!is_numeric($num) || $num < 0) {
            echo "<p>Introduce un número.</p>";
        } else {
            for ($i=$start; $i <= $limit; $i++) { 
                $res = $res + $i;
            }
            echo "El resultado de la suma es: $res";
        }
        ?>
    </body>
</html>