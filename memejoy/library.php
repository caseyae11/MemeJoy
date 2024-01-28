<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Meme Gallery</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />


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
          <div id="meme-gallery" class="meme-container">
            <!-- Memes will be dynamically inserted here -->
          </div>
        </div>
  </section>
  

  <!-- Include your JavaScript file here -->
  <script src="library.js"></script>
  <!-- <script src="like.js"></script> -->
</body>
</html>
