<?php
//Infinity number
$x = 1.9e308;
var_dump($x);
?>

<?php
echo "<br><br>";

$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>

<?php
echo "<br><br>";

//Turn String or Double into Int.
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>