1B
<?php
echo "<h2>Type Casting in PHP</h2>";

// Original string
$var = "123.45abc";

// Cast to integer
$intVar = (int)$var;

// Cast to float
$floatVar = (float)$var;

// Cast to string
$stringVar = (string)100;

// Cast to boolean
$boolVar = (bool)$var;

echo "Original: $var (type: " . gettype($var) . ")<br>";
echo "Integer Casting: $intVar (type: " . gettype($intVar) . ")<br>";
echo "Float Casting: $floatVar (type: " . gettype($floatVar) . ")<br>";
echo "String Casting: $stringVar (type: " . gettype($stringVar) . ")<br>";
echo "Boolean Casting: $boolVar (type: " . gettype($boolVar) . ")<br>";


echo "<h2>Type Juggling in PHP</h2>";

$num = "50"; // string
$sum = $num + 20; // PHP converts string to integer automatically

echo "String '50' + 20 = $sum (type: " . gettype($sum) . ")<br>";

$val = 0; 
if ($val == false) {  // PHP juggles integer 0 into boolean false
    echo "0 is treated as false in PHP<br>";
}

$val2 = "100 cats";
$calc = $val2 + 50; // PHP converts "100 cats" -> 100
echo "'100 cats' + 50 = $calc (type: " . gettype($calc) . ")<br>";
?>
