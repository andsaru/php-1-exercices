<?php

$test = 'echo mundo';
$testBoolean = true;
$testArray = [2,4,6, 'test'];
$testLogic = 1 > 2;

echo 'String: '.$test."<br>";
echo 'Boolean: '.$testBoolean."<br>";
echo 'Array: '.$testArray."<br>";

print_r('String: '.$test."<br>");
print_r('Boolean: '.$testBoolean."<br>");
print_r($testArray);