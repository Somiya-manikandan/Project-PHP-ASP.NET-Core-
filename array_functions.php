5
<?php
echo "<h2>Array Functions in PHP</h2>";

/* Sample Array */
$numbers = [1, 2, 3, 4, 5];

/* 1. array_map() */
echo "<h3>1. array_map()</h3>";
function square($n) {
    return $n * $n;
}
$squares = array_map("square", $numbers);
echo "Original Array: ";
print_r($numbers);
echo "<br>Squared Array: ";
print_r($squares);
echo "<br><br>";


/* 2. array_filter() */
echo "<h3>2. array_filter()</h3>";
function isEven($n) {
    return $n % 2 == 0;
}
$evens = array_filter($numbers, "isEven");
echo "Even Numbers: ";
print_r($evens);
echo "<br><br>";


/* 3. array_reduce() */
echo "<h3>3. array_reduce()</h3>";
function sum($carry, $item) {
    return $carry + $item;
}
$total = array_reduce($numbers, "sum", 0);
echo "Sum of Array: $total<br>";
?>