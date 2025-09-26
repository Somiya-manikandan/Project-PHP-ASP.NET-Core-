3a
<?php
echo "<h2>Branching & Jumping Statements in PHP</h2>";

// Example variable
$marks = 75;

// 1. if statement
echo "<h3>1. if statement</h3>";
if ($marks >= 50) {
    echo "You passed the exam!<br>";
}


// 2. if...else
echo "<h3>2. if...else statement</h3>";
if ($marks >= 80) {
    echo "Excellent Performance<br>";
} else {
    echo "Needs Improvement<br>";
}


// 3. if...elseif...else
echo "<h3>3. if...elseif...else statement</h3>";
if ($marks >= 90) {
    echo "Grade: A+<br>";
} elseif ($marks >= 75) {
    echo "Grade: A<br>";
} elseif ($marks >= 60) {
    echo "Grade: B<br>";
} elseif ($marks >= 40) {
    echo "Grade: C<br>";
} else {
    echo "Fail<br>";
}


// 4. switch statement
echo "<h3>4. switch statement</h3>";
$day = "Tue";
switch ($day) {
    case "Mon":
        echo "Today is Monday<br>";
        break;
    case "Tue":
        echo "Today is Tuesday<br>";
        break;
    case "Wed":
        echo "Today is Wednesday<br>";
        break;
    default:
        echo "Some other day<br>";
        break;
}


// 5. Ternary Operator
echo "<h3>5. Ternary Operator</h3>";
$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo "Age = $age → Status: $status<br>";
?>