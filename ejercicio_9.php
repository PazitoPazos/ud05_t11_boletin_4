<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <h3>Ejercicio 9</h3>
        <p>Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.</p>

        <form action="ejercicio_9.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        <?php
            if (isset($_REQUEST["num"])) {
                echo "<p>El número ".$_REQUEST["num"]." tiene ".strlen(intval($_REQUEST["num"]))." dígitos</p>";
            }
        ?>

    </body>
</html>