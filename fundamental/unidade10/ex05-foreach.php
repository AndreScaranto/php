<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_salada = array("laranja","uva","abacate");
        echo "Usando o for:</br>";
        for ($_i = 0; $_i < count($_salada); $_i++) {
            echo $_salada[$_i] . "</br>";
        }
        echo "Usando o foreach:</br>";
        foreach ($_salada as $_fruta) {
            echo $_fruta . "</br>";
        }
    ?>
</body>
</html>