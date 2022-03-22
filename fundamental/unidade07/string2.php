<?php 
    $_nome = "Curso PHP Fundamental";
    $_ocorrencia = "P";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <p>
            <?php 
                echo "String base: ".$_nome;
                echo "<br>";
                // strlen - Retorna primeira ocorrencia
                echo "Comprimento total da string: ";
                echo strlen($_nome);
                echo "<br>";
                // stripos  - Retorna primeira ocorrência
                echo "Posição da primeira ocorrência de '" . $_ocorrencia . "': ";
                echo stripos($_nome,$_ocorrencia);
                echo "<br>";
                // strripos - Retorna última ocorrência
                echo "Posição da última ocorrência de '" . $_ocorrencia . "': ";
                echo strripos($_nome,$_ocorrencia);
                echo "<br>";
                // strtolower - converte para letras min.
                echo 'String em minúsculas: ';
                echo strtolower($_nome);
                echo "<br>";
                // strtoupper - converte para letras min.
                echo 'String em maiúsculas: ';
                echo strtoupper($_nome);
                echo "<br>";
                // SUBSTR_COUNT - Conta quantas ocorreram
                // de um texto ou string
                // Faz diferença Maiusculas e minusculas
                echo "Contagem de substrings '". $_ocorrencia . "' dentro da string base";  
                echo substr_count($_nome,"P");
            ?>
        </p>

    </body>
</html>