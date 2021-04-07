<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Landing Page</title>
    <meta name="description" content="Climate Activism and Education">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
</head>

<body>
    <!-- Testing, once fully fuctional will copy to other pages - NS -->
    <div class="banner">
       <div class="banner-image"></div>
    </div>

    <nav>
        <ul class="container">
            <li class="item"><a href="events.php">Current Events</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <li class="item button"><a href="">Login</a></li>
            <li class="item button secondary"><a href="">Sign Up</a></li>
            <li class="toggle"><i class="fas fa-bars fa_custom"></i></li> 
            <!-- ^Need to add event listener for menu toggle -->
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

    <h1>Welcome to Green Mind, your resource on our changing climate.</h1>

    <!--You should probably see a preview of significant events from here.-->
    <div class="panel">
        <ul id="breakingnews">
            <h3>Local News</h3>
            <li class="newsitem">
                <p>Toxic wastewater pool threatening to leak into an aquifer in 
                    Manatee County.</p>
                <p>Inert naval mine washed up on Florida beach, now is removed.</p>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            
            <h3>National News</h3>
            <li class="newsitem">    
                <p>President Biden's Infrastructure Plan and now it can be 
                    positively impact climate change.</p>
                <p>The use of US pesticides is decreasing but harms 
                    pollinators more?</p>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
        
            <h3>Global News</h3>
            <li class="newsitem">        
                <p>Japan recorded its earliest cherry blossom bloom in 1,200 
                    years. Scientists are warning this is due to climate change.</p>
                <p>The beef industry can become more climate-friendly in its 
                    production and land management.</p>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
        </ul>
        <p class="morenews"><a href="events.html">See Current Events</a></p>
    </div>

    <div class="panel">
        <p>It is often said that caring for the environment is an individual 
            responsibility, and that we must be the ones to do it. Such may be 
            true, but what of the ones really doing the damage? The ones seldom 
            spoken about; the ones with power and wealth. We would like to 
            change the discussion.</p>
        <p>And you can do your part to advocate!</p>
        <p id="takethestep"><a href="climate.html">Take The Step</a></p>
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