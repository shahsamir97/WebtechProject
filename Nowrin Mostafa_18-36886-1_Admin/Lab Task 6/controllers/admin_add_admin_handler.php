<html>
  <head>
    <?php include 'admin_header_head.php'; ?>
  </head>
  <body>
    <?php
    include 'admin_header_body.php';
    include_once '../models/db.php';

    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $con=$_POST['con'];
    $user_type="admin";
    $status="active";

    $sql="INSERT INTO users (uname, password,email,status,user_type,phone) VALUES ('$uname','$pass','$email','$status','$user_type','$con');";
    mysqli_query($conn,$sql);

    header("Location:../views/admin_admins_view.php");

    ?>
  </body>
</html>
