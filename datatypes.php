<?php
// String
$name = "Somiya";

// Integer
$age = 21;

// Float (decimal number)
$height = 5.4;

// Boolean
$isStudent = true;

// Array
$fruits = array("Apple", "Banana", "Mango");

// Associative Array
$person = array("name" => "Somiya", "age" => 21, "city" => "Mumbai");

// Null
$nothing = null;

// Output
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height <br>";
echo "Is Student? " . ($isStudent ? "Yes" : "No") . "<br>";
echo "First Fruit: " . $fruits[0] . "<br>";
echo "Person's City: " . $person["city"] . "<br>";
echo "Nothing: ";
var_dump($nothing);

// Display data types using var_dump
echo "<br><br>--- Data Types ---<br>";
var_dump($name);
var_dump($age);
var_dump($height);
var_dump($isStudent);
var_dump($fruits);
var_dump($person);
?>
