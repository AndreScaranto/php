<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function converterCelsiusParaFahrenheit($_tempCelsius) {
            return ( $_tempCelsius * 1.8) + 32;
        }

        echo converterCelsiusParaFahrenheit(0)."</br>";
        echo converterCelsiusParaFahrenheit(10)."</br>";
        echo converterCelsiusParaFahrenheit(20)."</br>";
        echo converterCelsiusParaFahrenheit(30)."</br>";
        echo converterCelsiusParaFahrenheit(40)."</br>";
        echo converterCelsiusParaFahrenheit(100)."</br>";
    ?>
</body>
</html>