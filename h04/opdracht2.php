<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>functies</title>
    <style>

    </style>
</head>
<body>
<?php
if (delen(6)){
    echo "dit getal is deelbaar door 3"."<br><br>";
} else {
    echo "dit getal is niet deelbaar door 3". "<br><br>";
}

function delen($a){
    if ($a % 3 == 0){
        return true;
    } else {
        return false;
    }
}

?>
<a href="Opdrachten.php">Opdrachten Pagina</a><br>
<a href="">Home</a>
</body>
</html>