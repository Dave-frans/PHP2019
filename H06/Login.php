<?php


if ($_POST['email'] == "" and ['password'] == "") {
    echo "Sorry, geen toegang!";
} else {
    if ($_POST['email'] == "test@test.nl" and ['password'] == "test") {
        echo "welkom";

    }
    if ($_POST['email'] == "klaas@carpets.nl" and ['email'] == "snoepje777") {
        echo "welkom";
    }

    if ($_POST['wachtwoord'] == "test") {
        echo "welkom";

    }
    if ($_POST['wachtwoord'] == "snoepje777") {
        echo "welkom";
    }

    if ($_POST['wachtwoord'] != "test" or ['wachtwoord'] != "snoepje777") {
        echo "naam en wachtwoord kloppen niet!<br>\n";
        echo "<a href=\"H06/opdracht01.php\">Terug naar inlogformulier </a>";
    }
    if ($_POST['email'] != "test@test.nl" or ['email'] != "klaas@carpets.nl") {
        echo "naam en wachtwoord kloppen niet!<br>\n";
        echo "<a href=\"H06/opdracht01.php\">Terug naar inlogformulier </a>";
    }


}
