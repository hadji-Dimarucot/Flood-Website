<?php session_start()?>
<?php
$con = mysqli_connect('localhost','root','','floodprone');

if(isset($_POST['Usernam']) && isset($_POST['Passwor'])){
    function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }
    $Username = validate($_POST['Usernam']);
    $Password = validate($_POST['Passwor']);
}
        $sql = "select * from bocauepeopleinfo where Username='".$Username."' and Password='".$Password."'";
        $userin = mysqli_query($con,$sql);

        if (mysqli_num_rows($userin) === 1) {
        $userinfo = mysqli_fetch_assoc($userin);
        if ($userinfo['Username'] === $Username && $userinfo['Password'] === $Password) {
        $_SESSION['Number'] = $userinfo['Number'];
        $_SESSION['Username'] = $userinfo['Username'];
        $_SESSION['Email'] = $userinfo['Email'];
        $_SESSION['BirthD'] = $userinfo['BirthD'];
        $_SESSION['ContactNum'] = $userinfo['ContactNum'];
        $_SESSION['Street'] = $userinfo['Street'];
        $_SESSION['Baranggay'] = $userinfo['Baranggay'];
        $_SESSION['Password'] = $userinfo['Password'];
        header("Location: ../index.php");
        }else{
        header("Location: login.php?error=Incorect Username or password");
        exit();
    }

}else{
    header("Location: login.php?error=Incorect Username or password");
    exit();
}
?>