<html>
    <head>
<title>Hello world example</title>
    </head>
    <body>
    <?php

$message = "Hello World";
echo $message;
echo "<br>";

$name = "Henk";
Echo "Hallo: $name";
echo "<br>";

$light = true;
$days = array();
$days[0] = "Zondag";
$days[1] = "Maandag";
$days[2] = "Dinsdag";
$days[3] = "Woensdag";
$days[4] = "Donderdag";
$days[5] = "Vrijdag";
$days[6] = "Zaterdag";

echo "<br>Vandaag is het de" . date("z") . "e dag van het jaar";
echo"<br>";

$today =  date ("j F Y");
echo $today;

    date_default_timezone_set("Europe/Amsterdam");
    $today = date("j F Y");
    echo "Vandaag is het: $today";

    echo "<br>";

    $time = date ("H:i");
    echo "Het is nu: $time uur";

    echo "<br>";

    $month = date("F");
    $daysInMonth = date("t");
    echo "Deze maand, $month heeft $daysInMonth dagen";

    echo "<br>";
    $week = date ("W");
    echo "Deze week is het week $week";
    ?>
    </body>
</html>