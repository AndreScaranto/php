<?php
    $_fumante = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "É fumante?</br>";
            if ($_fumante) {
                echo "Sim";
            } else {
                echo "Não";
            }
            echo "</br>";
            echo "Imprime a variável: ". $_fumante;
        ?>

    </body>
</html>