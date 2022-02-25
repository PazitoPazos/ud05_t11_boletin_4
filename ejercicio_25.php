<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 25</title>
    </head>
    <body>
        <h3>Ejercicio 25</h3>
        <p>Realiza un programa que pida un número por teclado y que luego muestre ese número al revés.</p>

        <form action="ejercicio_25.php" method="post">
            <p><input type="text" name="num"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $num = isset($_REQUEST["num"])&&is_numeric($_REQUEST["num"])?$_REQUEST["num"]:"a";
        $d = str_split($num);
        $num_rev = array();
        for ($i=0; $i <= count($d); $i++) {
            $item = $d[count($d)-$i];
            array_push($num_rev, $item);
        }
        for ($i=0; $i < count($num_rev); $i++) { 
            echo $num_rev[$i];
        }
        ?>
    </body>
</html>