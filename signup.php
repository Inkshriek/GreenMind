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
</head>

<body>
    <header>
        <img src = "img/Logo.png" style="width:150px;height:150px;" alt = "Green Mind Logo"/>
        <h1><a href="index.php">Green Mind</a></h1>
    </header>

    <nav>
        <ul>
            <li><a href="events.php">Current Events</a></li>
            <li><a href="climate.php">Climate Change</a></li>
            <li><a href="blame.php">Who's To Blame</a></li>
            <li><a href="involvement.php">Get Involved</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
        <p id="login"><a href="login.php">Login</a> | <a href="signup.php">Signup</a></p>
    </nav>

    <h2>Sign Up with Green Mind</h2>
    
    <form id="signupform" action="extern/signup.php" method="post">
        <input type="text" name="user" placeholder="Username" id="usernamebox" maxlength="25" required>
        <input type="password" name="pass" placeholder="Password" id="passwordbox" maxlength="25" required>
        <input type="text" name="email" placeholder="Email Address" id="emailbox" maxlength="50" required>
        <input type="submit" id="signbutton" value="Sign Up">
        <?php
            if (isset($_GET["notif"])) {
                if ($_GET["notif"] == 1) {
                    ?><div class="message">We encountered a problem during your signup process. Please try again later.</div><?php
                }
                else if ($_GET["notif"] == 2) {
                    ?><div class="message">This username already exists. Please try a different one.</div><?php
                }
                else if ($_GET["notif"] == 3) {
                    ?><div class="message">Please make sure your email is in the correct format, and that your username and password are no less than 6 characters long.</div><?php
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