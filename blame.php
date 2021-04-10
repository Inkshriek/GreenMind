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
    <script src="https://kit.fontawesome.com/ccae1dd588.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- UPDATE BANNER AND NAV -->
    <div class="banner">
       <div class="banner-image"></div>
    </div>
    
    <nav>
        <ul class="container">
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="climate.php">Climate Change</a></li>
            <li class="item selected"><a href="blame.php">Who's To Blame</a></li>
            <li class="item"><a href="involvement.php">Get Involved</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <?php
                if (isset($_GET["signedup"]) && $_GET["signedup"] == true) {
                    ?><div class="message">You've successfully signed up! You may use your information now to login.</div><?php
                }

                if (isset($_SESSION["loggedin"])) {
                    if (!$_SESSION["loggedin"]) {
                        ?>
                            <li class="item button"><a href="login.php">Login</a></li>
                            <li class="item button secondary"><a href="signup.php">Sign Up</a></li>
                        <?php
                    }
                    else {
                        ?>
                            <li class="item button"><a href="account.php">Your Account</a></li>
                            <li class="item button secondary"><a href="logout.php">Logout</a></li>
                        <?php
                    }
                }
            ?>
            <li class="toggle" onclick="toggleNav()"><i class="fas fa-bars fa_custom"></i></li> 
        </ul>
    </nav>
    
    <h1 class="header">Who's To Blame</h1>

    <div class="main">
        <div class="card">
            <div class="imgBox">
                <img src="img/Greenhouse-effect.jpg" alt="Greenhouse Effect">
            </div>
            <div class="content">
                <h3 class="title">Who or what exactly is behind the significant change in our climate?</h3>

                <p class="text"> 
                    As we mentioned on our <a href="climate.php">Climate Change</a> 
                    page, this change is attributed to many different factors from the 
                    human population. A large portion of Climate Change is influenced 
                    by greenhouse gas emissions caused by us humans. (Greenhouse gas 
                    emissions are gases that are stuck inside our atmosphere that is 
                    heating our planet, similar to how greenhouses for plants 
                    function.) But, besides each of our actions, there are larger 
                    contributors to this rapid change in our environment. Some 
                    companies and industries play very large roles that are helping 
                    increase this shift in our climate at larger percentages.
                </p>
                <a href="https://www.epa.gov/ghgemissions/global-greenhouse-gas-emissions-data" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="img/city_pollution.jpg" alt="City Pollution">
            </div>
            <div class=content>
                <h3 class="title">The Industries</h3>

                <ul>
                    <li>Electricty and Heat Production</li>
                    <li>Industry</li>
                    <li>Agriculture, Forestry, and Other Land use</li>
                    <li>Transportation</li>
                    <li>Buildings</li>
                    <li>Other Energy</li>
                </ul>

                <p class="text">
                    The list above, according to <a href=epa.gov>epa.gov</a>, contains 
                    the leading industries in the world that contribute the largest 
                    percentages of greenhouse gas emissions. Each of these industries 
                    either burns fossil fuels, coal, natural gas, oil, or other substances 
                    along with releasing other gases into our atmosphere that contribute to 
                    the emissions of greenhouse gases each year.
                </p>
                <a href="https://b8f65cb373b1b7b15feb-c70d8ead6ced550b4d987d7c03fcdd1d.ssl.cf3.rackcdn.com/cms/reports/documents/000/002/327/original/Carbon-Majors-Report-2017.pdf?1499866813" class="source">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="img/oil-rig.jpg" alt="Oil Rig">
            </div>
            <div class=content>
                <h3 class="title">The Companies</h3>

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

                <p class="text">
                    Above is a list of the top ten companies in the world that 
                    contribute the most greenhouse gas emissions according to The 
                    Carbon Majors Database, a report that was published by the Carbon 
                    Disclosure Project (CDP). 
                    <br><br>
                    Want to know more and how you can help us fight climate change?
                    <br><br>
                    Check out our <a href="involvement.php">Get Involved</a> page to 
                    know more!
                </p>
                <a href="https://www.activesustainability.com/climate-change/100-companies-responsible-71-ghg-emissions/" class="source">Read More</a>
            </div>
        </div>
    </div>

    <footer>
        <button onclick="scrolltoTop()" id="scrolltop" class="backToTop"><i class="fas fa-angle-double-up fa_custom"></i></button>    
    </footer>

    <script>
        function scrolltoTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        function toggleNav() {
            let elements = document.getElementsByClassName("item");
            for(let i = elements.length - 1; i >= 0; --i) {
                elements[i].style.display = elements[i].style.display == "block" ? elements[i].style.display = "none" : elements[i].style.display = "block";
            }
        }
    </script>
</body>

</html>