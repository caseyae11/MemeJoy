<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMEJOY</title>
    <link rel="stylesheet" href="meme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />

</head>
<body>
    <header>

        <div class="logo">MemeJoy</div>
        <div class="navigation">
                <!--when you add active to texts when coding, the active can represent a class in css and is simply used to identifuy tat a class is active(when clicked on an action occurs on the same page. Not a link.)-->
            <ul>
                <li><a href="library.php">Memess</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
                <!-- <li ><a href="" class="btn">Sign Up</a></li>
                <li ><a href="" class="btn">Login</a></li> -->
            </ul>
        </div>
    </header>

    <!-- <i class="fab fa-facebook"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-instagram"></i>
    <i class="fas fa-search"></i>

    <i class="fas fa-camera"></i> -->

    <section class="screen1">
        <div class="info">
            <h1>Find Your Memes!!</h1>
            <p>Welcome to MemeJoy, a well curated meme library for you, me and everyone!!! Join our community and get the memes you take so long to look for.</p>

            <div class="search">
                <form action="search_results.php" method="GET">
                    <input type="text" id="search" name="search" placeholder="Search by title or category">
                    <button type="submit">Search</button>
                </form>
            </div>
            <!-- <div class="register">
                <input type="email" name="email" placeholder="Your Email Address" />
                <button type="button">Get Started</button>
            </div> -->
        </div>
    </section>

    <section class="screen2">
        <div class="info">
            <h1>Search for a Meme</h1>
            <p>What meme are you looking for now? Trending? Old? Cartooons? Batman? Find them all through MemeJoy and share to the world!!</p>
        </div>

        <div class="pic">
        <img src="https://media.sproutsocial.com/uploads/meme-example.jpg" alt="first" >
        </div>
    </section>

    <section class="screen3">
        <div class="pic">
        <img src="https://static.wixstatic.com/media/bb1bd6_5798c09022ba43249a38bfea9be1db34~mv2.png/v1/fill/w_640,h_366,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/bb1bd6_5798c09022ba43249a38bfea9be1db34~mv2.png" alt="second" >
        </div>

        <div class="info">
            <h1>Update your Library</h1>
            <p>Save your favourite memes to your library so you can never lose them and share your cool memes</p>
        </div>
    </section>

    <section class="screen4">
        <div class="info">
            <h1>Update your Library</h1>
            <p>Save your favourite memes to your library so you can never lose them and share your cool memes</p>
        </div>

        <div class="pic">
        <img src="https://media.sproutsocial.com/uploads/meme-example.jpg" alt="first" >
        </div>
    </section>

    <section class="footer">
        
    </section>
</body>
</html>