<?php

//echo "<apen src='apen/".$_POST['apen'].".jpg'>";
print_r($_POST['apen']);

foreach ($_POST['apen'] as $aap) {
    echo "<img src='apen/".$aap.".jpg'>";
}