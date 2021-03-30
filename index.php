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
</head>

<body>
    <header>
        <img src = "img/Logo.png" style="width:150px;height:150px;" alt = "Green Mind Logo"/>
        <h1><a href="index.html">Green Mind</a></h1>
    </header>

    <nav>
        <ul>
            <li><a href="events.html">Current Events</a></li>
            <li><a href="climate.html">Climate Change</a></li>
            <li><a href="blame.html">Who's To Blame</a></li>
            <li><a href="involvement.html">Get Involved</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
        <p id="login"><a href="login.html">Login</a> | <a href="signup.html">Signup</a> (while logged out)</p>
        <p id="account"><a href="account.html">Your Account</a> (while logged in)</p>
    </nav>

    <h2>Welcome to Green Mind, your resource on our changing climate.</h2>
    <hr>
    
    <!--You should probably see a preview of current events from here and some background on what this is.-->
    <ul id="breakingnews">
        <li id="newsitem">
            <h3>Sample Event Title</h3>
            <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
        </li>
        <li id="newsitem">
            <h3>Sample Event Title</h3>
            <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
        </li>
        <li id="newsitem">
            <h3>Sample Event Title</h3>
            <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
        </li>
    </ul>
    <p><a href="events.html">See Current Events</a></p>

    <hr>
    <p>It is often said that caring for the environment is an individual responsibility, and that we must be the ones to do it. Such may be true, but what of the ones really doing the damage? The ones seldom spoken about; the ones with power and wealth. We would like to change the discussion.</p>
    <p>And you can do your part to advocate!</p>
    <p><a href="climate.html">Take The Step</a></p>
    
    <footer>
        <hr>
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