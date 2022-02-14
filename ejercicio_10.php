<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <h3>Ejercicio 10</h3>
        <p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo.</p>

        <?php
            if (isset($_REQUEST["reiniciar"])) {
                $count=0;
                $res=0;
                $nums="";
            }

            $res=$_REQUEST["res"];
            $count=$_REQUEST["count"];

            if (isset($_REQUEST["num"]) && $_REQUEST["num"] >= 0) {
                $res=intval(isset($_REQUEST["res"])?$_REQUEST["res"]+intval(isset($_REQUEST["num"])?$_REQUEST["num"]:0):0);
                $count=intval(isset($_REQUEST["count"])?$_REQUEST["count"]+1:0);
                $nums=$_REQUEST["nums"].strval($_REQUEST["num"]).", ";
            }

            if (isset($_REQUEST["num"]) && $_REQUEST["num"] < 0) {
        ?>
            <form action="ejercicio_10.php" method="post">
                <input type="submit" value="Reiniciar">
            </form>

        <?php
                $media=$res/$count;
                echo "<p>A media é de $media</p>";
            } else {
        ?>
                <form action="ejercicio_10.php" method="post">
                    <p><input type="text" name="num"></p>
                    <p><input type="hidden" name="res" value="<?php echo $res?>"></p>
                    <p><input type="hidden" name="count" value="<?php echo $count?>"></p>
                    <p><input type="hidden" name="nums" value="<?php echo $nums?>"></p>
                    <p><input type="submit" value="Enviar"></p>
                </form>
        <?php
                echo "<p>Suma: $res</p>";
                echo "<p>Números introducidos: $count</p>";
                echo "<p>Tipo: ".gettype(intval($_REQUEST["num"]))." ".$_REQUEST["num"]."</p>";
                echo "<p>Números: ".gettype($nums).":".$nums."</p>";
            }
        ?>

    </body>
</html>