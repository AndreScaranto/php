<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Brazil/East');
            $_agora = getdate();
            echo "Hoje é dia " . $_agora["mday"] . "/" . $_agora["mon"] . "/" . $_agora["year"] . ".</br>";
            echo "Agora são " . $_agora["hours"] . ":" . $_agora["minutes"] . ":" . $_agora["seconds"] . ".</br>";
        ?>
    </body>
</html>