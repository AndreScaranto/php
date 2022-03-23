<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "Existe o elemento? "; 
            if(in_array("Laranja",$_salada)) {echo "Sim!";} else {echo "Não...";} 
            echo "</br>";
            echo "Existe o elemento? "; 
            if(in_array("Abacaxi",$_salada)) {echo "Sim!";} else {echo "Não...";} 
            echo "</br>";
            echo "Existe o elemento? "; 
            if(in_array("laranja",$_salada)) {echo "Sim!";} else {echo "Não...";} 
            echo "</br>";
            echo "Qual a posição de 'Uva'? " . array_search("Uva",$_salada) . "</br>";
            echo "Qual a posição de 'Limão'? " . array_search("Limão",$_salada);
        ?>
    </body>
</html>