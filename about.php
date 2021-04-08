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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
    <div class="banner">
       <div class="banner-image"></div>
    </div>

    <nav>
        <ul class="container">
            <li class="item"><a href="events.php">Current Events</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item" id="selected"><a href="about.php">About Us</a></li>
            <li class="item button"><a href="">Login</a></li>
            <li class="item button secondary"><a href="">Sign Up</a></li>
            <li class="toggle"><i class="fas fa-bars fa_custom"></i></li> 
            <!-- ^Need to add event listener for menu toggle, should assign all 
                list elements with the class "active" -->
        </ul>

        <!--Displays login/signup buttons if you're not signed in, or the account button if you are.-->
        <?php
            if (isset($_SESSION["loggedin"])) {
                if (!$_SESSION["loggedin"]) {
                    ?><p id="login">
                        <a href="login.php">Login</a> | <a href="signup.php">Signup</a>
                    </p><?php
                }
                else {
                    ?><p id="account">
                        <a href="account.php">Your Account</a>
                    </p><?php
                }
            }
        ?> <!-- If possible, can you add these^ to the nav UL? I want them to be 
            included but I also dont want to deconstruct your code. TY - NS -->
    </nav>

    <h1>About Us</h1>

    <div class="wrapper">
        <div class="main">
            <div class="card">
                <div class="imgBox">
                    <img src="" alt="">
                </div>
                <div class="content">
                    <h3>Welcome!</h3>
        
                    <p>We are Green Mind! We are an advocacy group whose purpose
                         is to spread awareness about Climate Change.</p>  

                    <p>We want to inform others about Climate Change, how it is 
                        impacted, and what each of us can do to help prevent 
                        this rapid change in our earth. We want the earth to be 
                        healthy and take care of it since it is our home, we 
                        hope you think so too!</p>

                    <p>Thank you for visiting our site! Check out our social 
                        media links below to stay connected about current 
                        events and more ways to get involved. </p>

                <p>Together we can fight climate change by sharing our Green 
                    Minds! </p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="" alt="">
                </div>
                <div class="content">
                    <h3>Contact</h3>

                    <p>Follow Us on Social Media!</p>
                    <!-- USE FONT-AWESOME ICONS -->
                    <ul class="socialLinks">
                        <li class="social"><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/" class="fab fa-twitter"></a></li>
                        <li class="social"><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/" class="fab fa-instagram"></a></li>
                        <li class="social"><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/" class="fab fa-tiktok"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Prototype Developed by Noah Jervey</p>
        <p>Made for Group 3 of Web Design Workshop II</p>
        <button onclick="scrolltoTop()" id="scrolltop">Go To Top</button>
    </footer>

    <script>
        function scrolltoTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>