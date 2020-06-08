<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$originalString = "Daviangelo Frans";


echo "Orignal string: {$originalString}<br>\n";
echo "Reversed string: " . reverseString($originalString) . "<br>\n";



function reverseString($originalString) {
    $stringLength = strlen($originalString);
    $reversedString = "";
    for ($i = $stringLength - 1 ; $i >= 0 ; $i--){
        $letter = substr($originalString, $i, 1);
        $reversedString .= $letter;

    }
    return $reversedString;
}


?>
</body>
</html>