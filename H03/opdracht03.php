<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H03 Opdracht 03</title>
    <style>
        div#kerstboom {
            text-align: center;
        }
    </style>
</head>
<body>

<div id="kerstboom">

    <?php

    for ($i = 1 ; $i <= 9 ; $i++) {
        // we printen exact het aantal sterretjes dat we kunnen vinden in $i (de index variabele)
        echo '<div class="row">';
        for ($j = 0 ; $j < $i ; $j++) {
            echo '*';
        }
        echo "</div>\n";
    }

    ?>

</div>

</body>
</html>