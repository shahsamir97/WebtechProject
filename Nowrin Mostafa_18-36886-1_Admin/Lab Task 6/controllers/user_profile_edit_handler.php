<?php
    include_once '../models/db.php';
    session_start();
    $name=$_SESSION['uname'];
    $uid=$_SESSION['uid'];

    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $con=$_POST['con'];


    $sql="UPDATE users SET uname='$uname',password='$pass',phone='$con' WHERE uid=$uid;";
    mysqli_query($conn,$sql);

    header("Location:../views/user_profile_view.php");
    echo '<span style="color:green; font-size:24px;"><b>Profile Updated</b><span>';

?>
