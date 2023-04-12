<?php session_start()?>
<?php
$con = mysqli_connect('localhost','root','','floodprone');
$Barang = $_SESSION['Baranggay'];
   $sql = "select * from levelstatus order by begin desc"; //where Baranggay='".$Barang."'
  $userin = $con->query($sql);
?>
<!-- ========================Header============================= -->
<?php include "includes/header.php";?>

    <body class="bodies">
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
                        <li><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Notifications</h1>
        </section>
        <!-----------About us Content----------->
        <section class="section-50">
            <?php while($userinfo = mysqli_fetch_assoc($userin)){ ?>
  <div class="containers">
    <div class="notification-ui_dd-content">
      <div class="notification-list notification-list--unread" id="alert">
        <div class="notification-list_content">
          <?php   if($userin->num_rows == 0){?>
          <?php }else{?><div class="notification-list_img"> <img src="images/anout.jpg" alt="user"> </div><?php }?>
          <div class="notification-list_detail">
            <?php   if($userin->num_rows == 0){?>
            <p>There are No Existing Information About Your Baranggay</p>
            <?php }else{?>

            <p><b>Baranggay <?php echo $userinfo['Baranggay'];?>,
            <?php if($userinfo['LevelStatus'] <= 25){?>
             <i id="color" style='color: #31ad42 '> 
             <?php }elseif($userinfo['LevelStatus'] <= 50 ){?>
                <i id="color" style='color: #baa503 '>    
             <?php }elseif($userinfo['LevelStatus'] <= 75){?>
                <i id="color" style='color: #d36627 '>    
             <?php }elseif($userinfo['LevelStatus'] <= 100 ){ ?>
                <i id="color" style='color: #b92121 '>  
             <?php }else{ ?>
                <i id="color" style='color: #ff0000 '>  
             <?php } ?>
                <?php echo $userinfo['LevelStatus'];?> Warning Status </i></b></p>
                <p class="text-muted"> <?php echo $userinfo['Sign'];?>.</p>
                <p class="text-muted"><small><?php echo $userinfo['Time'];?><?php echo $userinfo['Date'];?></small></p>
                   <?php }?>
          </div>
        </div>
            <?php   if($userin->num_rows == 0){?>
            <?php }else{?><div class="notification-list_feature-img"> <img src="images/anout.jpg" alt="Feature image"></div><?php }?>
            <i class="fa fa-times" onclick="toggles();"></i>
      </div>
     </div>
     <?php } ?>
    <div class="text-center"> <a href="#" class="btns btn-success">Load more activity</a> </div>
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
            function toggles() {
    var div = document.getElementById("alert");
    div.parentNode.removeChild(div);
    
  }
        </script>
                    
    </body>
</html>
