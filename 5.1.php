<?php

function drawSquareTriangle($size)
{
    $currentNumber = 1;
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            if ($j <= $size - $i) {
                echo "&nbsp;&nbsp;"; // ใส่ช่องว่างสำหรับสร้างสามเหลี่ยมจัตุรัส
            } else {
                echo $currentNumber++ % 10;
            }
        }
        echo "<br/>";
    }
}

// ตัวอย่างการเรียกใช้งานฟังก์ชั่น
$triangleSize = 4; 
drawSquareTriangle($triangleSize);

?>
