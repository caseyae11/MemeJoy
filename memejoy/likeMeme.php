<?php
session_start(); // Start the session

if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or show an error message
    header("Location: login.php");
    exit();
}

var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = json_decode(file_get_contents('php://input'), true);

    $memeId = $data['meme_id'];
    $userId = $_SESSION['user_id'];

    // Connect to the database
    $dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
    $db_username = "root";
    $db_password = "";

    try {
        $pdo = new PDO($dsn, $db_username, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the meme is already liked by the user
        $stmt = $pdo->prepare("SELECT * FROM user_likes WHERE user_id = ? AND meme_id = ?");
        $stmt->execute([$userId, $memeId]);
        $result = $stmt->fetch();

        if (!$result) {
            // If the meme is not liked, insert into user_likes table
            $stmt = $pdo->prepare("INSERT INTO user_likes (user_id, meme_id) VALUES (?, ?)");
            $stmt->execute([$userId, $memeId]);
            echo "Meme with ID $memeId liked!";
        } else {
            // If the meme is already liked, you might want to handle this differently
            // For example, remove the like or display an error message
            echo "Meme with ID $memeId is already liked!";
        }
    } catch (PDOException $e) {
        // Handle database connection/error
        echo "Connection failed: " . $e->getMessage();
    }
}
?>

