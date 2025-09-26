<?php
// Aim: Program to demonstrate state management using Cookies in PHP

// -------- Setting a Cookie --------
// setcookie(name, value, expire_time, path)
setcookie("username", "Vaibhav", time() + 3600, "/"); // expires in 1 hour
setcookie("user_age", "21", time() + 3600, "/");

echo "Cookies have been set.<br>";

// -------- Accessing Cookies --------
if (isset($_COOKIE["username"])) {
    echo "Username Cookie: " . $_COOKIE["username"] . "<br>";
}
if (isset($_COOKIE["user_age"])) {
    echo "Age Cookie: " . $_COOKIE["user_age"] . "<br>";
}

// -------- Modifying Cookie --------
setcookie("username", "UpdatedVaibhav", time() + 3600, "/");
echo "Username cookie updated.<br>";

// -------- Deleting Cookie --------
setcookie("user_age", "", time() - 3600, "/"); // expired
echo "Age cookie deleted.<br>";
?>