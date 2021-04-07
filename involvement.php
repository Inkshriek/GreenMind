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
</head>

<body>
    <!-- UPDATE BANNER AND NAV -->

    <header>
        <img src = "img/Logo.png" style="width:150px;height:150px;" alt = "Green Mind Logo"/>
        <h1><a href="index.php">Green Mind</a></h1>
    </header>

    <nav>
        <ul>
            <li><a href="events.php">Current Events</a></li>
            <li><a href="climate.php">Climate Change</a></li>
            <li><a href="blame.php">Who's To Blame</a></li>
            <li id="selected">Get Involved</li>
            <li><a href="about.php">About Us</a></li>
        </ul>
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
        ?>
    </nav>
    
    <h2>Get Involved</h2>

    <div class="panel">
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

        <div class="recyclingExamples">
            <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200">
            <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200"> 
            <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200">
        </div>
        <p>(This'll have some pictures of waste products, what to recycle, and what symbols to look for.)</p>
        
        <p>Note: Other items such as plastic bags and electronics can be 
            recycled at locations near you. Plastic bags can typically be 
            dropped off to be recycled at grocery stores in designated bins. 
            While unwanted electronics such as laptops, phones, and other 
            e-waste can be recycled at electronic stores and other locations.</p>
        <p>If you are questioning the ability to recycle or how to dispose 
            of an item, read our <a href=#resources>resources</a> section!</p>
    </div>

    <div class="panel">
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

    <div class="panel">
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

    <div class="panel">
        <h3>Where To Go</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et metus non eros vulputate cursus vitae id metus. Etiam vitae est varius, fringilla sapien a, volutpat urna. Nunc fringilla nulla vitae tristique scelerisque. Cras aliquet tortor vel enim lobortis, eget fringilla tellus consequat. Aenean eleifend feugiat nisl. Vestibulum aliquam elit eu elementum dictum. Aliquam lacinia accumsan pulvinar.</p>
        <h4>List of Places</h4>
        <ul>
            <li>
                <p>Type of Place 1</p>
                <p>Description</p>
            </li>
            <li>
                <p>Type of Place 2</p>
                <p>Description</p>
            </li>
            <li>
                <p>Type of Place 3</p>
                <p>Description</p>
            </li>
            <li>
                <p>Type of Place 4</p>
                <p>Description</p>
            </li>
        </ul>
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