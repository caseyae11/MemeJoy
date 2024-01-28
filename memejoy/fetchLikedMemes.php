<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or show an error message
    header("Location: login.php");
    exit();
}

// Fetch liked memes for the logged-in user
$userId = $_SESSION['user_id'];

// Connect to the database
$dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
$db_username = "root";
$db_password = "";

try {
    $pdo = new PDO($dsn, $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL query to fetch liked meme IDs
    $stmt = $pdo->prepare("SELECT meme_id FROM user_likes WHERE user_id = ?");
    $stmt->execute([$userId]);

    // Fetch liked meme IDs
    $likedMemes = $stmt->fetchAll(PDO::FETCH_COLUMN);

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode(['likedMemeIds' => $likedMemes]);
} catch (PDOException $e) {
    // Handle database connection/error
    echo "Connection failed: " . $e->getMessage();
}
?>
