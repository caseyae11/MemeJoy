<?php
session_start();

// Check if the user is logged in and fetch user details from your database
if (isset($_SESSION['user_id'])) {
    // Connect to your database (replace these variables with your actual database credentials)
    $dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
    $db_username = "root";
    $db_password = "";

    try {
        // Create a PDO instance
        $pdo = new PDO($dsn, $db_username, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch user details using the user ID from the session
        $userId = $_SESSION['user_id'];
        $stmt = $pdo->prepare("SELECT * FROM users WHERE user_id = ?");
        $stmt->execute([$userId]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if user exists
      
    } catch (PDOException $e) {
        // Handle database connection/error
        echo "Connection failed: " . $e->getMessage();
    }
} else {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
    <script src="profile.js"></script>

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

  <section class= "userProfile">
  <h1>User Profile</h1>
    
    <!-- Display user information -->
    <div>
        <p>Username: <span id="username"><?php echo $user['username']; ?></span></p>
        <!-- Add more user details here if needed -->
    </div>

    <!-- Buttons to trigger editing -->
    <div>
        <button onclick="editUsername()">Edit Username</button>
        <button onclick="changePassword()">Change Password</button>
        <button onclick="deleteAccount()">Delete Account</button>
    </div>

    <!-- Placeholder elements for the forms -->
    <div>
        <!-- Form to update username -->
        <form id="usernameForm" action="update_username.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <label for="newUsername">New Username:</label>
            <input type="text" id="newUsername" name="newUsername" required>
            <button type="submit">Change Username</button>
        </form>

        <!-- Form to update password -->
        <form id="passwordForm" action="update_password.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <label for="currentPassword">Current Password:</label>
            <input type="password" id="currentPassword" name="currentPassword" required>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>
            <button type="submit">Change Password</button>
        </form>

        <!-- Form to delete account -->
        <form id="deleteForm" action="delete_account.php" method="POST">
            <button type="submit">Confirm Deletion</button>
        </form>
    </div>

  </section>
    



</body>
</html>
