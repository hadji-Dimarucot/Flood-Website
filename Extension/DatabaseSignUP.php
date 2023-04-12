
<?php
session_start();
// $UserErr = $EmailErr = $dateErr = $ConErr = $StreetErr = $BarrErr = $passErr = $conpassErr = "";
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$date = $_POST['date'];
$Contactnumber = $_POST['Contactnumber'];
$Street = $_POST['Street'];
$Baranggay = $_POST['Baranggay'];
$pass = $_POST['pass'];
$conpass = $_POST['conpass'];
$zero = 0;
$con = mysqli_connect('localhost','root','','floodprone');
    $stmt = ("insert into bocauepeopleinfo(Number,Username,Email,BirthD,ContactNum,Street,Baranggay,Password) values('$Number', '$Username','$Email','$date','$Contactnumber','$Street','$Baranggay','$pass')");
   $inserted = mysqli_query($con,$stmt);
   if($inserted){
    $_SESSION['status'] = "Sign Up Successfully, You Need to Log In.";
   header("Location: ../login.php");
   }else{
    echo "something went wrong!";
   }
   ?>