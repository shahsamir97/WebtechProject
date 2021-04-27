<html>
<head>
  <title>Gaming Buddy:General Users</title>
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
        flex-flow:column;
        margin-left: 30px;
        margin-right: 30px;

      }
      .ideas
      {
        flex-basis:20px;
        margin: 8px;
        border: 2px solid #0B5345;
        border-radius: 8px;
        box-shadow: 5px 5px 10px #145A32;
        padding: 8px;
        text-align: center;
        position: relative;
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
      .user_detail
      {
        padding: 5px;
        text-decoration: none;
        color: #0B5345;
        font-weight: bold;
        border: 2px solid #0B5345;
        border-radius: 5px;
      }
      .user_detail:hover
      {
        color: white;
        background: #0B5345;
        border-radius: 20px;
        transition: .4s;
      }
      .ud:
      {
        color: #0B5345;
      }
      .ud:hover
      {
        color: white;
      }
      .header
      {
        padding: 15px;
        text-align: center;
        font-size: 30px;
        font-weight: bold;
      }

    </style>
  </head>
  <body>
    <?php

    include 'admin_header_body.php';

     ?>
     <div class="header">
       <span>General Users</span><hr>
     </div>
      <section class="prodis">
        <?php
          include_once 'db.php';
          $sql="SELECT * FROM `users` WHERE user_type='gen_user' ;";
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
                <span><b>Username: '.$row["uname"].'</b></span>
                <span><b>Email:</b> '.$row["email"].'</span>
                <span>userID: '.$row["uid"].'</span>
                <span >Occupation: '.$row["occupation"].'<span>
                <span ><b>Contact:</b> '.$row["phone"].'<span>';
                if($row["status"]=="active")
                {
                  echo '<span style="color:green;padding-right:20px;"><b>  Active  </b></span>';
                }
                else {echo '<span style="color:red;padding-right:20px;"><b>  Banned  </b></span>';}
              echo '<a class="user_detail" href="admin_gen_user_detailed_view.php?id='.$row["uid"].'"><span class="ud"> View Details<span></a>';
              echo '</div>';
            }
          }


         ?>
      </section>
  </body>
</html>
