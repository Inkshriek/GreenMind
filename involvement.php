<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Get Involved</title>
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
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item selected"><a href="involvement.php">Get Involved</a></li>
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
    
    <h1 class="header">Get Involved!</h1>

    <div class="main">
        <div class="card">
                <div class="imgBox">
                    <img src="img/newspapers.jpg" alt="Newspapers">
                </div>
                <div class="content">
                    <h3 class="title">Recycling & Waste</h3>
                    <p class="text">
                        Recycling and waste management will have some differences in what is acceptable for pickup depending upon where you live. Below is some basic information regarding recycling and waste disposal.
                        <br><br>
                        Typical recyclables picked up from your home include:
                        <ul class="text">
                            <li>Aluminum and Steel Cans</li>
                            <li>Plastic Bottles and Jugs</li>
                            <li>Paper and Cardboard</li>
                        </ul>
                    </p>
                    <a href="" class="source">Read More</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="img/recycle_bin.jpg" alt="Recycle Bin">
            </div>
            <div class="content">
                <h3 class="title">Recycling Cont.</h3>
                <p class="text">
                    Note: Other items such as plastic bags and electronics can be at locations near you. Plastic bags can typically be dropped off to be recycled at grocery stores in designated bins. While unwanted electronics such as laptops, phones, and other e-waste can be recycled at electronic stores and other locations.
                    <br><br>
                    If you are questioning the ability to recycle or how to dispose of an item, read our <a href=#resources>resources</a> section!
                </p>
                <a href="" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="img/one-world.jpg" alt="World Sign">
            </div>
            <div class="content">
                <h3 class="title">More Ways to Get Involved</h3>
                <p class="text">
                    <ul>
                        <li>Use eco-friendly forms of transportation.</li>
                        <li>Watch your consumption of new items; meaning use second hand or 
                            borrow when able to.</li>
                        <li>Watch your food waste by purchasing food locally grown rather 
                            than imported.</li>
                        <li>Watch your energy consumption by limiting or reducing the 
                            amount of energy you use each day.</li>
                        <li>Use more renewable energy.</li>
                    </ul>
                </p>
                <a href="" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="img/planet-over-profit.jpg" alt="Sign">
            </div>
            <div class="content">
                <h3 class="title">Resources</h3>
                <p class="text">
                    Unsure how to dispose of your waste? Check out your county’s website, they will display information about what is acceptable for recycling, garbage, and how to properly dispose of hazardous wastes. Your county’s website will also explain what is labeled as hazardous waste in your area as well.
                    <br><br>
                    Here is a list of some stores that collect electronic waste:
                    <ul>
                        <li>HP</li>
                        <li>Xerox</li>
                        <li>Best Buy</li>
                        <li>Staples</li>
                        <li>Sprint</li>
                        <li>LG</li>
                        <li>Samsung</li>
                        <li>T-Mobile</li>
                        <li>Dell</li>
                        <li>Vizio</li>
                        <li>Sony</li>
                        <li>TCL</li>
                        <li>Target and more!</li>
                    </ul>
                    <br><br>
                    <p class="text">Here is a list of stores that collect plastic bags and other items for recycling:</p>
                    <ul>
                        <li>Walmart</li>
                        <li>Target</li>
                        <li>Kroger</li>
                        <li>Safeway</li>
                        <li>Publix and more!</li>
                    </ul>
                    <p class="text">Check out our social media pages to stay connected and involved with upcoming events!</p>
                </p>
                <a href="" class="source">Read More</a>
            </div>
        </div>
    </div>

    <footer>
        <p>Prototype Developed by Noah Jervey</p>
        <p>Made for Group 3 of Web Design Workshop II</p>
        <button onclick="scrolltoTop()" id="scrolltop" class="backToTop"><i class="fas fa-angle-double-up fa_custom"></i></button>    </footer>

    <script>
        function scrolltoTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>