<?php
    $_megasena = array(47,29,42,04,27,21);


?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php 
                print_r($_megasena);
                sort($_megasena);
                print_r($_megasena);
                echo "Valor mínimo: " . min($_megasena) . "</br>";
                echo "Valor máximo: " . max($_megasena) . "</br>";
            ?>
        </pre>
    </body>
</html>