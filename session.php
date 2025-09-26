<?php
// Aim: Program to demonstrate state management using Sessions in PHP

// -------- Starting a Session --------
session_start();

// -------- Setting Session Variables --------
$_SESSION["username"] = "Vaibhav";
$_SESSION["user_age"] = 21;

echo "Session variables are set.<br>";

// -------- Accessing Session Variables --------
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Age: " . $_SESSION["user_age"] . "<br>";

// -------- Modifying Session Variable --------
$_SESSION["username"] = "UpdatedVaibhav";
echo "Username updated: " . $_SESSION["username"] . "<br>";

// -------- Unsetting a Single Session Variable --------
unset($_SESSION["user_age"]);
echo "User age session variable removed.<br>";

// -------- Destroying the Session --------
// session_destroy();  // Uncomment this line to completely destroy session
?>