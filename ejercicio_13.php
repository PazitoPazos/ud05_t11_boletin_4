<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <h3>Ejercicio 13</h3>
        <p>Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos.</p>

        <?php
            session_start();
            $_SESSION['pos'];
            $_SESSION['neg'];
            if (isset($_REQUEST["reiniciar"])) {
                $_REQUEST["intentos"] = 0;
                $intentos = 0;
                $_REQUEST["num"];
                $num;
                $_SESSION['pos'] = 0;
                $_SESSION['neg'] = 0;
            }

            $intentos = isset($_REQUEST["intentos"])?$_REQUEST["intentos"]+1:0;
            $limit = 11;

            if ($intentos < $limit) {
        ?>

        <form action="ejercicio_13.php" method="post">
            <input type="text" name="num">
            <input type="hidden" name="intentos" value="<?php echo $intentos;?>">
            <input type="submit" value="Enviar">
        </form>

        <?php
            $num=is_numeric($_REQUEST["num"])?intval($_REQUEST["num"]):"a";            
            if (is_numeric($num)) {
                if ($num >= 0) {
                    echo "pos";
                    $_SESSION['pos'] += 1;
                } else {
                    echo "neg";
                    $_SESSION['neg'] += 1;
                }
            }
            // echo "<p>Hay ".$_SESSION['pos']." números positivos</p>";
            // echo "<p>Hay ".$_SESSION['neg']." números negativos</p>";
            } elseif ($intentos >= $limit) {
        ?>
        
        <form action="ejercicio_13.php" method="post">
            <input type="submit" name="reiniciar" value="Reinicio">
        </form>

        <?php
            echo "<p>Hay ".$_SESSION['pos']." números positivos</p>";
            echo "<p>Hay ".$_SESSION['neg']." números negativos</p>";
        }
        ?>
    </body>
</html>