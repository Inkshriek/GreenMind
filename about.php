<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- UPDATE BANNER AND NAV -->
    
    <title>Green Mind - About Us</title>
    <meta name="description" content="Climate Activism and Education">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://kit.fontawesome.com/ccae1dd588.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="banner">
       <div class="banner-image"></div>
    </div>

    <nav>
        <ul class="container">
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item selected"><a href="about.php">About Us</a></li>
            <?php
                if (isset($_GET["signedup"]) && $_GET["signedup"] == true) {
                    ?><div class="message">You've successfully signed up! You may use your information now to login.</div><?php
                }

                if (isset($_SESSION["loggedin"])) {
                    if (!$_SESSION["loggedin"]) {
                        ?>
                            <li class="item button"><a href="login.php">Login</a></li>
                            <li class="item button secondary"><a href="signup.php">Sign Up</a></li>
                        <?php
                    }
                    else {
                        ?>
                            <li class="item button"><a href="account.php">Your Account</a></li>
                            <li class="item button secondary"><a href="logout.php">Logout</a></li>
                        <?php
                    }
                }
            ?>
            <li class="toggle"><i class="fas fa-bars fa_custom"></i></li> 
            <!-- ^Need to add event listener for menu toggle, should assign all 
                list elements with the class "active" -->
        </ul>
    </nav>

    <h1 class="header">About Us</h1>
    <div class="main">
        <div class="card">
            <div class="imgBox">
                <img src="img/beach_bottle.jpg" alt="Beach Bottle">
            </div>
            <div class="content">
                <h3 class="title">Welcome!</h3>
                <p class="text">
                    We are Green Mind! We are an advocacy group whose purpose 
                    is to spread awareness about Climate Change.  
                    <br><br>
                    We want to inform others about Climate Change, how it is 
                    impacted, and what each of us can do to help prevent 
                    this rapid change in our earth. We want the earth to be 
                    healthy and take care of it since it is our home, we 
                    hope you think so too!
                    <br><br>
                    Thank you for visiting our site! Check out our social 
                    media links below to stay connected about current 
                    events and more ways to get involved.
                    <br><br>
                    Together we can fight climate change by sharing our Green 
                    Minds! 
                </p>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="img/plastic_bottles_net.jpg" alt="Bottle Net">
            </div>
            <div class="content">
                <h3 class="title">Contact</h3>

                <p class="text">Follow Us on Social Media!</p>
                <!-- NEEDS MORE WORK -->
                <ul class="socialLinks">
                    <li class="social"><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/"><i class="fab fa-twitter"></i></a></li>
                    <li class="social"><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/"><i class="fab fa-instagram"></i></a></li>
                    <li class="social"><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <p>Prototype Developed by Noah Jervey</p>
        <p>Made for Group 3 of Web Design Workshop II</p>
        <button onclick="scrolltoTop()" id="scrolltop" class="backToTop"><i class="fas fa-angle-double-up fa_custom"></i></button>
    </footer>

    <script>
        function scrolltoTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>