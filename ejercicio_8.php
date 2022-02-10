<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <h3>Ejercicio 8</h3>
        <p>Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (&lt;table> en HTML).</p>
        <form action="ejercicio_8.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        
            <?php
                $num=isset($_REQUEST["num"])?$_REQUEST["num"]:"";
                if ($num != "") {
                    echo "<table style='border: 2px solid black'>";
                    echo "<tr style='border: 2px solid black; font-weight: bold'>";
                    echo "<td style='border: 2px solid black; padding: 4px'>Número</td>";
                    echo "<td style='border: 2px solid black; padding: 4px'>Repetición</td>";
                    echo "<td style='border: 2px solid black; padding: 4px'>Resultado</td>";
                    echo "</tr>";
                    for ($i=0; $i <= 10; $i++) {
                        $res= $num * $i;
                        echo "<tr style='border: 2px solid black'>";
                        echo "<td style='border: 2px solid black; padding: 3px'>$num</td>";
                        echo "<td style='border: 2px solid black; padding: 3px'>$i</td>";
                        echo "<td style='border: 2px solid black; padding: 3px'>$res</td>";
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