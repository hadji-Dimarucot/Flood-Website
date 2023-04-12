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
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>SIGN UP</h1>
        </section>
        <!-----------About us Content----------->
        <section class="about-us">
            <div class="about-signup">
                <form action="./Extension/DatabaseSignUP.php" method="post" >
                    <!-- <h1>
                            Be Updated In The <br />
                            Time of Calamities
                        </h1> -->

                    <div class="middle">
                        <div class="indiv">
                            <label>Username</label>
                            <br>
                            <input class="signup" type="text" name="Username" id="Username" required/>
                            <br>
                            <label> Email Address</label>
                            <br> 
                            <input class="signupsep" type="email" name="Email" id="Email" required />
                            <br>
                            <label>Birth Date </label>
                            <br>
                            <input class="signup" type="date" name="date" id=" date" required />
                            <br>
                            <label >Contact Number</label>
                            <br>
                            <input class="signupsep" type="tel" name="Contactnumber" id="Contactnumber" required />
                            <br />
                        </div>
                        <div class="indiv">
                        <label>Street</label>
                        <br>
                        <input class="signup" type="text" name="Street" id="Street" required/>
                        <br>
                        <label>Baranggay :</label>
                        <br>
                        <select class="signupsep" type="text" name="Baranggay" value="Baranggay" id="Baranggay" required>
                            <option value="Antipona">Antipona</option>
                            <option value="Bagumbayan">Bagumbayan</option>
                            <option value="Bambang">Bambang</option>
                            <option value="Batia">Batia</option>
                            <option value="Binang 1st">Binang 1st</option>
                            <option value="Binang 2nd">Binang 2nd</option>
                            <option value="Bolacan">Bolacan</option>
                            <option value="Bundukan">Bundukan</option>
                            <option value="Bunlo">Bunlo</option>
                            <option value="Caingin">Caingin</option>
                            <option value="Duhat">Duhat</option>
                            <option value="Igulot">Igulot</option>
                            <option value="Lolomboy">Lolomboy</option>
                            <option value="Poblacion">Poblacion</option>
                            <option value="Sulucan">Sulucan</option>
                            <option value="Taal">Taal</option>
                            <option value="Tambobong">Tambobong</option>
                            <option value="Turo">Turo</option>
                            <option value="Wakas">Wakas</option>
                        </select>
                        <br>
                        <label"> Password</label> <label id="message"></label>     
                        <br>
                        <input class="signup" type="password" name="pass" id="pass" onkeyup='check();' required/>
                        <br>
                        <label> Confirm Password</label>
                        <br>
                        <input class="signupsepjen" type="password" name="conpass" id="conpass" onkeyup='check();' required/>   
                        <br />
                        <label id="beyn"></label>     
                        <br>
                        </div>
                        <input class="buttonsignup" name="submit" type="submit" value="Sign Up" />
                        <a class="signn" href="login.php">Go Back To Login</a>
                    </div>
                </form>
                <script src="signup.js"></script>
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
    </body>
</html>