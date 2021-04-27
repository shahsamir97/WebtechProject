<html>
<head>
  <title>Home</title>
    <?php include 'admin_header_head.php' ?>
    <style>
      body
      {
        font-family: consolas;
        font-size: 14pt;
      }
      .prodis
      {
        display: flex;
        flex-flow:row wrap;
        margin-left: 30px;
        margin-right: 30px;
      }
      .ideas
      {
        flex-basis:200px;
        margin: 8px;
        border: 2px solid #0B5345;
        border-radius: 5px;
        box-shadow: 5px 5px 10px #145A32;
        padding: 8px;
        text-align: center;
        position: relative;
        transition: .4s;
      }
      .ideas:hover
      {
        box-shadow: 5px 5px 10px #145A32,5px 5px 60px #145A32;
      }
      .ideas a
      {
        color: #191970;
      }
      .ideas a:hover
      {
        color: #4169E1;
      }
      .ideas span
      {
        padding: 2px;
        font-size: 15px;
        font-family: sans-serif;
        text-align: justify;
      }


    </style>
  </head>
  <body>
    <?php

    include 'admin_header_body.php';

     ?>
      <section class="prodis">
        <?php
          include_once 'db.php';
          $sql="SELECT * FROM game;";
          $stmt=mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$sql))
          {
            echo "SQL statement failed!";
          }
          else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
              echo'<div class="ideas">
                <h3><a href="admin_project_view.php?pid='.$row["gid"].'">Title: '.$row["title"].'</a></h3>
                <span><b>Description:</b> '.$row["des"].'<br></span>
                <span>ID: '.$row["gid"].'<br></span>
                <span><b>Game Link:</b> '.$row["glink"].'<br><span>
                <span style=color:orange;><b>Game Type: '.$row["gtype"].'</b><br><span>
                <span style=color:black><b>Contact:</b> '.$row["con"].'<br><span>';
                if($row["verf"]=="no")
                {
                  echo '<span style="color:red;"><b>Not Verified</b></span>';
                }
                else {echo '<span style="color:green;"><b>Verified</b></span>';}

              echo '</div>';
            }
          }


         ?>
      </section>
  </body>
</html>
