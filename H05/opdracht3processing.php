<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>

<?php


foreach ($_GET['animalnames'] as $animalname) {
    echo '<img src="images/' . $animalname . '.jpg" alt="'. $animalname .'">' . "<br>\n";
    echo "{$animalname}.jpg<br>\n";
}

?>


</body>
</html>
