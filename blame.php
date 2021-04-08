<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Mind - Who's To Blame</title>
    <meta name="description" content="Climate Activism and Education">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <!-- UPDATE BANNER AND NAV -->
    <div class="banner">
       <div class="banner-image"></div>
    </div>
    
    <nav>
        <ul class="container">
            <li class="item"><a href="events.php">Current Events</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item" id="selected"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <li class="item button"><a href="">Login</a></li>
            <li class="item button secondary"><a href="">Sign Up</a></li>
            <li class="toggle"><i class="fas fa-bars fa_custom"></i></li> 
            <!-- ^Need to add event listener for menu toggle, should assign all 
                list elements with the class "active" -->
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
        ?> <!-- If possible, can you add these^ to the nav UL? I want them to be 
            included but I also dont want to deconstruct your code. TY - NS -->
    </nav>
    
    <h1>Who's To Blame</h1>

    <div class="wrapper">
        <div class="main">
            <div class="card">
                <div class="content">
                    <h3>Who or what exactly is behind the significant change in our climate?</h3>
    
                    <p> As we mentioned on our <a href="climate.php">Climate Change</a> 
                        page, this change is attributed to many different factors from the 
                        human population. A large portion of Climate Change is influenced 
                        by greenhouse gas emissions caused by us humans. (Greenhouse gas 
                        emissions are gases that are stuck inside our atmosphere that is 
                        heating our planet, similar to how greenhouses for plants 
                        function.) But, besides each of our actions, there are larger 
                        contributors to this rapid change in our environment. Some 
                        companies and industries play very large roles that are helping 
                        increase this shift in our climate at larger percentages.</p>
                </div>
            </div>
            <div class="card">
                <div class=content>
                    <h3>The Industries</h3>

                    <ul>
                        <li>Electricty and Heat Production</li>
                        <li>Industry</li>
                        <li>Agriculture, Forestry, and Other Land use</li>
                        <li>Transportation</li>
                        <li>Buildings</li>
                        <li>Other Energy</li>
                    </ul>

                    <p>The list above, according to <a href=epa.gov>epa.gov</a>, contains 
                    the leading industries in the world that contribute the largest 
                    percentages of greenhouse gas emissions. Each of these industries 
                    either burns fossil fuels, coal, natural gas, oil, or other substances 
                    along with releasing other gases into our atmosphere that contribute to 
                    the emissions of greenhouse gases each year.</p>
                </div>
            </div>
            <div class="card">
                <div class=content>
                    <h3>The Companies</h3>

                    <ul>
                        <li>China (Coal)</li>
                        <li>Saudi Arabian Oil Company (Aramco)</li>
                        <li>Gazprom OAO</li>
                        <li>National Iranian Oil Co</li>
                        <li>ExxonMobil Corp</li>
                        <li>Coal India</li>
                        <li>Petroleos Mexicanos (Pemex)</li>
                        <li>Russia (Coal)</li>
                        <li>Royal Dutch Shell PLC</li>
                        <li>China National Petroleum Corp (CNPC)</li>
                    </ul>

                    <p>Above is a list of the top ten companies in the world that 
                        contribute the most greenhouse gas emissions according to The 
                        Carbon Majors Database, a report that was published by the Carbon 
                        Disclosure Project (CDP). </p>

                    <p>Want to know more and how you can help us fight climate change?</p> 

                    <p>Check out our <a href="involvement.php">Get Involved</a> page to 
                    know more!</p>
                </div>
            </div>
        </div>
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