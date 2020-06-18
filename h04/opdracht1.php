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
echo "graden in fahrenheit: ".fahrenheit(20). "<br>";

function fahrenheit($a){
    return $a * 1.8 + 32;
}
?>
</body>
</html>