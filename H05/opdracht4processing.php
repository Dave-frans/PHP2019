<?php


if ($_POST['email'] == "" and ['password'] == "") {
    echo "Sorry, geen toegang!";
} else {
    if ($_POST['email'] == "piet@worldonline.nl" and ['email'] == "doetje123") {
        echo "welkom";

    }
    if ($_POST['email'] == "klaas@carpets.nl" and ['email'] == "snoepje777") {
        echo "welkom";
    }
}
if ($_POST['email'] == "truushendriks@wegweg.nl" and ['email'] == "arkiearkie201") {
    echo "welkom";
}


if ($_POST['wachtwoord'] == "doetje123") {
        echo "welkom";

    }
    if ($_POST['wachtwoord'] == "snoepje777") {
        echo "welkom";

}
if ($_POST['wachtwoord'] == "arkiearkie201") {
    echo "welkom";
}