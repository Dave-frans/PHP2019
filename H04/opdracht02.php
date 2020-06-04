<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht02</title>
</head>
<body>
<?php
for ($i = -10 ; $i <= 30; $i++){
    $wellesnietes = checkifDivisibleBy3($i) ? " " : " NIET ";
    echo "{$i} is{$wellesnietes}deelbaar door 3.<br>\n";

}

function checkifDivisibleBy3($number){
    return $number % 3 === 0;
}


?>
</body>
</html>