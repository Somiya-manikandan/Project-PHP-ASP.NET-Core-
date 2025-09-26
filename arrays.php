4
<?php
echo "<h2>Arrays in PHP</h2>";

/* 1. Indexed Array (1D Array) */
echo "<h3>1. Indexed Array (1D)</h3>";
$fruits = array("Apple", "Banana", "Mango", "Orange");

echo "First fruit: " . $fruits[0] . "<br>";
echo "All Fruits:<br>";
foreach ($fruits as $f) {
    echo $f . "<br>";
}


/* 2. Associative Array */
echo "<h3>2. Associative Array</h3>";
$student = array(
    "name" => "Somiya",
    "age" => 21,
    "course" => "BSc IT"
);

echo "Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Course: " . $student["course"] . "<br>";

echo "All details:<br>";
foreach ($student as $key => $value) {
    echo "$key : $value<br>";
}


/* 3. Multidimensional Array */
echo "<h3>3. Multidimensional Array</h3>";
$marks = array(
    "Somiya" => array("Math" => 90, "Science" => 85, "English" => 88),
    "Ravi"   => array("Math" => 75, "Science" => 80, "English" => 70),
    "Neha"   => array("Math" => 95, "Science" => 92, "English" => 89)
);

echo "Somiya's Math Marks: " . $marks["Somiya"]["Math"] . "<br>";

echo "<br>All Students Marks:<br>";
foreach ($marks as $studentName => $subjects) {
    echo "<b>$studentName</b><br>";
    foreach ($subjects as $subject => $score) {
        echo "$subject : $score<br>";
    }
    echo "<br>";
}
?
>