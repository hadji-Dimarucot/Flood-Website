
<?php
session_start();
$comment = $_POST['ctainp'];
$star = $_POST['star'];
$nam = $_SESSION['Username'];

$con = mysqli_connect('localhost','root','','floodprone');
    $stmt = ("insert into feedback(star,comment,name) values('$star','$comment','$nam')");
    $userins = $con->query($stmt);
   header("Location: ../index.php");
   ?>