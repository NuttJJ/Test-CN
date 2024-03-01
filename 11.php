<?php

$input = array(1, 2, 9, 4, 5, 8, 7, 6, 3, 10);
$length = count($input);

for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($input[$j] > $input[$j + 1]) {
            $temp = $input[$j];
            $input[$j] = $input[$j + 1];
            $input[$j + 1] = $temp;
        }
    }
}

foreach ($input as $number) {
    echo $number . " ";
}

?>