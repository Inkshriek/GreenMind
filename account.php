<?php
    include("extern/database.php");
    
    if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Your Account</title>
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
        <p id="account"><a href="account.html">Your Account</a></p>
    </nav>

    <h2>Account Details</h2>

    <div class="panel">
        <p id="usernamedisplay">Username: John Doe</p>
        <p id="emaildisplay">Email: johndoe@gmail.com</p>

        <h3>Personalization</h3>
        <div id="personalizationform">
            <input type="text" placeholder="Your Country" id="locationbox"><br>
            <input type="checkbox" id="emailupdatesbox">
            <label for="emailupdatesbox"> Allow Weekly Email Updates?</label><br>
        
            <br>
            <input type="button" id="savebutton" onclick="" value="Save">
        </div>
    </div>

    <footer>
        <p>Prototype Developed by Noah Jervey</p>
        <p>Made for Group 3 of Web Design Workshop II</p>
        <button onclick="scrolltoTop()" id="scrolltop">Go To Top</button>
    </footer>

    <script>
    </script>
</body>

</html>