<?php
$con = mysqli_connect('localhost','root','','floodprone');
$sql = "select * from bocauepeopleinfo";
$userin = mysqli_query($con,$sql);
$userinfo = mysqli_fetch_assoc($userin);
$_POST['Number'] = $userinfo['Number'];
$_POST['Username'] = $userinfo['Username'];
$_POST['Email'] = $userinfo['Email'];
$_POST['BirthD'] = $userinfo['BirthD'];
$_POST['ContactNum'] = $userinfo['ContactNum'];
$_POST['Street'] = $userinfo['Street'];
$_POST['Baranggay'] = $userinfo['Baranggay'];
$_POST['Password'] = $userinfo['Password'];

$sqls = "select * from levelstatus where Baranggay = 'Antipona'";
$userin = mysqli_query($con,$sqls);
$userinfo = mysqli_fetch_assoc($userin);
$_POST['levels'] = $userinfo['LevelStatus'];
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
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="search.php">SEARCH</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Search the Area and its Location</h1>
        </section>
        <!-----------About us Content----------->
        <section class="searchsections">
            <div class="wrappers">
                <div class="search-inputs">
                <form action="imglevel.php" method="post" >
                    <a href="" target="_blank" hidden></a>
                    <input name="Baranggays" type="text" placeholder="Search Baranggay..." />
                    <div class="autocom-boxs">
                        <!-- here list are inserted from javascript -->
                    </div>
                    <div class="icons"><i class="fa fa-search"></i></div>
                </div>  
                </form> 
            </div>
            <script src="Javascript/suggestion.js"></script>
        </section>
        <!-----------Course Content----------->
        <section class="front">
            <h1><?php echo $_POST['Baranggay'];?></h1>
            <p>Bocaue, Bulacan</p>

            <div class="row">
                <div class="front-col">
                    <h3>Intermediate</h3>
                    <p>
                    Floods in Bocaue, Bulacan is a problem of every citizen, especially to those living in flood
                    prone areas, even the Filipino people are resilient and somehow capable to recover from different
                    calamities. Which large floods causes
                    millions or billions of pesos worth of property damaged or destroyed which affects every
                    sector of agriculture and livestock, tourism, and industrialized sectors, which put strains to the
                    economy and the most affected by this is the common people.
                    In which this will monitor flood prone areas and possible areas that
                    will be affected by the flood. The FAMS monitors the water level of an area using a ultrasonic sensor,
                    regardless of weather patterns in the date, the website also giving updates and monitors weather of
                    a region, and informs the users for a possible evacuation, and safest route in case of an calamity
                    like flashfloods which the device that monitors water level and the status will send notifications also
                    the FAMS are available in mobile phones to have an easy access to the website which anyone can
                    use the application to keep them updated about the status of the areas specially the flood prone
                    areas.
                    </p>
                </div>
                <div class="front-col">
                <img src="images/anouts.jpg" alt="" />
                </div>
            </div>
        </section>
        <section class="water">
            <div class="row">

                <div class="container">
                    <div class="circular-progress" id="circular">
                    <span class="progress-value">0 meter</span>
                    </div>
                    <div class="bar" id="bar">
                    <span> <?php if($userin->num_rows == 0){ echo $_POST['levels'];}
                    else{echo 'Color Status of ', $_POST['Baranggay'];}?></span>
                    </div>
                    <!-- .water {
                            width: 75%;
                            margin: auto;
                            text-align: center;
                            background: #0355d0;
                        }
                        .container {
                            display: flex;
                            background: #fff;
                            row-gap: 30px;
                            width: 670px;
                            flex-direction: column;
                            align-items: center;
                            background: #0355d0;
                        } -->
                </div>

                <div class="container">
                     <p>
                     Floods in Bocaue, Bulacan is a problem of every citizen, especially to those living in flood
                    prone areas, even the Filipino people are resilient and somehow capable to recover from different
                    calamities. Which large floods causes
                    millions or billions of pesos worth of property damaged or destroyed which affects every
                    sector of agriculture and livestock, tourism, and industrialized sectors, which put strains to the
                    economy and the most affected by this is the common people.
                    In which this will monitor flood prone areas and possible areas that
                    will be affected by the flood. The FAMS monitors the water level of an area using a ultrasonic sensor,
                    regardless of weather patterns in the date, the website also giving updates and monitors weather of
                    a region, and informs the users for a possible evacuation, and safest route in case of an calamity
                    </p>
                </div>
            </div>
        </section>
        <section class="frontfacilities">
            <h1>Different Colors</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci numquam commodi unde rerum nobis?</p>
            <div class="row">
                <div class="frontfacilities-col">
                    <img src="images/mazdacolor.jpg" />
                    <h3>World Class Colors</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit atque aspernatur autem magnam
                    </p>
                </div>
                <div class="frontfacilities-col">
                    <img src="images/mazdacolors.jpg" />
                    <h3>Mazda 3 Colors</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit atque aspernatur autem magnam
                    </p>
                </div>
                <div class="frontfacilities-col">
                    <img src="images/mazdacolorsss.jpg" />
                    <h3>Mazda Miata Colors</h3>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit atque aspernatur autem magnam
                    </p>
                </div>
            </div>
        </section>

       <!--========================== FOOTER ==========================-->
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
            var levl = <?php echo $_POST['levels'];?>;
             var levels = 100 - levl;
                let circularProgress = document.querySelector(".circular-progress"),
                progressValue = document.querySelector(".progress-value");

                let progressStartValue = 100,    
                progressEndValue = levels,    
                speed = 50;
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
                document.getElementById("bar").style.transition = "all 6s";
                }else if(progressEndValue <= 49)  {
                document.getElementById("bar").style.background = "orange";
                document.getElementById("bar").style.transition = "all 5s";
                }else if(progressEndValue <= 75)  {
                document.getElementById("bar").style.background = "yellow";
                document.getElementById("bar").style.transition = "all 4s";
                }else if (progressEndValue <= 100){
                document.getElementById("bar").style.background = "green";
                document.getElementById("bar").style.color = "white";
                document.getElementById("bar").style.transition = "all 3s";
                }
        </script>
    </body>
</html>
