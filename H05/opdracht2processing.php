<?php


$naam = validateData('naam');
$email = validateData('email');
$password = validateData('password');

if (empty($naam) || empty($email) || empty($password)) {
    exit("Het script is gestopt.");
}

echo "<br>Je hebt de volgende gegevens ingevuld:<br>\n";
echo "Naam: {$naam}<br>\n";
echo "Email: {$email}<br>\n";
echo "Password: {$password}<br>\n";


function validateData($index) {
    if (isset($_POST[$index]) && !empty($_POST[$index])) {
        return $_POST[$index];
    } else {
        echo "Let op: je hebt geen {$index} ingevuld!<br>\n";
    }


}

$naam = $_POST['naam'];
$email = $_POST['email'];
$password = $_POST['password'];
