<?php
    $gasolina = 4.59;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            echo "Valor original: " . $gasolina . "</br>";
            // arredondar para media
            echo "Arredondado para o mais próximo: " .round($gasolina) . "</br>";

            // arredondar para cima
            echo "Arredondado para cima: " . ceil($gasolina) . "</br>";


            // arredondar para baixo
            echo "Arredondado para baixo: " . floor($gasolina) . "</br>";

            
        ?>
        
        
    </body>
</html>