<?php
$file = "users.txt";

$username = $_POST['username'];
$password = $_POST['password'];

$file_handle = fopen($file, "a");
fwrite($file_handle, $username . ":" . $password . "\n");
fclose($file_handle);

header("Location: signup_success.html");
exit();
?>
