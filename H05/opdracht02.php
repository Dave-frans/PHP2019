<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="opdracht2processing.php" method="post">
    <div class="form-group">
        <label for="naam">Naam:</label>
        <input class="form-control" id="naam" type="text" name="naam">
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" type="email" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="password">Wachtwoord:</label>
        <input class="form-control" type="password" id="password" name="password">
    </div>
    <button class="btn btn-primary" type="submit">GO!</button>
</form>
<?php

?>
</body>
</html>