<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Current Events</title>
    <meta name="description" content="Climate Activism and Education">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <header>
        <img src = "img/Logo.png" style="width:150px;height:150px;" alt = "Green Mind Logo"/>
        <h1><a href="index.php">Green Mind</a></h1>
    </header>

    <nav>
        <ul>
            <li id="selected">Current Events</li>
            <li><a href="climate.php">Climate Change</a></li>
            <li><a href="blame.php">Who's To Blame</a></li>
            <li><a href="involvement.php">Get Involved</a></li>
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
    
    <h2>Current Events</h2>

    <div class="panel">
        <h3>Nearby</h3>
        <ul id="breakingnews">
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
        </ul>
        <p class="morenews"><a href="eventsall.html">View All</a></p>
    </div>

    <div class="panel">
        <h3>Your Country</h3>
        <ul class="breakingnews">
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
        </ul>
        <p class="morenews"><a href="eventsall.html">View All</a></p>
    </div>
   
    <div class="panel">
        <h3>Worldwide</h3>
        <ul class="breakingnews">
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
        </ul>
        <p class="morenews"><a href="eventsall.html">View All</a></p>
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