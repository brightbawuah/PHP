<?php
session_start();

$gebruikers = array(
    "bright7!" => array("wachtwoord" => "bright", "rol" => "administrator"),
    "klaas@carpets.nl" => array("wachtwoord" => "snoepje777", "rol" => "gebruiker"),
    "piet@worldonline.nl" => array("wachtwoord" => "doetje123", "rol" => "gebruiker"),
    "truushendriks@wegweg.nl" => array("wachtwoord" => "arkiearkie12", "rol" => "administrator")
);

print_r($_SESSION);
if (isset($_POST['knop'])
    && isset($gebruikers[$_POST["email"]])
    && $gebruikers[$_POST["email"]] ["wachtwoord"] == $_POST['wachtwoord']) {
    $_SESSION["gebruiker"] = array("naam" => $_POST["email"],
        "wachtwoord" => $gebruikers[$_POST["email"]]["wachtwoord"],
        "rol" => $gebruikers[$_POST["email"]]["rol"]);

    $message = "<h2>Welkom " . $_SESSION["gebruiker"]["naam"]." op de website met de rol "
        .$_SESSION["gebruiker"]["rol"]."</h2>";
    echo $message;
    echo "<p></p><a href=\"Admin.php\">Beveiligde pagina</a></p>";
    echo "<p><a href=\"Login.html\">uitloggen</a></p>";
} else {
    echo "<h1>Email en/of wachtwoord klopt niet !</h1>";
    echo "<h3><a href='Login.html'>Inloggen</a></h3>";
}
