<?php

function drawTriangle($height)
{
    $length = 2 * $height - 1;                // คำนวณความยาวของฐานของสามเหลี่ยม
    for ($i = $height; $i >= 1; $i--) {
        $stars = 2 * $i - 1;                // คำนวณจำนวนเครื่องหมาย * ที่จะใช้ในแต่ละแถว
        $spaces = ($length - $stars) / 2;    // คำนวณจำนวนช่องว่างที่จะใช้ในแต่ละแถว
        echo str_repeat(" ", $spaces);        // ช่องว่างด้านซ้ายของแถว
        echo str_repeat("*", $stars);
        echo "<br>";
    }
}

$input_height = 5; 
drawTriangle($input_height);
