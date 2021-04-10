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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://kit.fontawesome.com/ccae1dd588.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <!-- Testing, once fully fuctional will copy to other pages - NS -->
    <div class="banner">
       <div class="banner-image"></div>
    </div>

    <nav>
        <ul class="container">
            <li class="item selected"><a href="index.php">Home</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
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

    <h1 class="header">Welcome to Green Mind, your resource on our changing climate.</h1>

    <!--You should probably see a preview of significant events from here.-->
    <div class="main">
        <div class="card">
            <div class=imgBox>
                <img src="img/naval-mine.jpg" alt="Naval Mine">
            </div>
            <div class="content">
                <h3 class="title">Local News</h3>
                <p class="text">
                    - Toxic wastewater pool threatening to leak into an aquifer in Manatee County.
                    <br><br>
                    - Inert Naval Mine Washed up on Florida Beach, now is removed.
                </p>
                <a href="https://www.mynews13.com/fl/orlando/ap-online/2021/04/05/inert-naval-mine-removed-after-washing-up-on-florida-beach" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="img/Biden-plan.jpg" alt="Joe Biden">
            </div>
            <div class="content">
                <h3 class="title">National News</h3>
                <p class="text">
                    - President Biden's Infrastructure Plan and now it can be positively impact climate change.
                    <br><br>
                    - The use of US pesticides is decreasing but harms pollinators more?
                </p>
                <a href="https://www.nytimes.com/2021/04/02/podcasts/the-daily/the-biden-infrastructure-package.html" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="img/beef.jpg" alt="Beef">
            </div>
            <div class="content">
                <h3 class="title">Global News</h3>
                <p class="text">
                    - The beef industry can become more climate-friendly in its 
                    production and land management.
                    <br><br>
                    - Japan recorded its earliest cherry blossom bloom in 1,200 
                    years. Scientists are warning this is due to climate change.
                </p>
                <a href="https://www.sciencedaily.com/releases/2021/04/210406092656.htm" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <h3 class="title"></h3>
                <p class="text">
                    It is often said that caring for the environment is an individual 
                    responsibility, and that we must be the ones to do it. Such may be 
                    true, but what of the ones really doing the damage? The ones seldom 
                    spoken about; the ones with power and wealth. We would like to 
                    change the discussion.</p>
                    <br><br>
                    And you can do your part to advocate!
                    <p id="takethestep"><a href="climate.php">Take The Step</a>
                </p>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">

            </div>
            <div class="content">
                <h3 class="title"></h3>
                <p class="text">

                </p>
                <a href="" class="source">Read More</a>
            </div>
        </div>
    </div>
    
    <footer>
        <p>Prototype Developed by Noah Jervey</p>
        <p>Made for Group 3 of Web Design Workshop II</p>
        
        <div>
            <button onclick="scrolltoTop()" id="scrolltop" class="backToTop"><i class="fas fa-angle-double-up fa_custom"></i></button>
        </div>
        
    </footer>

    <script>
        function scrolltoTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>