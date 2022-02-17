<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <h3>Ejercicio 11</h3>
        <p>Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números enteros a partir de uno que se introduce por teclado.</p>

        <form action="ejercicio_11.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        <?php
            $num=isset($_REQUEST["num"])?intval($_REQUEST["num"]):"";
            $limit=$num+5;
            if ($num != "" && is_numeric($num)) {
                echo "<table style='border: 2px solid black'>";
                echo "<tr style='border: 2px solid black; font-weight: bold'>";
                echo "<td style='border: 2px solid black; padding: 4px'>Número</td>";
                echo "<td style='border: 2px solid black; padding: 4px'>Cuadrado</td>";
                echo "<td style='border: 2px solid black; padding: 4px'>Cubo</td>";
                echo "</tr>";
                for ($i=$num; $i < $limit; $i++) {
                    $sq=pow($i,2);
                    $cb=pow($i,3);
                    echo "<tr style='border: 2px solid black'>";
                    echo "<td style='border: 2px solid black; padding: 3px'>$i</td>";
                    echo "<td style='border: 2px solid black; padding: 3px'>$sq</td>";
                    echo "<td style='border: 2px solid black; padding: 3px'>$cb</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            // echo "<tr style='border: 2px solid black'>";
            // echo "<td style='border: 2px solid black'>A</td>";
            // echo "<td style='border: 2px solid black'>A</td>";
            // echo "</td>";
        ?>

    </body>
</html>