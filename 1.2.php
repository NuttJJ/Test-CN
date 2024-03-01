<?php
function Pairs($array, $target) {
    $pairs = [];
    $length = count($array);
    

    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            
            if ($array[$i] + $array[$j] == $target) {
                $pairs[] = [$array[$i], $array[$j]];
            }
        }
    }
    
    return $pairs;
}

$array = [1, 2, 3, 4, 5];

$target = 4;

$result = Pairs($array, $target);   // หาคู่ตัวเลขที่บวกกันแล้วได้ $target

// แสดงผลลัพธ์
foreach ($result as $pair) {
    echo $pair[0] . " + " . $pair[1] . " = $target\n";
    echo ("<br>");
}

?>
