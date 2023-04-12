<?php session_start()?>
<?php
$barangs = $_POST['Baranggays'];
$con = mysqli_connect('localhost','root','','floodprone');
        $sql = "select * from bocauepeopleinfo where Baranggay='".$barangs."'";
        $userin = mysqli_query($con,$sql);
        $userinfo = mysqli_fetch_assoc($userin);
        $_SESSION['Baranggayf'] = $userinfo['Baranggay'];
        $_SESSION['statusf'] = $userinfo['LevelStatus'];
        header("Location: ../FrontSearch.php");
?>