<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="login_container">

        <div class="login_right">
        <div class="logo">MemeJoy</div>
            <h3>Join the evergrowing community at MemeJoy lets have some fun!!</h3>
            <p>Sign up Sign Up Sign Up</p>
        </div>
        <div class="login">
            <h3>Login to your MemeJoy account</h3>
            <form id="loginForm" action="login_confirm.php" method="POST">
                <label for="usernameOrEmail">Username or Email:  </label>
                <input type="text" id="usernameOrEmail" name="usernameOrEmail" required>
               
            
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required> 
            
                <input type="submit" value="Login" class="loginbtn">
            </form>
            <p class="p_signup">
                Dont have an account? <a href="signup.html">Sign Up</a>
            </p>
        </div>
    </div>
</body>
</html>