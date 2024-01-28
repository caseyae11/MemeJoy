<?php

session_start(); 
// Retrieve input data from the form
$usernameOrEmail = $_POST["usernameOrEmail"];
$password = $_POST["password"];

// Database connection details
$dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

// Attempt to establish a connection to the database


// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if input is an email address
    if (filter_var($usernameOrEmail, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM users WHERE email = :input";
    } else {
        $query = "SELECT * FROM users WHERE username = :input";
    }

    // Prepare and execute the query using prepared statements
    $statement = $pdo->prepare($query);
    $statement->bindParam(':input', $usernameOrEmail);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Verify the password if a user was found
    if ($user && $password === $user['password']) {
        // Authentication successful (plaintext password comparison)
        $_SESSION['user_id'] = $user['user_id'];
        header("Location: library.php");
        //echo "Login successful! Welcome, " . $user['username'];
        // Redirect or perform further actions
    } else {
        // Invalid credentials
        echo "Invalid username/email or password";
        // Handle error or redirect back to login page
        }
  
}
?>
