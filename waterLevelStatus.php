<?php session_start(); ?>
<?php
$con = mysqli_connect('localhost','root','','floodprone');
$Barang = $_SESSION['Baranggay'];
$sql = "select LevelStatus from levelstatus where Baranggay ='".$Barang."' order by begin desc";
$userin = mysqli_query($con,$sql);

if($userin->num_rows == 0){
$_POST['Pahayag'] = 'There are no existing information in the database';
}else{
    $userinfo = mysqli_fetch_assoc($userin);
$_POST['LevelStatus'] = $userinfo['LevelStatus'];
}
?>
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
            <h1>Water Level Status</h1>
        </section>

        <!-----------Course Content----------->
        <section class="water">
            <div class="container">
                <div class="circular-progress" id="circular">
                    <span class="progress-value">0 meter</span>
                </div>
                <div class="bar" id="bar">
                <span> <?php if($userin->num_rows == 0){ echo $_POST['Pahayag'];}
                else{echo 'Color Status of ', $Barang;}?></span>
                </div>
</div>
        </section>

        <section class="level">
            <h1>Guide on Every Water Level Status</h1>
            <div class="row">
                <div class="level-col1">
                    <h3>Green</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa. </p>
                </div>
                <div class="level-col2">
                    <h3>Yellow</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa. </p>
                </div>
                <div class="level-col3">
                    <h3>Orange</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa. </p>
                </div>
                <div class="level-col4">
                    <h3>Red</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, rerum accusantium. Ipsum expedita sequi,
                        repellat explicabo laborum dolorem tempora nihil facere modi vitae aliquid voluptas pariatur libero est
                        doloribus ipsa. </p>
                </div>
            </div>
        </section>
        <section class="facilevel">
            <h1>Different Colors</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
            <div class="row">
                <div class="facilevel-col">
                    <img src="images/mazdacolor.jpg" />
                    <h3>World Class Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
                </div>
                <div class="facilevel-col">
                    <img src="images/mazdacolors.jpg" />
                    <h3>Mazda 3 Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
                </div>
                <div class="facilevel-col">
                    <img src="images/mazdacolorsss.jpg" />
                    <h3>Mazda Miata Colors</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
                </div>
            </div>
        </section>
        <!-- ========================Footer============================= -->
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
        <script>
            var levl = <?php echo $_POST['LevelStatus']?>;
             var levels = 100 - levl;
                let circularProgress = document.querySelector(".circular-progress"),
                progressValue = document.querySelector(".progress-value");

                let progressStartValue = 100,    
                progressEndValue = levels,    
                speed = 25;
                let progress = setInterval(() => {
                progressStartValue--;
                var newlevl = 100 - progressStartValue;
                progressValue.textContent = `${newlevl} feet`
                circularProgress.style.background = `conic-gradient(#ededed 0deg ${progressStartValue * 3.6}deg, red 0%, orange 25%, yellow 50%, green 78%)`
                document.getElementById("circular").style["boxShadow"] = "0 0 20px 0px rgba(0, 0, 0, 0.1)";
                if(progressStartValue == progressEndValue){
                    clearInterval(progress);
                }    
                }, speed);
                if(progressEndValue <= 24)  {
                document.getElementById("bar").style.background = "red";
                document.getElementById("bar").style.color = "white";
                document.getElementById("bar").style.transition = "all 4s";
                }else if(progressEndValue <= 49)  {
                document.getElementById("bar").style.background = "orange";
                document.getElementById("bar").style.transition = "all 3s";
                }else if(progressEndValue <= 75)  {
                document.getElementById("bar").style.background = "yellow";
                document.getElementById("bar").style.transition = "all 2s";
                }else if (progressEndValue <= 100){
                document.getElementById("bar").style.background = "green";
                document.getElementById("bar").style.color = "white";
                document.getElementById("bar").style.transition = "all 2s";
                }
        </script>
        <style>
            .level-col1 {
                flex-basis: 31%;
                background: #ffffff;
                border-radius: 10px;
                margin: 10px;
                padding: 20px;
                box-sizing: border-box;
                transition: 0.5s;
            }
            .level-col1 p {
                text-align: justify;
            }
            .level-col1 h3 {
                text-align: center;
                font-weight: 600;
                margin: 10px 0;
            }
            .level-col1:hover {
                box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
                background: #0e580165;
            }
            .level-col2 {
                flex-basis: 31%;
                background: #ffffff;
                border-radius: 10px;
                margin: 10px;
                padding: 20px;
                box-sizing: border-box;
                transition: 0.5s;
            }
            .level-col2 p {
                text-align: justify;
            }
            .level-col2 h3 {
                text-align: center;
                font-weight: 600;
                margin: 10px 0;
            }
            .level-col2:hover {
                box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
                background: #99992a90;
            }
            .level-col3 {
                flex-basis: 31%;
                background: #ffffff;
                border-radius: 10px;
                margin: 10px;
                padding: 20px;
                box-sizing: border-box;
                transition: 0.5s;
            }
            .level-col3 p {
                text-align: justify;
            }
            .level-col3 h3 {
                text-align: center;
                font-weight: 600;
                margin: 10px 0;
            }
            .level-col3:hover {
                box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
                background: #80540a90;
            }
            .level-col4 {
                flex-basis: 31%;
                background: #ffffff;
                border-radius: 10px;
                margin: 10px;
                padding: 20px;
                box-sizing: border-box;
                transition: 0.5s;
            }
            .level-col4 p {
                text-align: justify;
            }
            .level-col4 h3 {
                text-align: center;
                font-weight: 600;
                margin: 10px 0;
            }
            .level-col4:hover {
                box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
                background: #79111190;
            }
        </style>

    </body>
</html>
