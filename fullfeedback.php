<?php session_start() ?>
<?php
$con = mysqli_connect('localhost','root','','floodprone');
   $stmt = "select * from feedback"; //order by simula desc limit 4
  $userins = $con->query($stmt);
  ?>
<!-- ========================Header============================= -->
<?php include "includes/header.php";?>
<body>
    <script src="Javascript/javas.js"></script>
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
            <a class="seeReviews" href="index.php">Go Back</a>
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
