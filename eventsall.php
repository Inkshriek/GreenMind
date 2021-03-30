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
        <h1><a href="index.html">Green Mind</a></h1>
    </header>

    <nav>
        <ul>
            <li id="selected">Current Events</li>
            <li><a href="climate.html">Climate Change</a></li>
            <li><a href="blame.html">Who's To Blame</a></li>
            <li><a href="involvement.html">Get Involved</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
        <p id="login"><a href="login.html">Login</a> | <a href="signup.html">Signup</a> (while logged out)</p>
        <p id="account"><a href="account.html">Your Account</a> (while logged in)</p>
    </nav>
    
    <h2>Current Events</h2>
    <hr>

    <h3>All (based on region)</h3>
    <ul id="allnews">
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
        <li id="newsitem">
            <h3>Sample Event Title</h3>
            <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
        </li>
        <li id="newsitem">
            <h3>Sample Event Title</h3>
            <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
        </li>
    </ul>
    <a href="events.html">View Breaking</a>
    <!--This may be pagenated and sorted by how recent they are.-->

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