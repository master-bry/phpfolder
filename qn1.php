<?php
$numbers = array(11, 12, 13, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . "\n";
    }
}
?>