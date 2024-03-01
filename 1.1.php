<?php
function Pairs($array, $target) {
    $pairs = [];
    $length = count($array);
    
    // เริ่มต้นจับคู่ตัวเลขในอาร์เรย์
    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            // หาคู่ที่บวกกันแล้วได้ค่าเท่ากับ $target
            if ($array[$i] + $array[$j] == $target) {
                $pairs[] = [$array[$i], $array[$j]];
            }
        }
    }
    
    return $pairs;
}

// อาร์เรย์
$array = [1, 2, 3, 4, 5];

// ผลลัพธ์ที่ต้องการ
$target = 5;

// หาคู่ตัวเลขที่บวกกันแล้วได้ $target
$result = Pairs($array, $target);

// แสดงผลลัพธ์
foreach ($result as $pair) {
    echo $pair[0] . " + " . $pair[1] . " = $target\n";
    echo ("<br>");
}

?>
