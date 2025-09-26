
6
<?php
echo "<h2>Working with Variable Constraints in PHP</h2>";

/* Declare variables */
$a = "Hello";
$b = "";
$c = null;
$d; // not set

/* 1. isset() → Checks if variable is set and not NULL */
echo "<h3>1. isset()</h3>";
echo "Is \$a set? " . (isset($a) ? "Yes" : "No") . "<br>";
echo "Is \$b set? " . (isset($b) ? "Yes" : "No") . "<br>";
echo "Is \$c set? " . (isset($c) ? "Yes" : "No") . "<br>";
echo "Is \$d set? " . (isset($d) ? "Yes" : "No") . "<br>";


/* 2. empty() → Checks if variable is empty (0, "", null, false, []) */
echo "<h3>2. empty()</h3>";
echo "Is \$a empty? " . (empty($a) ? "Yes" : "No") . "<br>";
echo "Is \$b empty? " . (empty($b) ? "Yes" : "No") . "<br>";
echo "Is \$c empty? " . (empty($c) ? "Yes" : "No") . "<br>";
echo "Is \$d empty? " . (empty($d) ? "Yes" : "No") . "<br>";


/* 3. is_null() → Checks if variable is NULL */
echo "<h3>3. is_null()</h3>";
echo "Is \$a null? " . (is_null($a) ? "Yes" : "No") . "<br>";
echo "Is \$b null? " . (is_null($b) ? "Yes" : "No") . "<br>";
echo "Is \$c null? " . (is_null($c) ? "Yes" : "No") . "<br>";
// $d is not set, so using is_null($d) will throw notice if error reporting is strict
?>