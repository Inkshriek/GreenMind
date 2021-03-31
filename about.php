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

    <h2>About Us</h2>

    <div class="panel">
        <p>stuff about us idk</p>
    </div>

    <div class="panel">
        <h3>Contact</h3>
        <p id="aboutphone">(407) 000-0000</p>
        <p id="aboutemail">someemailaddress@gmail.com</p>
    </div>

    <div class="panel">
        <h3>Further Reading</h3>
        <ul id="furtherlinks">
            <li><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/">Sample Resource</a></li>
            <li><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/">Sample Resource</a></li>
            <li><a href="https://www.akc.org/dog-breeds/pembroke-welsh-corgi/">Sample Resource</a></li>
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