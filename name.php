<?php
$name = ["amala","anju","akash","hudha"];
$t = $name;
echo "Displaying using print_r <br>";
print_r($name);
echo "<br><br>";
echo "sorting using asort() <br>";
asort($name);
print_r($name);
echo "<br><br>";
echo "sorting using arsort()<br>";
arsort($t);
print_r($t);
?>
