<?php
// Aim: Program to demonstrate input validation, sanitization, password hashing, and verification

// -------- Sample User Input (normally comes from a form) --------
$user_name = " <b>Vaibhav</b> ";
$user_email = "test@example.com";
$user_password = "MySecurePass123";

// -------- Input Sanitization --------
$sanitized_name = filter_var($user_name, FILTER_SANITIZE_STRING);
echo "Sanitized Name: " . $sanitized_name . "<br>";

// -------- Email Validation --------
if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid Email: " . $user_email . "<br>";
} else {
    echo "Invalid Email.<br>";
}

// -------- Password Hashing --------
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
echo "Hashed Password: " . $hashed_password . "<br>";

// -------- Simulating Login (Password Verification) --------
$entered_password = "MySecurePass123"; // user enters password during login
if (password_verify($entered_password, $hashed_password)) {
    echo "Password is correct. Login successful!<br>";
} else {
    echo "Invalid password.<br>";
}

// -------- Using filter_input() Example (GET parameter) --------
// Example: URL -> test.php?age=25
$age = filter_input(INPUT_GET, "age", FILTER_SANITIZE_NUMBER_INT);
if ($age !== null && $age !== false) {
    echo "Age from GET input: " . $age . "<br>";
}
?>