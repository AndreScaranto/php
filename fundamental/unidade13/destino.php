<?php
    $_salada = array("laranja","maca","abacate");
    $_codigo = $_GET["codigo"];
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <img src="imagens/<?php echo $_salada[$_codigo]?>.jpg">';
    </body>
</html>