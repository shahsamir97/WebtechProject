<?php $id=$_GET["gid"];
//echo $id;
include_once 'db.php';

?>

<html>
  <head>
    <?php include 'admin_header_head.php'; ?>
    <?php
      $sql="SELECT * FROM game WHERE gid=$id;";
      //echo $sql;
      $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql))
      {
        echo "SQL statement failed!";
      }
      else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        $title=$row["title"];
        $des=$row["des"];
        $glink=$row["glink"];
       
        $gtype=$row["gtype"];
        $puid=$row["uid"];
        $con=$row["con"];
        $verf=$row["verf"];
        }

    ?>
    <title>Gaming buddy <?php echo $title;  ?></title>
    <style>
      .prcontainer
      {
        width: 80%;
        margin: 0 auto;
        padding: 20px;

      }
      .prcontainer span
      {
        font-size: 20px;

      }
      .title
      {
        font-size: 30px;
        font-weight: bolder;
        color:#191970;
      }
      .creator
      {
        color:green;
      }
      .verf
      {
        text-decoration: none;
        text-align: center;
        color: #0B5345;
        align-items: center;
      }
      .verf a
      {
        color: #0B5345;
        font-size: 24px;
        font-weight: bold;
        border: 2px solid #0B5345;
        display: block;
        width: 200px;
        margin-left: 40%;
      }
      .verf a:hover
      {
        color:white;
        background:#0B5345;
        border-radius: 20px;
        transition: .4s;
      }
      .unverf a
      {
        font-size: 24px;
        font-weight: bold;
        border: 2px solid #e74c3c;
        display: block;
        width: 200px;
        margin-left: 40%;
        text-decoration: none;
        text-align: center;
        color: #e74c3c;
        align-items: center;
      }
      .unverf a:hover
      {
        color:white;
        background: #e74c3c;
        border-radius: 20px;
        transition: .4s;
      }
    </style>
  </head>
  <body>
      <?php include 'admin_header_body.php';?>

      <div class="prcontainer">
        <p class="title">Game Title: <?php echo '<u>'.$title.'</u>'; ?></p><br>
        <span><b>Game Type:</b> <?php echo $gtype; ?></span><br><br>
        <span><b>Game Description:</b> <?php echo $des; ?></span><br><br>
        <span><b>Game Link: </b><a href="<?php echo 'https://'.$glink; ?>"target="_blank"> <?php echo $glink; ?></a></span><br>
    
        <span class="creator"><b>Created By: </b>user id=<?php echo $puid; ?></span><br>
        <span><b>Contact:</b> <?php echo $con; ?></span><br><br>
        <?php
        if($row["verf"]=="no")
        {
          echo '<span style="color:red;"><b>Not Verified</b></span><br>';
          echo '<div class="verf"><a style="text-decoration:none;" href="../controllers/admin_verf_handler.php?id='.$id.'&verf='.$verf.'">Verify</a></div>';
        }
        else {echo '<span style="color:green;"><b>Verified</b></span>';
          echo '<div class="unverf"><a style="text-decoration:none;" href="../controllers/admin_verf_handler.php?id='.$id.'&verf='.$verf.'">Unverify</a></div>';}
 ?>
      </div>

  </body>
</html>
