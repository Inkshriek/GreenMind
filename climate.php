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
</head>

<body>
    <!-- UPDATE BANNER AND NAV -->
    <div class="banner">
       <div class="banner-image"></div>
    </div>

    <nav>
        <ul class="container">
            <li class="item"><a href="events.php">Current Events</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item" id="selected"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
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

    <h1>Climate Change</h1>

    <div class="wrapper">
        <div class="main">
            <div class="card">
                <div class=imgBox>
                    <img src="placeholder.jpg" alt="Placeholder Diagram">
                </div>
                <div class="content">
                    <h3>What is Climate Change?</h3>
            
                    <p>Climate Change is concerning weather during a particular time of year
                        in a specific location that changes from what the weather is 
                        normally like in that place.</p> 

                    <p>However, Climate Change also is concerning the weather around the 
                        world and how the earth’s weather patterns change around the globe 
                        as a whole.</p>

                    <p>Climate Change is not a typically fast occurrence like how it rains 
                        in the afternoon for a few hours or less. Climate Change is an 
                        alteration in weather that occurs over long periods, like years at 
                        a time, to see or notice any significant differences within seasonal
                        weather patterns.</p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h3>How did Climate Change Start?</h3>
            
                    <p>Climate Change has always been in existence. Climate alters on its 
                        own by fluctuating based on natural occurrences. An example of a 
                        natural occurrence that could impact climate change is where the 
                        earth sits in relation to the sun. The earth may not sit in the 
                        same place every year on the same day which would cause a change in 
                        the earth’s climate compared to previous weather. </p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h3>What is so bad About Climate Change?</h3>
        
                    <p>Climate Change is not bad; however, the problem currently with 
                        Climate Change is the earth’s climate is changing drastically in 
                        shorter periods than usual. For example, rather than taking 
                        multiple years to see a gradual change in the weather, there is a 
                        jump in the earth’s climate by changing at greater amounts each 
                        year. This large change in the climate is due to the impact human’s 
                        everyday actions take on our earth’s climate. These actions can 
                        alter the course of this change on our earth. Since billions of 
                        humans inhabit this planet, something as common as driving a car 
                        that takes gas causes some sort of change to our climate due to the 
                        pollution from the burning of fuel. There are many other 
                        contributions that humans play a large role in that add to the 
                        rapid shift of Climate Change besides car pollution.</p>  

                    <p>Want to know more about the influences that are negatively impacting 
                        Climate Change?</p> 

                    <p>Check out our <a href="blame.php">Who's To Blame</a> page to learn 
                        more!</p>
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