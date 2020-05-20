<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H03 - Opdracht 2</title>
    <style>
        img {
            display: block;
        }
    </style>
</head>
<body>

<?php

$aapImages = array(
    'aap1.jpg',
    'aap2.jpg',
    'aap3.jpg',
    'aap4.jpg',
    'aap5.jpg',
    'aap6.jpg',
    'aap7.jpg',
    'aap8.jpg',
    'aap9.jpg',
    'aap10.jpg'
);

$teller = 1;
foreach ($aapImages as $image) {
    echo '<img src="apen/' . $image . '" alt="Aap ' . $teller . '">';
    $teller++;
}

?>



</body>
</html>