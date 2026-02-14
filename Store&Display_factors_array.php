<?php

echo"Store and Display First 10 Factors of 4200 using Array<br>";

$number = 4200;
$factors = [];

for ($i=1; count($factors)<=10; $i++)
{
if ($number % $i == 0)
{
$factors [] = $i;
}
}

print_r($factors);

echo"<br>This program is written and executed by Mannan Tayal 0231bca047<br>";
?>