<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <h3>Ejercicio 7</h3>
        <p>Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.</p>

        <?php
            if (isset($_REQUEST["reiniciar"])) {
                $_REQUEST["intentos"]=0;
                $intentos=0;
            }

            $combi=1234;
            $intentos = intval(isset($_REQUEST["intentos"])?$_REQUEST["intentos"]+1:0);

            if ($intentos < 4) {
          ?>

            <form action="ejercicio_7.php" method="post">
                <input type="text" name="combi">
                <input type="text" name="intentos" value="<?php echo $intentos;?>">
                <input type="submit" value="Enviar">
            </form>

          <?php
            }elseif ($combi == $_REQUEST["combi"]) {
                echo "<p>Acertaches a combinación.</p>";
            } else {
            ?>
            
            <form action="ejercicio_7.php" method="post">
                <input type="submit" name="reiniciar" value="Reinicio">
            </form>
                <p>Xa se che acabaron os intentos.</p>

          <?php
            }
            echo "<p>$intentos intentos</p>";
            ?>

    </body>
</html>