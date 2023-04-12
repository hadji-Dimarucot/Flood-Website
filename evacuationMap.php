<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Geological Flood Prone</title>
        <link rel="stylesheet" href="Design.css" />
        <!--FONT-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap" />
        <!--ICON-->
        <link rel="icon" href="images/1flo.png" type="image/x-icon" />
        <!--Apps icon-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        <section class="sub-header">
            <nav>
                <a href="house_1.html"><img src="images/1flo.png" /></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                    <li><a href="index.php">HOME</a></li>
                        <li><a href="search.php">SEARCH</a></li>
                        <li><a href="evacuationMap.php">EVACUATION MAP</a></li>
                        <li><a href="waterLevelStatus.php">WATER LEVEL STATUS</a></li>
                        <li><a href="weatherOutlook.php">WEEKLY WEATHER OUTLOOK</a></li>
                        <li><a href="notifications.php">NOTIFICATIONS</a></li>
                        <li><a href="Extension/logout.php">LOGOUT</a></li>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Evacuation Maps</h1>
        </section>
        <!-----------About us Content----------->
        <section class="about-us">
            <div class="row">
                <div class="about-col">
                    <h1>We are the World's Largest University</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptates libero quo repudiandae,
                        quas ipsam odit laboriosam dolorem nisi saepe sunt nesciunt nulla, optio a illo voluptate,
                        commodi illum praesentium. Error non atque, itaque pariatur tempore fuga nam, odit cumque
                        tempora consequatur doloremque libero assumenda aspernatur sapiente, ut sint culpa!
                    </p>
                    <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
                </div>
                <div class="about-col">
                    <img src="images/anout.jpg" alt="" />
                </div>
            </div>
        </section>
        <!-- ========================footer============================= -->
        <?php include "includes/footer.php";?>


        <!---------JavaScript For Toggle Menu------------>
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu() {
                navLinks.style.right = "0";
            }
            function hideMenu() {
                navLinks.style.right = "-200px";
            }
        </script>
    </body>
</html>
