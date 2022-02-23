<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 19</title>
    </head>
    <body>
        <h3>Ejercicio 19</h3>
        <p>Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario.</p>

        <form action="ejercicio_19.php" method="post">
            <p><input type="text" name="num"></p>
            <p><select name="fill">
                <option selected value="asterisco.png">&#10036;&nbsp;Asterisco</option>
                <option value="diamante.png">&#128142;&nbsp;Diamante</option>
                <option value="dinero.png">&#128181;&nbsp;Dinero</option>
                <option value="trueno.png">&#9889;&nbsp;Trueno</option>
                <option value="escudo.png">&#128304;&nbsp;Escudo</option>
            </select></p>
            <p><input type="submit" value="Calcular"></p>
        </form>
        <?php
        $h=isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?intval($_REQUEST["num"]):"a";
        $fill=$_REQUEST["fill"];
            for ($i=0; $i < $h; $i++) { 
                for ($j=0; $j <= $i; $j++) { 
                    echo "<img src=imgs/".$fill." height='24'>";
                }
                echo "<br />";
            }
        ?>
    </body>
</html>