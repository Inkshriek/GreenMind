<?php
    include("extern/database.php");
    
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Login</title>
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
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <li class="item button"><a href="login.php">Login</a></li>
            <li class="item button secondary"><a href="signup.php">Sign Up</a></li>
            <li class="toggle"><i class="fas fa-bars fa_custom"></i></li> 
            <!-- ^Need to add event listener for menu toggle, should assign all 
                list elements with the class "active" -->
        </ul>
        
        <!-- <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="climate.php">Climate Change</a></li>
            <li><a href="blame.php">Who's To Blame</a></li>
            <li><a href="involvement.php">Get Involved</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
        <p id="login"><a href="login.php">Login</a> | <a href="signup.php">Signup</a></p> -->
    </nav>
    
    <form class="formBox" id="loginform" action="extern/login.php" method="post">
        <h1 class="header">Login</h1>
        <input type="text" name="user" placeholder="Username" id="usernamebox" maxlength="25" required>
        <input type="password" name="pass" placeholder="Password" id="passwordbox" maxlength="25" required>
        <input type="submit" id="loginbutton" value="Login">
        <?php
            if (isset($_GET["notif"])) {
                if ($_GET["notif"] == 1) {
                    ?><div class="message">Your password is incorrect! Please try again.</div><?php
                }
                else if ($_GET["notif"] == 2) {
                    ?><div class="message">This username doesn't exist! Please try a different one, or signup if you haven't.</div><?php
                }
                else if ($_GET["notif"] == 3) {
                    ?><div class="message">We encountered a problem fetching your information. Please try again later.</div><?php
                }
            }
        ?>
    </form>
    
    <footer>
        <p>Prototype Developed by Noah Jervey</p>
        <p>Made for Group 3 of Web Design Workshop II</p>
    </footer>

    <script>
    </script>
</body>

</html>