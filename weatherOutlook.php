<!-- ========================Header============================= -->
<?php include "includes/header.php";?>
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
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Weekly Weather Outlook</h1>
        </section>

        <!-----------weather Content----------->
        <section class="weather">
            <h1>Cars We Offer</h1>
            <p>lorem usfdghb fsiuedfyh s8udifhnb sdufyh8eud fs8edyufe dftgs</p>

            <div class="row">
                <div class="weather-col">
                    <h3>Intermediate</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum
                        expedita sequi, repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid
                        voluptas pariatur libero est doloribus ipsa.
                    </p>
                </div>
                <div class="weather-col">
                    <h3>Degree</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum
                        expedita sequi, repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid
                        voluptas pariatur libero est doloribus ipsa.
                    </p>
                </div>
                <div class="weather-col">
                    <h3>Post Graduation</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum
                        expedita sequi, repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid
                        voluptas pariatur libero est doloribus ipsa.
                    </p>
                </div>
            </div>
        </section>
        <section class="weatherfacilities">
            <h1>Different Colors</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
            <div class="row">
                <div class="weatherfacilities-col">
                    <img src="images/mazdacolor.jpg" />
                    <h3>World Class Colors</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit atque aspernatur autem magnam
                    </p>
                </div>
                <div class="weatherfacilities-col">
                    <img src="images/mazdacolors.jpg" />
                    <h3>Mazda 3 Colors</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit atque aspernatur autem magnam
                    </p>
                </div>
                <div class="weatherfacilities-col">
                    <img src="images/mazdacolorsss.jpg" />
                    <h3>Mazda Miata Colors</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit atque aspernatur autem magnam
                    </p>
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
