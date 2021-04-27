<?php

  include 'admin_header_head.php';
  $id=$_GET["id"];
  $verf=$_GET["verf"];
  include 'admin_header_body.php';
  include_once '../models/db.php';
  //$sql= "INSERT INTO game (title, des,glink, con, gtype, uid, verf) VALUES ('$prname','$des','$glink','$con','$gtype','$uid', '$verf');";
  $sql="UPDATE game SET verf='$verf' WHERE gid=$id;";
  if($verf=="no")
  {
    $sql="UPDATE game SET verf='yes' WHERE gid=$id;";
  }
  elseif ($verf=="yes") {
    $sql="UPDATE game SET verf='no' WHERE gid=$id;";
  }
  mysqli_query($conn,$sql);
  echo '<span style="color:green; font-size:24px;"><b>Project Verified</b><span>';
  header("Location:../views/admin_home_view.php");
?>
