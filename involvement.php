<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Get Involved</title>
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
            <li id="selected">Get Involved</li>
            <li><a href="about.php">About Us</a></li>
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
    
    <h2>Get Involved</h2>

    <div class="panel">
        <h3>Recycling & Waste</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et metus non eros vulputate cursus vitae id metus. Etiam vitae est varius, fringilla sapien a, volutpat urna. Nunc fringilla nulla vitae tristique scelerisque. Cras aliquet tortor vel enim lobortis, eget fringilla tellus consequat. Aenean eleifend feugiat nisl. Vestibulum aliquam elit eu elementum dictum. Aliquam lacinia accumsan pulvinar.</p>
        <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200">
        <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200">
        <img src="placeholder.jpg" alt="Placeholder Diagram" width="200" height="200">
        <p>(This'll have some pictures of waste products, what to recycle, and what symbols to look for.)</p>
    </div>

    <div class="panel">
        <h3>Protesting</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et metus non eros vulputate cursus vitae id metus. Etiam vitae est varius, fringilla sapien a, volutpat urna. Nunc fringilla nulla vitae tristique scelerisque. Cras aliquet tortor vel enim lobortis, eget fringilla tellus consequat. Aenean eleifend feugiat nisl. Vestibulum aliquam elit eu elementum dictum. Aliquam lacinia accumsan pulvinar.</p>
        <p>Fusce venenatis non arcu non congue. Donec vel ex felis. Donec vehicula felis elit, vitae aliquam neque vehicula in. Donec dapibus massa elementum, sodales justo id, vulputate ante. Integer at elit ac leo tincidunt mollis nec et leo. Duis mollis fringilla dictum. Quisque quis ornare odio, malesuada fringilla arcu. Pellentesque id pharetra turpis, quis euismod orci. Ut egestas, nulla sit amet varius dictum, felis turpis pellentesque sapien, aliquam vestibulum nisl lorem quis augue. Sed non risus ante. Maecenas vestibulum lobortis nisi, sed rutrum risus laoreet eget.</p>
    </div>

    <div class="panel">
        <h3>Regulations</h3>
        <p>Praesent mattis lobortis leo eu tristique. Ut ultricies, justo vel aliquam consequat, mauris risus feugiat diam, sit amet semper nisi arcu a urna. Maecenas a tellus ac diam ullamcorper interdum a vulputate risus. Sed ornare neque tellus, vitae posuere enim bibendum non. Morbi dapibus, sapien ac convallis bibendum, dolor risus porttitor nulla, mattis porta dolor libero non velit. Sed quis congue lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vulputate luctus sapien ac condimentum. Phasellus justo elit, pharetra et urna sit amet, accumsan accumsan tortor. Morbi auctor ipsum quis sapien suscipit, vel iaculis magna laoreet. Maecenas lacinia sapien elit, vitae semper nisl ultricies eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi luctus vehicula placerat. Vivamus quis odio vulputate, consectetur elit ut, maximus diam. Integer magna lacus, ultrices eu pharetra sed, bibendum pretium nulla.</p>
    </div>

    <div class="panel">
        <h3>Where To Go</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et metus non eros vulputate cursus vitae id metus. Etiam vitae est varius, fringilla sapien a, volutpat urna. Nunc fringilla nulla vitae tristique scelerisque. Cras aliquet tortor vel enim lobortis, eget fringilla tellus consequat. Aenean eleifend feugiat nisl. Vestibulum aliquam elit eu elementum dictum. Aliquam lacinia accumsan pulvinar.</p>
        <h4>List of Places</h4>
        <ul>
            <li>
                <p>Type of Place 1</p>
                <p>Description</p>
            </li>
            <li>
                <p>Type of Place 2</p>
                <p>Description</p>
            </li>
            <li>
                <p>Type of Place 3</p>
                <p>Description</p>
            </li>
            <li>
                <p>Type of Place 4</p>
                <p>Description</p>
            </li>
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