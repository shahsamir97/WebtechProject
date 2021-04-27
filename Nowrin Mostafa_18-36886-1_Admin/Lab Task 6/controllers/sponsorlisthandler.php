<html>
  <head>
    <?php include 'jspheader.php';
      $id=$_GET["id"];
      $list=$_GET["list"];
      include 'jspheader.php';
      include_once '../models/db.php';
      $sql= "INSERT INTO listed (uname, gamename,contact,type,list) VALUES ('$uname','$title','$contact','$type','$list');";
      $sql="UPDATE listed SET list='$list' WHERE gid=$id;";
      if($verf=="no")
      {
        $sql="UPDATE listed SET list='yes' WHERE gid=$id;";
      }
      elseif ($verf=="yes") {
        $sql="UPDATE listed SET list='no' WHERE gid=$id;";
      }
      mysqli_query($conn,$sql);
      echo '<span style="color:green; font-size:24px;"><b>Game Verified</b><span>';
      header("Location:../views/jspheader.php");
    ?>
