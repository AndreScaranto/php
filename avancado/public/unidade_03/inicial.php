<?php

    // passo 1
    $_servidor  = "localhost";
    $_usuario   = "root";
    $_senha     = "";
    $_banco     = "andes";
    $_conecta   = mysqli_connect($_servidor,$_usuario,$_senha,$_banco);

    // passo 2
    if (mysqli_connect_errno()) {
        die("Conexão falhou: " . mysqli_connect_errno());
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>

    </body>
</html>

<?php
    // passo final
    mysqli_close($_conecta);
?>