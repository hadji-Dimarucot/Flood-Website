<?php session_start();
$con = mysqli_connect('localhost','root','','floodprone');
$searc = $_POST['searchs'];
$sql = "select * from levelstatus where Baranggay = '".$searc."'  order by begin desc limit 1 ";
$useri = mysqli_query($con,$sql);
if (mysqli_num_rows($useri) === 1) {
    $userinf = mysqli_fetch_assoc($useri);
    $_SESSION['Bar'] = $userinf['Baranggay'];
    $_SESSION['Lev'] = $userinf['LevelStatus'];
    header("Location: ../search2.0.php");
}else{
    $_SESSION['Pahayag'] = 'There are no existing information in the database';
    header("Location: ../search2.0.php");
}
?>
 