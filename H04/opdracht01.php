<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht01</title>
</head>
<body>
<?php
for ($i = -10 ; $i <= 40 ; $i++){
    calculateFahrenheitFromCelsius($i);
}

function calculateFahrenheitFromCelsius ($celsius) {
    $fahrenheit = $celsius * 1.8 + 32;
    echo "{$celsius} degrees Celsius amounts to {$fahrenheit} degrees Fahrenheit.<br>\n";
}


?>
</body>
</html>