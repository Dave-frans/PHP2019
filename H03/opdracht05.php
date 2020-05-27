<!DOCTYPE html>
<html lang="en">
<style>
    body {
        text-align: center;
        width: 900px;
    }
    img {
        width: 150px;
    }
    img.green-border {
        border: solid 2px green;
    }
    img.red-border {
        border: solid 2px red;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
for ($i = 1 ; $i <= 9 ; $i++) {
    if ($i % 2 == 0) {
        echo '<img class="red-border" src="apen/aap' . $i . '.jpg" alt="Aap ' . $i . '">';

    } else {
        echo '<img class="green-border" src="apen/aap' . $i . '.jpg" alt="Aap ' . $i . '">';
    }
}
?>

</body>
</html>
