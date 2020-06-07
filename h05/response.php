<?php

//print_r($_GET);

if ($_POST['voornaam'] == ""){
    echo "Je moet nog een naam invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};
 if ($_POST['adres'] == "") {
    echo "Je moet nog een adres invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};
if ($_POST['email'] == "") {
    echo "Je moet nog een email invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};
if ($_POST['wachtwoord'] == "") {
    echo "Je moet nog een wachtwoord invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};