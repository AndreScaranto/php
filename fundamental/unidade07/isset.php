<?php
    $_nome = "Andre";
    $_telefone = "39467435";
    $_fumante = false;
    $_nula = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Nome: ". isset($_nome) . "</br>";
            echo "Telefone: " . isset($_telefone) . "</br>";
            echo "Fumante: " . isset($_fumante) . "</br>";
            echo "Nula: " . isset($_nula) . "</br>";
            echo "Picles: " . isset($_picles) . "</br>";
        ?>
    </body>
</html>