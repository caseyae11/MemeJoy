<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <section class="upload">
        <div class="uploading">
            <h1>GIVE US YOURR MEMESS</h1>
            <form action="upload_process.php" method="post" id = "uploadForm" enctype="multipart/form-data">
            <div class="upload-form">

            <label for="photo">Upload Meme: </label>
            <input type="file" name="memeFile" accept="image/*" placeholder="Drop or Upload Photos" required>

            <label for="text">Meme Title: </label>
            <input type="text" name="memeTitle" placeholder="Title" required>

            <label for="text">Meme Category: </label>
            <input type="text" name="memeCategory" placeholder="Category" required>
            
            <input type="submit" value="Upload">
            </div>
            </form>
        </div>
    </section>

    <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2 id="popup-title">Upload Status</h2>
        <p id="popup-message"></p>
    </div>
    </div>


    <script src="upload_ajax.js"></script>
    <script src="popup.js"></script>


</body>
</html>
