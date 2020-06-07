<?php

function Combinatie($name, $password){
    $email = array('piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl');
    $wachtwoord = array('doetje123', 'snoepje777', 'arkiearkie201');
    $combinatie;

    if((($name == $email[0]) && ($password == $wachtwoord[0]))
        || (($name == $email[1]) && ($password == $wachtwoord[1]))
        || (($name == $email[2]) && ($password == $wachtwoord[2]))){
        echo "Welkom!";
        $combinatie = true;
    } else {
        echo "Sorry, geen toegang!";
        $combinatie = false;
    }
    return $combinatie;
}

echo "<br>" . Combinatie($_POST['email'], $_POST['wachtwoord']);