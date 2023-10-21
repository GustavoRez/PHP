<?php  
$cars = array(25, "Volvo ", 96.3, "Yellow");
echo "Quantity of items in the array: ". count($cars). "<br>";

for ($i = 0; $i < count($cars); $i++){
	echo "array " . ($i + 1) . " - " . $cars[$i] . "<br>";
}
?>