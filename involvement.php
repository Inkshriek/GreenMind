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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item" id="selected"><a href="involvement.php">Get Involved</a></li>
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
    
    <h1>Get Involved</h1>
    
    <div class="wrapper">
        <div class="main">
            <div class="card">
                <div class="content">
                    <h3>Recycling & Waste</h3>

                    <p>Recycling and waste management will have some differences in what is 
                        acceptable for pickup depending upon where you live. Below is some 
                        basic information regarding recycling and waste disposal.</p>

                    <p>Typical recyclables picked up from your home include:</p>
                    <ul>
                        <li>Aluminum and Steel Cans</li>
                        <li>Plastic Bottles and Jugs</li>
                        <li>Paper and Cardboard</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200">
                    <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200"> 
                    <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200">
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <p>Note: Other items such as plastic bags and electronics can be 
                        at locations near you. Plastic bags can typically be 
                        dropped off to be recycled at grocery stores in designated bins. 
                        While unwanted electronics such as laptops, phones, and other 
                        e-waste can be recycled at electronic stores and other locations.</p>
                    <p>If you are questioning the ability to recycle or how to dispose 
                        of an item, read our <a href=#resources>resources</a> section!</p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h3>More Ways to Get Involved</h3>
        
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
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h3>Resources</h3>
        
                    <p>Unsure how to dispose of your waste? Check out your county’s website,
                        they will display information about what is acceptable for 
                        recycling, garbage, and how to properly dispose of hazardous wastes. 
                        Your county’s website will also explain what is labeled as hazardous 
                        waste in your area as well.</p>

                    <p>Here is a list of some stores that collect electronic waste:</p>
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

                    <p>Here is a list of stores that collect plastic bags and other items 
                        for recycling:</p>
                    <ul>
                        <li>Walmart</li>
                        <li>Target</li>
                        <li>Kroger</li>
                        <li>Safeway</li>
                        <li>Publix and more!</li>
                    </ul>

                    <p>Check out our social media pages to stay connected and involved with 
                        upcoming events!</p>
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