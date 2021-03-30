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
        <p><a href="login.html">Login</a> | <a href="signup.html">Signup</a></p>
    </nav>

    <h2>Sign Up with Green Mind</h2>
    <hr>
    
    <div id="signupform">
        <input type="text" placeholder="Username" id="username">
        <input type="password" placeholder="Password" id="password">
        <input type="text" placeholder="Email Address" id="email">
        <input type="button" id="signbutton" onclick="signUp()" value="Sign Up">
    </div>
    
    <footer>
        <hr>
        <p>Prototype Developed by Noah Jervey</p>
        <p>Made for Group 3 of Web Design Workshop II</p>
    </footer>

    <script>
        function signUp() {
            //var username = document.getElementById("username").value;
            //document.cookie = "username=" + username;
            window.location.href="index.html";
        }
    </script>
</body>

</html>