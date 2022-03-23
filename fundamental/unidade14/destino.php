<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 


        <?php
            if(isset($_POST["nome"]) && isset($_POST["email"])) {
                echo "Nome: " . $_POST["nome"] . "</br>";
                echo "Email: " . $_POST["email"] . "</br>";
            } else {
                echo 'Não foram enviados nome e/ou email.</br><a href="formulario.php">Retornar para o formulario</a>';
            }

        ?>

    </body>
</html>