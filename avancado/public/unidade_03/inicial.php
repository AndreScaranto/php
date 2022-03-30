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

    // passo 3
    $_consulta_produtos = "SELECT nomeproduto, precounitario, tempoentrega ";
    $_consulta_produtos .= " FROM produtos";

    $_produtos = mysqli_query($_conecta,$_consulta_produtos);
    if (!$_produtos) {
        die("Falha na consulta ao banco de dados");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>
        <?php
            while ($_registro = mysqli_fetch_row($_produtos)) {
                print_r($_registro);
                echo "</br>";
            }
            echo "</br>";

            $_produtos = mysqli_query($_conecta,$_consulta_produtos);

            if (!$_produtos) {
                die("Falha na consulta ao banco de dados");
            }

            while ($_registro = mysqli_fetch_assoc($_produtos)) {
                print_r($_registro);
                echo "</br>";
            }
            echo "</br>";

            $_produtos = mysqli_query($_conecta,$_consulta_produtos);

            if (!$_produtos) {
                die("Falha na consulta ao banco de dados");
            }
            
            while ($_registro = mysqli_fetch_array($_produtos)) {
                print_r($_registro);
                echo "</br>";
            }
        ?>
    </body>
</html>

<?php
    // passo final
    mysqli_close($_conecta);
?>