<?php session_start() ?>
<!-- ========================Header============================= -->
<?php include "includes/header.php";?>

    <body>
        <section class="header">
            <nav>
                <a href="house_1.html"><img src="images/1flo.png" /></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                    <li><a href="index.html">HOME</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="search.php">SEARCH</a></li>
                        <li><a href="evacuationMap.php">EVACUATION MAP</a></li>
                        <li><a href="notifications.php">NOTIFICATIONS</a></li>
                        <li><a href="waterLevelStatus.php">WATER LEVEL STATUS</a></li>
                        <li><a href="weatherOutlook.php">WEEKLY WEATHER OUTLOOK</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>

            <div class="text-box">
                <h1>Geological Flood Prone System</h1>          
                <p>The main <?php echo $_SESSION['Username']; ?> task of geological flood prone system is to
                    identify the flood prone areas and location <br />
                    of possible areas that will be affected. </p>
                <a href="" class="mazda-btn">Visit Us To Know More</a>
            </div>
        </section>
        <!--========================== COURSE ==========================-->
        <section class="course">
            <h1>Evacuation Sites</h1>
            <p>lorem usfdghb fsiuedfyh s8udifhnb sdufyh8eud fs8edyufe dftgs</p>

            <div class="row">
                <div class="course-col">
                    <h3>Intermediate</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa. </p>
                </div>
                <div class="course-col">
                    <h3>Degree</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa. </p>
                </div>
                <div class="course-col">
                    <h3>Post Graduation</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa. </p>
                </div>
            </div>
        </section>
        <!--========================== CAMPUS ==========================-->
        <section class="campus">
            <h1>Area Status of Bulacan</h1>
            <p> the Photos indicated the places that are prone in flood during
                typhoons</p>

            <div class="row">
                <div class="campus-col">
                    <img src="images/1st.jfif" />
                    <div class="layer">
                        <h3>Affected by Dam Releases</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="images/2nd.jfif" />
                    <div class="layer">
                        <h3>Flash Floods and Landslides</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="images/3rd.jfif" />
                    <div class="layer">
                        <h3>Coastal Floodings</h3>
                    </div>
                </div>
            </div>
        </section>
        <!--========================== FACILITIES ==========================-->
        <section class="facilities">
            <h1>Different Colors</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
            <div class="row">
                <div class="facilities-col">
                    <img src="images/mazdacolor.jpg" />
                    <h3>World Class Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
                </div>
                <div class="facilities-col">
                    <img src="images/mazdacolors.jpg" />
                    <h3>Mazda 3 Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
                </div>
                <div class="facilities-col">
                    <img src="images/mazdacolorsss.jpg" />
                    <h3>Mazda Miata Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
                </div>
            </div>
        </section>
        <!--========================== TESTIMONIALS ==========================-->
        <section class="testimonial">
            <h1>What Our Customer Says</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

            <div class="row">
                <div class="testimonial-col">
                    <img src="images/hid2.png" />
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis esse tenetur eum, suscipit vero possimus
                            mollitia rem veniam recusandae, harum maiores temporibus? Nisi, </p>
                        <h3>Hadji Berkley</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="testimonial-col">
                    <img src="images/hid2.png" />
                    <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis esse tenetur eum, suscipit vero possimus
                            mollitia rem veniam recusandae, harum maiores temporibus? Nisi, </p>

                        <h3>Dwight Berkley</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--========================== CALL TO ACTION ==========================-->
        <section class="cta">
            <h1>Enroll For our Various Online Courses Anywhere From the World</h1>
            <a href="" class="hero-btn">CONTACT US</a>
        </section>
        <!--========================== FOOTER ==========================-->
        <?php include "includes/footer.php";?>

        <!--========================== JavaScript For Toggle Menu==========================-->
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu() {
                navLinks.style.right = "0";
            }
            function hideMenu() {
                navLinks.style.right = "-200px";
            }
        </script>
        <a href="#" class="to-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
    </body>
</html>

