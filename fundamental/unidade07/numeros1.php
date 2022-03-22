<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "Salario: " . $salario . "</br>";
            echo "Meses: ". $meses . "</br>";
            // Multiplicacao e Divisao
            echo "Ganho nos meses: " . $salario*$meses . "</br>";
            echo "Ganho quinzenal: " . $salario / 2 . "</br>";
            // Exponencial
            echo "Exponencia: " . pow(6,3) . "</br>";

            // Raiz Quadrada
            echo "Raiz Quadrada: " . sqrt(36) . "</br>";
            // Randômico Generica
            echo "Randomico: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo: " . rand(1,5) . "</br>";
            
            // Valor absoluto
            echo "Valor Absoluto: " . abs(-10.0) . "</br>";
        ?>
    </body>
</html>