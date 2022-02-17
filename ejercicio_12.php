<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 12</title>
    </head>
    <body>
        <h3>Ejercicio 12</h3>
        <p>Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... El número n se debe introducir por teclado.</p>

        <form action="ejercicio_12.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>

        <?php
        $num=isset($_REQUEST["num"])?intval($_REQUEST["num"]):"";
        if ($num != "" && is_numeric($num)) {
            $i=1;
            $set=array(0,1);
            $sum=0;
            echo "<p>".$set[0]."</p>";
            echo "<p>".$set[1]."</p>";
            while ($i <= $num) {
                $a=array_key_exists($i-1, $set)?$set[$i-1]:0;
                $b=array_key_exists($i, $set)?$set[$i]:0;
                $sum=$a+$b;
                echo "<p>$sum</p>";
                array_push($set, $sum);
                $i++;
            }
        }
        ?>
    </body>
</html>