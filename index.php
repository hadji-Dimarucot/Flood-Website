<?php session_start() ?>
<?php
$con = mysqli_connect('localhost','root','','floodprone');
   $stmt = "select * from feedback order by simula desc limit 4 "; //order by simula desc limit 4
  $userins = $con->query($stmt);
  ?>
<!-- ========================Header============================= -->
<?php include "includes/header.php";?>

    <body>
    <script src="Javascript/javas.js"></script>
   
        <section class="header">
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

            <div class="text-box">
        
                <h1>Geological Flood Prone System</h1>          
                <p>
                    Hi <?php echo $_SESSION['Username'];?>!
                     we are going to Update you as soon as possible 
                    on what is happening  <br />on the baranggay of <?php echo $_SESSION['Baranggay'];?>, 
                     we will asure you that in time of<br /> calamities we will keep in touch with you and your family.
                </p>
                <a href="" class="mazda-btn">Visit Us To Know More</a>
            </div>
        </section>
        <!--========================== COURSE ==========================-->
        <section class="home">
            <h1>Evacuation Sites</h1>
            <p>lorem usfdghb fsiuedfyh s8udifhnb sdufyh8eud fs8edyufe dftgs</p>

            <div class="row col-lg-8">
                <div class="home-col">
                    <h3>Intermediate</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa.</p>
                </div>
                <div class="home-col">
                    <h3>Degree</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa.</p>
                </div>
                <div class="home-col">
                    <h3>Post Graduation</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa.</p>
                </div>
            </div>
        </section>
        <!--========================== CAMPUS ==========================-->
        <section class="campus">
            <h1>Area Status of Bulacan</h1>
            <p>the Photos indicated the places that are prone in flood during typhoons</p>

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
        <section class="homefacilities">
            <h1>Different Colors</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis? </p>
            <div class="row">
                <div class="home-col">
                    <img src="images/mazdacolor.jpg" />
                    <h3>World Class Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis? </p>
                </div>
                <div class="home-col">
                    <img src="images/mazdacolors.jpg" />
                    <h3>Mazda 3 Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis? </p>
                </div>
                <div class="home-col">
                    <img src="images/mazdacolorsss.jpg" />
                    <h3>Mazda Miata Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis? </p>
                </div>
            </div>
        </section>
        <!--========================== TESTIMONIALS ==========================-->
        <section class="testimonial">
            <h1>What Our Customer Says</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

            <div class="rows">
                <?php while($inserted = mysqli_fetch_assoc($userins)){ ?>
                    <div class="testimonial-col">
                        <img src="images/pips2.jpg" />
                        <div>
                        <h3><?php echo $inserted['name'];?></h3>

                        <?php if($inserted['star'] == 1){ ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        <?php }elseif($inserted['star'] == 1.5){ ?>
                            
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        <?php }elseif($inserted['star'] == 2){ ?>
                            
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        <?php }elseif($inserted['star'] == 2.5){ ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        <?php }elseif($inserted['star'] == 3){ ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        <?php }elseif($inserted['star'] == 3.5){ ?>
                            
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        <?php }elseif($inserted['star'] == 4){ ?>
                            
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        <?php }elseif($inserted['star'] == 4.5){ ?>          
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        <?php }elseif($inserted['star'] == 5){ ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        <?php };?>
                            <p><?php echo $inserted['comment'];?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br>
            <a class="seeReviews" href="fullfeedback.php">See All Reviews</a>
        </section>
        <!--========================== CALL TO ACTION ==========================-->
        <section class="cta">
            <form action="./Extension/feedback.php" method="post" >
                <div class>
                    <p>
                        Add Feedback
                        <select class="fa" type="text" name="star" value="Star" required>

                            <option value="1" class="fa fa-star">&#xf005; &#xf006; &#xf006; &#xf006; &#xf006;  </option>
                            <option value="1.5" class="fa fa-star-o">&#xf005; &#xf123; &#xf006; &#xf006; &#xf006;  </option>
                            <option value="2" class="fa fa-star">&#xf005; &#xf005; &#xf006; &#xf006; &#xf006;  </option>
                            <option value="2.5" class="fa fa-star">&#xf005; &#xf005; &#xf123; &#xf006; &#xf006;  </option>
                            <option value="3" class="fa fa-star">&#xf005; &#xf005; &#xf005; &#xf006; &#xf006;  </option>
                            <option value="3.5" class="fa fa-star">&#xf005; &#xf005; &#xf005; &#xf123; &#xf006;  </option>
                            <option value="4" class="fa fa-star">&#xf005; &#xf005; &#xf005; &#xf005; &#xf006;  </option>
                            <option value="4.5" class="fa fa-star">&#xf005; &#xf005; &#xf005; &#xf005; &#xf123;  </option>
                            <option value="5" class="fa fa-star">&#xf005; &#xf005; &#xf005; &#xf005; &#xf005;  </option>
                        </select>
                        </p>

                    <textarea class="cta-input" type="text" name="ctainp" id="ctainp" required></textarea> <br>
                    <input class="hero-btn" name="submit" type="submit" value="Submit Feedback"/>
                </div>
            </form>
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

