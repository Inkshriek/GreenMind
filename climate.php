<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Climate Change</title>
    <meta name="description" content="Climate Activism and Education">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://kit.fontawesome.com/ccae1dd588.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- UPDATE BANNER AND NAV -->
    <div class="banner">
       <div class="banner-image"></div>
    </div>

    <nav>
        <ul class="container">
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item selected"><a href="climate.php">Climate Change</a></li>
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
            <li class="toggle" onclick="toggleNav()"><i class="fas fa-bars fa_custom"></i></li> 
        </ul>
    </nav>

    <h1 class="header">Climate Change</h1>
    <div class="main">
        <div class="card">
            <div class=imgBox>
                <img src="img/earth.jpg" alt="Earth">
            </div>
            <div class="content">
                <h3 class="title">What is Climate Change?</h3>
                <p class="text">Climate Change is concerning weather during a particular time of year in a specific location that changes from what the weather is normally like in that place.
                    <br><br>
                    However, Climate Change also is concerning the weather around the world and how the earth???s weather patterns change around the globe as a whole.
                    <br><br>
                    Climate Change is not a typically fast occurrence like how it rains in the afternoon for a few hours or less. Climate Change is an alteration in weather that occurs over long periods, like years at a time, to see or notice any significant differences within seasonal weather patterns.
                </p>
                <a href="https://www.nasa.gov/audience/forstudents/k-4/stories/nasa-knows/what-is-climate-change-k4.html" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class=imgBox>
                <img src="img/weather_vs_climate.jpg" alt="Weather Vs Climate">
            </div>
            <div class="content">
                <h3 class="title">How did Climate Change Start?</h3>
                <p class=text>Climate Change has always been in existence. Climate alters on its 
                    own by fluctuating based on natural occurrences. An example of a 
                    natural occurrence that could impact climate change is where the 
                    earth sits in relation to the sun. The earth may not sit in the 
                    same place every year on the same day which would cause a change in 
                    the earth???s climate compared to previous weather. 
                </p>
                <a href="https://www.nationalgeographic.org/encyclopedia/climate-change/" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class=imgBox>
                <img src="img/nasa-world-heat-map.jpg" alt="Nasa Heat Map">
            </div>
            <div class="content">
                <h3 class="title">What is so bad About Climate Change?</h3>
    
                <p class="text">Climate Change is not bad; however, the problem currently with Climate Change is the earth???s climate is changing drastically in shorter periods than usual. For example, rather than taking multiple years to see a gradual change in the weather, there is a jump in the earth???s climate by changing at greater amounts each year. This large change in the climate is due to the impact human???s everyday actions take on our earth???s climate. These actions can alter the course of this change on our earth. Since billions of humans inhabit this planet, something as common as driving a car that takes gas causes some sort of change to our climate due to the pollution from the burning of fuel. There are many other contributions that humans play a large role in that add to the rapid shift of Climate Change besides car pollution.</p>  
            </div>
        </div>
        <div class="card">
            <div class="content">
                <p class="text">Want to know more about the influences that are negatively impacting 
                    Climate Change?</p> 

                <p>Check out our <a href="blame.php">Who's To Blame</a> page to learn 
                    more!</p>
            </div>
        </div>
    </div>
</div>

    <footer>
        <button onclick="scrolltoTop()" id="scrolltop" class="backToTop"><i class="fas fa-angle-double-up fa_custom"></i></button>
    </footer>

    <script>
        function scrolltoTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        function toggleNav() {
            let elements = document.getElementsByClassName("item");
            for(let i = elements.length - 1; i >= 0; --i) {
                elements[i].style.display = elements[i].style.display == "block" ? elements[i].style.display = "none" : elements[i].style.display = "block";
            }
        }
    </script>
</body>

</html>