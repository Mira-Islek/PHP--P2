<html>
<?php
// Opdracht 1
// session_start();

// if(isset($_SESSION['page_views']))
// {
//    $_SESSION['page_views']++;
// } Else {
//    $_SESSION['page_views'] = 1;
// }

// echo "Aantal keer bekeken: " . $_SESSION['page_views'];

//opdracht 2
session_start();
 
if(isset($_COOKIE['bezoekjes'])) {
    $bezoekjes = ++$_COOKIE['bezoekjes'];
} else {
    $bezoekjes = 1;
}
 
setcookie('bezoekjes', $bezoekjes, time() + 3600 * 24 * 7 * 4 * 12);
 
echo "Dit jaar heb je deze pagina al: " . $bezoekjes . " keer bekeken";
// if(isset($_COOKIE['page_views']))
// {
//    $_COOKIE['page_views']++;
// } Else {
//    $_COOKIE['page_views'] = 1;
// }

// echo "Aantal keer bekeken: " . $_COOKIE['page_views'];

// setcookie('page_views', time () + 600
// );
// echo 'Totaal aantal keer bekeken: ' . $_COOKIE['page_views'];
// setcookies("bezoekjes", $bezoekjes, time () + 600);
?>
</html>
<!-- echo'Deze pagina heeft u al'.
$_SERVER["PHP_SELF"] . '<br>'; -->
<!-- $_session['clnr']= $clientNr
if(isset($_session['clnr']))
unset ()
Session_destroy()
$_COOKIE -->