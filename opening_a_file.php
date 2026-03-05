<?php

$file = fopen("welcome.txt","r");
echo fread($file, filesize("welcome.txt"));

echo("<br>This program is written and executed by Mannan Tayal 0231bca047<br>");

fclose($file);

?>