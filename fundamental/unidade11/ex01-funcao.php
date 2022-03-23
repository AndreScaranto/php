<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retornarDiaria() {
            return round(1900/30,2);
        }

        echo "R$ " . str_replace(".",",",strval(retornarDiaria()));
    ?>
</body>
</html>