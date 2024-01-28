<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the current and new passwords
    $currentPassword = $_POST['currentPassword']; // Implement validation here
    $newPassword = $_POST['newPassword']; // Implement validation here

    // Get the user ID from the session
    $userId = $_SESSION['user_id'];

    $dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
    $db_username = "root";
    $db_password = "";
    
    $pdo = new PDO($dsn, $db_username, $db_password);

    try {
        // Fetch the user's current password from the database
        $stmt = $pdo->prepare("SELECT password FROM users WHERE user_id = ?");
        $stmt->execute([$userId]);
        $user = $stmt->fetch();

        // Verify the current password
        if ($currentPassword === $user['password']) {

            $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE user_id = ?");
            $stmt->execute([$newPassword, $userId]);

            // Redirect back to the user profile page or display a success message
            header("Location: userProfile.php");
            exit();
        } else {
            echo "Current password is incorrect.";
        }
    } catch (PDOException $e) {
        // Handle database connection/error
        echo "Update failed: " . $e->getMessage();
    }
}

