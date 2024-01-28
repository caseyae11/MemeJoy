<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the new username
    $newUsername = $_POST['newUsername']; // Implement validation here

    // Get the user ID from the session
    $userId = $_SESSION['user_id'];

    $dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
    $db_username = "root";
    $db_password = "";

    $pdo = new PDO($dsn, $db_username, $db_password);

    try {
        // Prepare and execute the update query
        $stmt = $pdo->prepare("UPDATE users SET username = ? WHERE user_id = ?");
        $stmt->execute([$newUsername, $userId]);
        
        // Redirect back to the user profile page or display a success message
        header("Location: userProfile.php");
        exit();
    } catch (PDOException $e) {
        // Handle database connection/error
        echo "Update failed: " . $e->getMessage();
    }
}
?>
