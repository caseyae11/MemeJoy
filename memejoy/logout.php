<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session cookie if it exists
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Destroy the session
session_destroy();

// Redirect to the login page or any other page after logout
header("Location: login.php");
exit();
?>
