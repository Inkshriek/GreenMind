<?php
    include("extern/database.php");
    
    // if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    //     header("Location: index.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Your Account</title>
    <meta name="description" content="Climate Activism and Education">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://kit.fontawesome.com/ccae1dd588.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="banner">
       <div class="banner-image"></div>
    </div>

    <nav>
        <ul class="container">
            <li class="item" id="selected"><a href="index.php">Home</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <li class="item button"><a href="account.php">Your Account</a></li>
            <li class="item button secondary"><a href="logout.php">Logout</a></li>
            <li class="toggle"><i class="fas fa-bars fa_custom"></i></li> 
            <!-- ^Need to add event listener for menu toggle, should assign all 
                list elements with the class "active" -->
        </ul>
    
        <!-- <ul>
            <li><a href="events.html">Current Events</a></li>
            <li><a href="climate.html">Climate Change</a></li>
            <li><a href="blame.html">Who's To Blame</a></li>
            <li><a href="involvement.html">Get Involved</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
        <p id="account"><a href="account.html">Your Account</a></p> -->
    </nav>

    <h1 class="header">Account Details</h1>

    <div class="card">
        <p id="usernamedisplay" class="text">Username: <?php if (isset($_SESSION["user"])) { echo $_SESSION["user"]; } ?></p>
        <p id="emaildisplay" class="text">Email: <?php if (isset($_SESSION["email"])) { echo $_SESSION["email"]; } ?></p>

        <h3>Personalization</h3>
        <form id="personalizationform" class="accountBox" action="extern/account.php" method="post">
            <input type="text" name="user" placeholder="Username" id="usersavebox" maxlength="25" <?php if (isset($_SESSION["user"])) { echo "value=". $_SESSION['user'] .""; } ?> required>
            <input type="text" name="location" placeholder="Your Country" maxlength="25" id="locationbox" <?php if (isset($_SESSION["location"])) { echo "value=". $_SESSION['location'] .""; } ?>>
            <input type="text" name="email" placeholder="Email Address" maxlength="50" id="emailsavebox" <?php if (isset($_SESSION["email"])) { echo "value=". $_SESSION['email'] .""; } ?> required>
            <input type="checkbox" name="emailupdates" id="emailupdatesbox" <?php if (isset($_SESSION["emailupdates"]) && $_SESSION["emailupdates"] == 1) { echo "checked"; } ?>>
            <label for="emailupdatesbox"> Allow Weekly Email Updates?</label>
            <input type="submit" id="savebutton" value="Save">

            <?php
                if (isset($_GET["notif"])) {
                    if ($_GET["notif"] == 1) {
                        ?><div class="message">Your account details were successfully saved!</div><?php
                    }
                    else if ($_GET["notif"] == 2) {
                        ?><div class="message">Please double-check that your email is in the correct format, and that your username is no less than 6 characters long.</div><?php
                    }
                    else if ($_GET["notif"] == 3) {
                        ?><div class="message">We encountered a problem saving your information. Please try again later.</div><?php
                    }
                }
            ?>
        </form>
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