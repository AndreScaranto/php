<?php
    $_salario = 1095;
    $_gasolina = 4.55;
    $_telefone = "3917-3776";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $_salario é um número?</br>";
            if (is_numeric($_salario)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            echo "O $_gasolina é um número?</br>";
            if (is_numeric($_gasolina)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            echo "O $_telefone é um número?</br>";
            if (is_numeric($_telefone)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";

            // testar se é inteiro
            echo "O $_salario é um inteiro?</br>";
            if (is_int($_salario)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            echo "O $_gasolina é um inteiro?</br>";
            if (is_int($_gasolina)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            echo "O $_telefone é um inteiro?</br>";
            if (is_int($_telefone)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";

            // testar se é float
            echo "O $_salario é um float?</br>";
            if (is_float($_salario)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            echo "O $_gasolina é um float?</br>";
            if (is_float($_gasolina)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            echo "O $_telefone é um float?</br>";
            if (is_float($_telefone)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            // teste se é string
            echo "O $_salario é uma string?</br>";
            if (is_string($_salario)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            echo "O $_gasolina é uma string?</br>";
            if (is_string($_gasolina)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
            echo "O $_telefone é uma string?</br>";
            if (is_string($_telefone)) {
                echo "sim!";
            } else {
                echo "não...";
            }
            echo "</br>";
        ?>
        
        
    </body>
</html>