<?php
session_start();

$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"

];

function check_credentials($mailadres, $wachtwoord) {

    global $users;

    foreach ($users as $key => $value){
        if ($key == $mailadres AND $value == $wachtwoord) {

            return true;
        }
    }
    return false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php opdracht</title>
</head>
<body>

<?php if (!isset($_POST['knop'])) { ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
    Naam: <input type="text" name="mailadres" placeholder="mailadres"><br>
    Wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord">
    <input type="submit" name="knop" value="VERSTUUR">
</form>

<?php
if (isset($_SESSION['error']) AND !empty($_SESSION['error'])) {
    echo '<div class="error">' . $_SESSION['error'] . "</div>";
    $_SESSION['error'] = null;
}
?>
<?php } ?>



</body>
</html>
