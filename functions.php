<?php  
// 1. Simple function
function sayHello() {
    echo "Hello, Welcome to PHP Functions!<br>";
}

// 2. Function with parameters
function greet($name) {
    echo "Hello, $name!<br>";
}

// 3. Function with default parameters
function introduce($name, $role = "Student") {
    echo "I am $name and I am a $role.<br>";
}

// 4. Function with named arguments (PHP 8+)
function showDetails($name, $age, $city) {
    echo "Name: $name, Age: $age, City: $city<br>";
}

// Calling the functions
sayHello();                               // Simple function
greet("Vaibhav");                         // With parameter
introduce("Rohan");                       // Using default parameter
introduce("Priya", "Developer");          // Passing both parameters
showDetails(age: 21, city: "Mumbai", name: "Amit"); // Named arguments
?>