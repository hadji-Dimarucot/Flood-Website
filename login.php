<?php session_start();?>
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
            <?php if (isset($_SESSION['status'])) { ?>   
        <div class="alert" id="alerts"> 
 <label><Strong><?php echo $_SESSION['status'];?></Strong>
  <i class="fa fa-times-circle" onclick="toggle();"></i>
</div>
<?php
unset($_SESSION['status']);
            }?>  
      
            <h1>LOGIN</h1>
        </section>
        <!-----------About us Content----------->
        <section class="about-us">
            <div class="about-login">
                <form action="./Extension/indexes.php" method="post" >
                    <div class="loginmiddle">
                        <?php if (isset($_GET['error'])){?>
                            <p class="errors"><?php echo $_GET['error'];?> </p><?php }?>
                        <label> Username or Email Address</label>
                        <br />
                        <input class="login" type="text" name="Usernam" id="Username" required/>
                        <br />
                        <label>Password</label>
                        <br />
                        <input class="login" type="text" name="Passwor" id="Password" required/>
                        <br>
                        <input class="buttonlogin" type="submit" value="Login" name="submit" />
                        <br />
                        <label class="log">Don't Have An Account?</label>
                        <a class="logins" href="SignUp.php">Sign Up</a>
                    </div>
                </form>
            </div>
        </section>
        <!-- ========================footer============================= -->
        <?php include "includes/footer.php";?>

    </body>
</html>
