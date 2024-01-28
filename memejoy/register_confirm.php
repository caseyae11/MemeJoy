<?php
// // Database connection details
// $dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
// $db_username = "root";
// $db_password = "";

// // Check if the form was submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password']; // Remember to hash this password for storage

//     // try {
//         // Create a PDO connection
//         $pdo = new PDO($dsn, $db_username, $db_password);
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         // Hash the password before storing (using PHP's password_hash function)
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//         // Prepare and execute SQL query to insert user data into the 'users' table
//         $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
//         $statement = $pdo->prepare($query);
//         $statement->bindParam(':username', $username);
//         $statement->bindParam(':email', $email);
//         $statement->bindParam(':password', $hashed_password);
//         $statement->execute();

//         // Redirect to the registration confirmation page upon successful registration
//         header("Location: confirmed.php");
//         exit();
//     // } catch (PDOException $e) {
//     //     echo "Error: " . $e->getMessage();
//     // }
// }
?>


<?php
$dsn = "mysql:host=localhost;dbname=memejoy;charset=utf8mb4";
$db_username = "root";
$db_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $pdo = new PDO($dsn, $db_username, $db_password);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");
    $stmt->execute();

    header("Location: login.php");
  //  echo "<h1>Registration Successful</h1>";
    exit();
 
}
?>

