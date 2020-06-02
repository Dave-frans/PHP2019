<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
$kappersagenda = [
    "9:15" => "Mevr. Pietersen",
    "9:30" => "Mevr. Willemsen",
    "9:45" => "",
    "10:00" => "Paul van den Broek",
    "10:15" => "Karel de Meeuw",
    "10:30" => ""
];

echo "Deze tijden zijn nog beschikbaar:";

echo "<ul>";

foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}

?>

<table style="">
    <tr>
        <th style="background-color:lightgray"> INDEX</th>
        <th style="background-color:lightgray">WAARDE</th>

    </tr>
    <tr>
        <td>9.15</td>
        <td>Mevr.Pietersen</td>
    </tr>
    <tr>
        <td>9.30</td>
        <td style="width:50%">Mevr.Willems</td>
    </tr>
    <tr>
        <td>9.45</td>
        <td></td>
    </tr>
    <tr>
        <td>10.00</td>
        <td>Paul van den Broek</td>
    </tr>
    <tr>
        <td>10.15</td>
        <td>Karel de Meeuw</td>
    </tr>
    <tr>
        <td>10.30</td>
        <td></td>
    </tr>
</table>


</body>
</html>
