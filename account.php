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
    <script src="https://kit.fontawesome.com/ccae1dd588.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="banner">
       <div class="banner-image"></div>
    </div>

    <nav>
        <ul class="container">
            <li class="item selected"><a href="index.php">Home</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <li class="item button"><a href="account.php">Your Account</a></li>
            <li class="item button secondary"><a href="logout.php">Logout</a></li>
            <li class="toggle" onclick="toggleNav()"><i class="fas fa-bars fa_custom"></i></li> 
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

    <div class="main">
        <div id="personalizationform">

            <form class="accountBox" action="extern/account.php" method="post">
                <p id="usernamedisplay" class="text"><b>Username:</b> <?php if (isset($_SESSION["user"])) { echo $_SESSION["user"]; } ?></p><br>
                <p id="emaildisplay" class="text"><b>Email:</b> <?php if (isset($_SESSION["email"])) { echo $_SESSION["email"]; } ?></p><br>

                <h3>Personalization</h3>
                <input type="text" name="user" placeholder="Username" id="usersavebox" maxlength="25" <?php if (isset($_SESSION["user"])) { echo "value=". $_SESSION['user'] .""; } ?> required>
                <input type="text" name="location" placeholder="Your Country" maxlength="25" id="locationbox" <?php if (isset($_SESSION["location"])) { echo "value=". $_SESSION['location'] .""; } ?>>
                <input type="text" name="email" placeholder="Email Address" maxlength="50" id="emailsavebox" <?php if (isset($_SESSION["email"])) { echo "value=". $_SESSION['email'] .""; } ?> required>
                <input type="checkbox" name="emailupdates" id="emailupdatesbox" <?php if (isset($_SESSION["emailupdates"]) && $_SESSION["emailupdates"] == 1) { echo "checked"; } ?>>
                <label for="emailupdatesbox"> Allow Weekly Email Updates?</label>
                <input type="submit" id="savebutton" value="Save">

                <?php
                    if (isset($_GET["notif"])) {
                        if ($_GET["notif"] == 1) {
                            ?><div style="text-align:center;">Your account details were successfully saved!</div><?php
                        }
                        else if ($_GET["notif"] == 2) {
                            ?><div style="text-align:center;">Please double-check that your email is in the correct format, and that your username is no less than 6 characters long.</div><?php
                        }
                        else if ($_GET["notif"] == 3) {
                            ?><div style="text-align:center;">We encountered a problem saving your information. Please try again later.</div><?php
                        }
                    }
                ?>
            </form>
        </div>
    </div>

    <script>
        function toggleNav() {
            let elements = document.getElementsByClassName("item");
            for(let i = elements.length - 1; i >= 0; --i) {
                elements[i].style.display = elements[i].style.display == "block" ? elements[i].style.display = "none" : elements[i].style.display = "block";
            }
        }
    </script>
</body>

</html>