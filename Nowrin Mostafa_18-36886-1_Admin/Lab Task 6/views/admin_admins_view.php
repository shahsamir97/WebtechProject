<html>
<head>
  <title>Gaming Buddy:Admins</title>
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
      .addbtn
      {
        margin-left: 46%;
      }
      .addbtn a
      {
        text-decoration: none;
        text-align: center;
        color:green;
        background: white;
        width: 200px;
        border:2px solid green;
        height: 30px;
        padding: 10px;
        border-radius: 10px;
      }
      .addbtn a:hover
      {
        color: white;
        background: green;
        border-radius: 20px;
        transition: .4s;
      }

    </style>
  </head>
  <body>
    <?php

    include 'admin_header_body.php';

     ?>
     <div class="header">
       <span>Admins</span><hr>
     </div>
      <section class="prodis">
        <?php
          include_once 'db.php';
          $sql="SELECT * FROM `users` WHERE user_type='admin' ;";
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
                <span>userID: '.$row["uid"].'</span>';

                if($row["status"]=="active")
                {
                  echo '<span style="color:green;padding-right:20px;"><b>  Active  </b></span>';
                }
                else {echo '<span style="color:red;padding-right:20px;"><b>  Banned  </b></span>';}
              echo '<a class="user_detail" href="admin_admins_detailed_view.php?id='.$row["uid"].'"><span class="ud"> View Details<span></a>';
              echo '</div>';
            }
          }


         ?>
      </section>
      <br>
      <hr>
      <br>
      <div class="addbtn">
        <a href="admin_add_admin_view.php">Add Admin</a>
      </div>
  </body>
</html>
