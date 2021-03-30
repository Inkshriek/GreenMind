<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - About Us</title>
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
            <li id="selected">About Us</li>
        </ul>
        <p id="login"><a href="login.html">Login</a> | <a href="signup.html">Signup</a> (while logged out)</p>
        <p id="account"><a href="account.html">Your Account</a> (while logged in)</p>
    </nav>

    <h2>About Us</h2>
    <hr>

    <p>Lorem ipsum shit and giggles</p>

    <h3>Contact</h3>
    <div>
        (407) 000-0000<br>
        someemailaddress@gmail.com<br>
    </div>

    <h3>Further Reading</h3>
    <ul>
        <li><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/">Sample Resource</a></li>
        <li><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/">Sample Resource</a></li>
        <li><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/">Sample Resource</a></li>
    </ul>

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