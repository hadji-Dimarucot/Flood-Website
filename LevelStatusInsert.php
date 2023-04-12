
<?php
session_start();
$con = mysqli_connect('localhost','root','','floodprone');
    $stmt = ("insert into levelstatus(Baranggay,LevelStatus,Sign,Date) values('Bundukan', '50','etc',TIME_FORMAT(CURRENT_TIME(), '%h:%i %p')");
   $inserted = mysqli_query($con,$stmt);
   ?>