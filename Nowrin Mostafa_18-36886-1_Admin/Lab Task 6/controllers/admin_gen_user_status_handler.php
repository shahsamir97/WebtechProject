<?php

  include 'admin_header_head.php';
  $id=$_GET["id"];
  $status=$_GET["stat"];
  echo $id;
  echo $status;
  include 'admin_header_body.php';
  include_once '../models/db.php';
  $bann="banned";
  $active="active";
  //$sql= "INSERT INTO projects1 (title, des, dlink, glink, con, aid_type, uid, verf) VALUES ('$prname','$des','$dlink','$glink','$con','$aid_type','$uid', '$verf');";
  if($status=="active")
  {
    $sql="UPDATE users SET status='$bann' WHERE uid=$id;";
    echo '<span style="color:red; font-size:24px;"><b>User Banned :(</b><span>';
  }
  else if($status=="banned")
  {
    $sql="UPDATE users SET status='$active' WHERE uid=$id;";
    echo '<span style="color:green; font-size:24px;"><b>User Set to Active ;)</b><span>';
  }
  mysqli_query($conn,$sql);
  header("Location:../views/admin_gen_user_view.php");
?>
