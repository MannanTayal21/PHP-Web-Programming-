<?php

echo"Store and Display the result of top 5 students using associative array.<br>";

$result = array("Mannan"=>99,
		"Irfan"=>97,
		"Anjali"=>95,
		"Vaibhav"=>93,
		"Ram"=>91);

echo"<br>Result of Top 5 Students are as follow:-" . "<br>";

foreach ($result as $name=>$score)
{
echo $name . ":" . $score . "<br>";
}

echo"<br>This program is written and executed by Mannan Tayal 0231bca047<br>";

?>