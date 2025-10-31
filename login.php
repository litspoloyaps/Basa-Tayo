<?php
$file = "users.txt";


$username = $_POST['username'];
$password = $_POST['password'];

$found = false;

if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        list($stored_user, $stored_pass) = explode(":", $line);
        if ($username === $stored_user && $password === $stored_pass) {
            $found = true;
            break;
        }
    }
}

if ($found) {
    echo "<h2>Welcome, $username! ✅</h2>";
    echo "<p>You have successfully logged in to BasaTayo E-Library.</p>";
} else {
    echo "<h2>Login Failed ❌</h2>";
    echo "<p>Invalid Username or Password.</p>";
    echo "<p><a href='BasaTayo.html'>🔙 Try Again</a></p>";
}
?>