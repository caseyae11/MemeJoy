<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user ID from the session
    $userId = $_SESSION['user_id'];

    $dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
    $db_username = "root";
    $db_password = "";
    
    $pdo = new PDO($dsn, $db_username, $db_password);

    try {
        // Delete the user's account
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$userId]);

        // Redirect to the login page or display a success message
        header("Location: login.php");
        exit();
    } catch (PDOException $e) {
        // Handle database connection/error
        echo "Deletion failed: " . $e->getMessage();
    }
}
?>
