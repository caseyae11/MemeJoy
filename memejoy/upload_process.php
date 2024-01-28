<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or show an error message
    header("Location: login.php");
    exit();
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded successfully
    if (isset($_FILES['memeFile']) && $_FILES['memeFile']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['memeFile'];

        // Perform file validations (e.g., file type, size, etc.)
        $allowedTypes = ['image/jpeg', 'image/png']; // Define allowed file types
        $maxFileSize = 5 * 1024 * 1024; // 5MB limit

        if (!in_array($file['type'], $allowedTypes)) {
            echo "Invalid file type. Please upload a JPEG or PNG image.";
            exit();
        }

        if ($file['size'] > $maxFileSize) {
            echo "File size exceeds the limit (5MB).";
            exit();
        }
      
        // Move the uploaded file to a permanent location
        $uploadDirectory = '/Applications/XAMPP/xamppfiles/htdocs/images/'; // Update with your storage path
        $filename = uniqid() . '_' . $file['name']; // Generate a unique filename
        $destination = $uploadDirectory . $filename;
        $relativeImagePath = '../images/' . $filename;

        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            echo "Failed to move the uploaded file.";
            exit();
        }

        // Insert metadata into the database (you'll need to adjust this based on your table structure)
        $userId = 123; // Replace with the user's ID
        $uploadDate = date("Y-m-d H:i:s");

        ////// INSERT INTO DATABSE PART 
       
        //get user and form data
       
        $userId = $_SESSION['user_id']; 
        $title = $_POST['memeTitle'];
        $category = $_POST['memeCategory'];

        //connect to databse
        $dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
        $db_username = "root";
        $db_password = "";

        //create pdo instance
        $pdo = new PDO($dsn, $db_username, $db_password);

        //prepare stmt
        $stmt = $pdo->prepare("INSERT INTO memes (title, image_path, uploader_id, category, upload_time) VALUES (?, ?, ?, ?, NOW())");

        // Bind parameters and execute the statement
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $relativeImagePath);
        $stmt->bindParam(3, $userId);
        $stmt->bindParam(4, $category);

        //execute
        if ($stmt->execute()) {
            echo "memes was posted";
        } else {
            echo "meme wasnt posted";
        }
        

    }
}
?>
