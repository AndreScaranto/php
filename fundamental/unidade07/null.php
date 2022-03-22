<?php
    $_nome = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "nome = " . $_nome . "</br>";
            echo "A variável é nula?</br>" . is_null($_nome);
        ?>

    </body>
</html>