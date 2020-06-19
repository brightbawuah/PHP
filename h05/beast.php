<?php

//echo "<apen src='apen/".$_POST['apen'].".jpg'>";
print_r($_POST['apen']);
// foreach doorloopt codeblok voor elk element binnen de array
foreach ($_POST['apen'] as $aap) {
    echo "<img src='apen/".$aap.".jpg'>";
}