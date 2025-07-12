<?php

$arr = array(5,6,8,6,9);

$sum = array_sum($arr);
$avg = $sum / count($arr);

print_r(PHP_EOL);
print_r("Average: " . $avg);
print_r(PHP_EOL);
