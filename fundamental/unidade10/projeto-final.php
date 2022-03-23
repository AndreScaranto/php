<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <pre>
            <?php                    
                $_megasena = array();
                $_contador = 1;

                while ($_contador < 7) {
                    $_sorteio = rand(1,60);
                    if (!in_array($_sorteio,$_megasena)) {
                        $_megasena[] = $_sorteio;
                        $_contador++;
                    }
                }
                sort($_megasena);
                print_r($_megasena);
            ?>
        </pre>
    </body>
</html>