<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
define("FARE", 10);
define("SENIOR_AGE", 65);
define("SENIOR_DISCOUNT", 50);
define("JUNIOR_AGE", 12);
define("JUNIOR_DISCOUNT", 50);
define("KIDS_AGE", 3);
define("KIDS_DISCOUNT", 100);

$age = 10;

if ($age >= SENIOR_AGE) {
    $price = FARE * ((100 - SENIOR_DISCOUNT) / 100);
} else if ($age < KIDS_AGE) {
    $price = FARE * ((100 - KIDS_DISCOUNT) / 100);
} else if ($age <= JUNIOR_AGE) {
    $price = FARE * ((100 - JUNIOR_DISCOUNT) / 100);
} else {
    $price = FARE;
}

echo 'Iemand van ' . $age . ' betaald  ' . $price . ' euro ';


?>

</body>
</html>