<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body class="container">
<h1>Selecteer welke dieren je wilt zien...</h1>
<form action="opdracht3processing.php" method="get">
    <div class="form-group">
        <select multiple class="form-control" name="animalnames[]" id="animalname">
            <option value="dog">Hond</option>
            <option value="cat">Kat</option>
            <option value="fish">Vis</option>
            <option value="horse">Paard</option>
            <option value="monkey">Aap</option>
            <option value="pig">Varken</option>
        </select>
    </div>
    <input type="submit" name="knop">
</form>

</body>
</html>