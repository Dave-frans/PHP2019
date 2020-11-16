<?php

$host = 'localhost';
$user = 'root';
$pass = '';

$gebruikersnaam = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

$dbh = new PDO('mysql:host=localhost; dbname=phpschool;', $user, $pass);

$inloggen = $dbh->query("select * from gegevens where $gebruikersnaam ='email' and $wachtwoord = 'password'")
or die("Error while searching");

if ($inloggen->fetch()) {
    echo "Welkom!";
} else {
    echo "Sorry geen toegang!";
}
