<?php
session_start();

if(isset($_SESSION["gebruiker"]) && $_SESSION["gebruiker"]["rol"] == "administrator") {
    echo "<h1>Welkom ".$_SESSION["gebruiker"]["naam"]. " op de beveiligde pagina</h1>";
    echo "<p><a href=\"login.html\">uitloggen</a></p>";
} else {
    echo "<h1>U heeft niet voldoende rechten voor deze pagina.</h1>";
    echo "<p><a href=\"Login.html\">terug naar de login pagina</a></p>";
}

