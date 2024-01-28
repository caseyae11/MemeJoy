<?php
$dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
$db_username = "root";
$db_password = "";

if(isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $pdo = new PDO($dsn, $db_username, $db_password);
    $stmt = $pdo->prepare("SELECT title, image_path, category FROM memes WHERE LOWER(title) LIKE :searchTerm OR LOWER(category) LIKE :searchTerm");
    $stmt->execute([':searchTerm' => "%$searchTerm%"]);
    $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);


    
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Events</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
            <div class="logo">
                <h1>MemeJoy</h1>
            </div>
            
            <div class="search">
                <form action="search_results.php" method="GET">
                    <input type="text" id="search" name="search" placeholder="Search by title or category">
                    <button type="submit">Search</button>
                </form>
            </div>

            <div class="navigation">
                <ul>
                <li><a href="uploadmeme.php">Upload</a></li>
                  <li><a href="library.php">Library</a></li>
                  <li><a href="userProfile.php">Profile</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
    </header>

    <section class="librarySection">
    <div class="library-container">
        <div id="meme-gallery" class=meme-container>
        <?php
            foreach ($searchResults as $result) {
                echo '<div class= "meme-item">';
                echo "<img src='http://localhost/images/{$result['image_path']}' alt='{$result['title']}'>"; 
                echo '</div>';      
            }
        ?>
        </div>
    </div>
</section>
</body>
</html>


