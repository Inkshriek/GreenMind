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
    <!-- Testing, once fully fuctional will copy to other pages - NS
    <div class="banner-image">
        <div class="banner-text">
            <h1 class="banner-header">Green Mind</h1>
            <p>Recylcing Activism</p>
        </div>
    </div>
    -->

    <header>
        <img src="img/Logo.png" style="width:150px;height:150px;" alt="Green Mind Logo"/>
        <h1>Green Mind</h1>
    </header>

    <nav>
        <ul>
            <li><a href="events.php">Current Events</a></li>
            <li><a href="climate.php">Climate Change</a></li>
            <li><a href="blame.php">Who's To Blame</a></li>
            <li><a href="involvement.php">Get Involved</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>

        <!--Displays login/signup buttons if you're not signed in, or the account button if you are.-->
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

    <h2>Welcome to Green Mind, your resource on our changing climate.</h2>

    <!--You should probably see a preview of significant events from here.-->
    <div class="panel">
        <ul id="breakingnews">
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
            <li class="newsitem">
                <h3>Sample Event Title</h3>
                <img src="placeholder.jpg" alt="Sample Photo" width="200" height="200">
            </li>
        </ul>
        <p class="morenews"><a href="events.html">See Current Events</a></p>
    </div>

    <div class="panel">
        <p>It is often said that caring for the environment is an individual responsibility, and that we must be the ones to do it. Such may be true, but what of the ones really doing the damage? The ones seldom spoken about; the ones with power and wealth. We would like to change the discussion.</p>
        <p>And you can do your part to advocate!</p>
        <p id="takethestep"><a href="climate.html">Take The Step</a></p>
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