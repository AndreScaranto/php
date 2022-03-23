<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_dia = "domingo";
            switch ($_dia) {
                case "segunda":
                    echo "Eita nois! Vamo que vamo que a semana é longa.</br>";
                    break;
                case "terça":
                    echo "Falta um tanto ainda, mas a segunda já passou!</br>";
                    break;
                case "quarta":
                    echo "Chegamo no meio! Força agora!</br>";
                    break;
                case "quinta":
                    echo "Almost friday! Já pode beber?</br>";
                    break;
                case "sexta":
                    echo "Sextou bebê! Bora beber!</br>";
                    break;
                case "sábado":
                    echo "E essa ressaca? Tem que beber para melhorar!</br>";
                    break;
                default:
                    echo "Deve ser domingo... Onde que eu tô?</br>";
                    break;
            }
        ?>
    </body>
</html>