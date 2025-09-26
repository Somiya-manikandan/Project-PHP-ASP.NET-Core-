
<?php
echo "<h2>Arithmetic Operators</h2>";
$a = 10;
$b = 3;

echo "a = $a, b = $b<br>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";


echo "<h2>Logical Operators</h2>";
$val1 = true;
$val2 = false;
echo "val1 = true, val2 = false<br>";
echo "AND (&&): " . var_export($val1 && $val2, true) . "<br>";
echo "OR (||): " . var_export($val1 || $val2, true) . "<br>";
echo "NOT (!): " . var_export(!$val1, true) . "<br>";
echo "XOR: " . var_export($val1 xor $val2, true) . "<br>";


?>