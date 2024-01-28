<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_FILES['memeFiles']['name'][0])) {
        $totalFiles = count($_FILES['memeFiles']['name']);

        for ($i = 0; $i < $totalFiles; $i++) {
            $file = $_FILES['memeFiles'];
            $allowedTypes = ['image/jpeg', 'image/png'];
            $maxFileSize = 5 * 1024 * 1024;

            if (!in_array($file['type'][$i], $allowedTypes)) {
                echo "Invalid file type. Please upload a JPEG or PNG image.";
                exit();
            }

            if ($file['size'][$i] > $maxFileSize) {
                echo "File size exceeds the limit (5MB).";
                exit();
            }

            $uploadDirectory = '/Applications/XAMPP/xamppfiles/htdocs/images/';
            $filename = uniqid() . '_' . $file['name'][$i];
            $destination = $uploadDirectory . $filename;
            $relativeImagePath = '../images/' . $filename;

            if (!move_uploaded_file($file['tmp_name'][$i], $destination)) {
                echo "Failed to move the uploaded file.";
                exit();
            }

            $userId = $_SESSION['user_id'];
            $title = $_POST['memeTitle'];
            $category = $_POST['memeCategory'];

            $dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
            $db_username = "root";
            $db_password = "";

            $pdo = new PDO($dsn, $db_username, $db_password);

            $stmt = $pdo->prepare("INSERT INTO memes (title, image_path, uploader_id, category, upload_time) VALUES (?, ?, ?, ?, NOW())");
            $stmt->bindParam(1, $title);
            $stmt->bindParam(2, $relativeImagePath);
            $stmt->bindParam(3, $userId);
            $stmt->bindParam(4, $category);

            if ($stmt->execute()) {
                echo "Meme uploaded successfully!";
            } else {
                echo "Failed to upload the meme.";
            }
        }
    }
}

?>