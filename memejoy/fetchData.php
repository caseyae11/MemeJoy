<?php
$dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
$db_username = "root";
$db_password = "";

$pdo = new PDO($dsn, $db_username, $db_password);

$stmt = $pdo->query("SELECT meme_id, title, image_path, category FROM memes");
$imageData = $stmt->fetchAll();

echo json_encode($imageData);

?>