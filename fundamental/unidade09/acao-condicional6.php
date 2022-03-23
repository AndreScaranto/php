<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_dia = "sexta";

            if ( $_dia == "sábado" || $_dia == "domingo") {
                echo "Pode descansar.";
            } else {
                echo "Bora trabalhar.";
            }
            echo "</br>";
            
            $_dia_do_mes = 13;
            if ($_dia == "sexta" && $_dia_do_mes == 13) {
                echo "Sexta-feira 13!! Buuuuuu!</br>";
            } else {
                echo "Não é sexta-feira 13</br>";
            }
        ?>
    </body>
</html>