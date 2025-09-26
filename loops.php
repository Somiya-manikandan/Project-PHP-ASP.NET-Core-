3b<?php
echo "<h2>Looping Statements in PHP</h2>";

echo "<h3>1. while loop</h3>";
$i = 1;
while ($i <= 5) {
    echo "Number: $i<br>";
    $i++;
}


echo "<h3>2. do...while loop</h3>";
$j = 1;
do {
    echo "Count: $j<br>";
    $j++;
} while ($j <= 5);


echo "<h3>3. for loop</h3>";
for ($k = 1; $k <= 5; $k++) {
    echo "Iteration: $k<br>";
}


echo "<h3>4. break statement</h3>";
for ($x = 1; $x <= 10; $x++) {
    if ($x == 6) {
        echo "Loop stopped at x = $x<br>";
        break;  // exit loop when x = 6
    }
    echo "x = $x<br>";
}


echo "<h3>5. continue statement</h3>";
for ($y = 1; $y <= 10; $y++) {
    if ($y % 2 == 0) {
        continue; // skip even numbers
    }
    echo "Odd number: $y<br>";
}
?>