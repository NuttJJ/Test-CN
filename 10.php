<?php

$height = 5;

for ($i = 1; $i <= $height; $i++) 
{
    for ($j = 1; $j <= $height - $i; $j++) {
        echo " ";
    }
    for ($j = 1; $j <= $i * 2 - 1; $j++) {
        echo "*";
    }
    echo "\n";
}

?>
