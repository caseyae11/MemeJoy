<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup_container">
        <div class="signup_right">
            <div class="logo">MemeJoy</div>
                <h3>Join the evergrowing community at MemeJoy lets have some fun!!</h3>
                <p>Sign up Sign Up Sign Up</p>
        </div>
        <div class="signup">
            <h3>Sign Up for MemeJoy today!</h3>
            <form action="register_confirm.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <input type="submit" value="Sign Up" class="signUpbtn">
            </form>
            <p class="p_login">
                Already have an account?<a href="login.html"> Login</a>
            </p>
        </div>
    </div>
</body>
</html>