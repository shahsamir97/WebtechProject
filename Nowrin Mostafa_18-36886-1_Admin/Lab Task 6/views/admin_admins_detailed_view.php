<?php
  $id=$_GET["id"];
//  echo $id;
  include_once 'db.php';
 ?>
 <html>
   <head>
     <?php include 'admin_header_head.php'; ?>
     <?php
       $sql="SELECT * FROM users WHERE uid=$id;";
       $stmt=mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt,$sql))
       {
         echo "SQL statement failed!";
       }
       else {
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);
         $row = mysqli_fetch_assoc($result);
         $uid=$row["uid"];
         $email=$row["email"];
         $uname=$row["uname"];
         $con=$row["phone"];
         $status=$row["status"];
         }

     ?>
     <title>Gaming buddy <?php echo $uname;  ?></title>
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
         color:green;
         text-align: center;

       }
       .creator
       {
         color:green;
       }
       .unbann
       {
         text-decoration: none;
         text-align: center;
         color: #0B5345;
         align-items: center;
       }
       .unbann a
       {
         color: #0B5345;
         font-size: 24px;
         font-weight: bold;
         border: 2px solid #0B5345;
         display: block;
         width: 200px;
         margin-left: 40%;
       }
       .unbann a:hover
       {
         color:white;
         background:#0B5345;
         border-radius: 20px;
         transition: .4s;
       }
       .bann a
       {
         color: #e74c3c;
         font-size: 24px;
         font-weight: bold;
         border: 2px solid #e74c3c;
         display: block;
         width: 200px;
         margin-left: 40%;
         text-align: center;
       }
       .bann a:hover
       {
         color:white;
         background:#e74c3c;
         border-radius: 20px;
         transition: .4s;
       }
       hr
       {
         color:green;

       }

     </style>
   </head>
   <body>
       <?php include 'admin_header_body.php';?>

       <div class="prcontainer">
         <p class="title">Admin: <?php echo $uname; ?></p><hr><br>
         <span><b>Email :</b> <?php echo $email; ?></span><br><br>
         <span><b>UserID: </b> <?php echo $uid; ?></span><br><br>
         <span><b>Contact:</b> <?php echo $con; ?></span><br><br>
         <?php
         if($row["status"]=="active")
         {
           echo '<span style="color:green;"><b>Active</b></span>';
           //echo '<div class="bann"><a style="text-decoration:none;" href="admin_gen_user_status_handler.php?id='.$id.'&stat='.$status.'">Bann</a></div>';
         }
         else
         {
          echo '<span style="color:red;"><b>Banned</b></span><br>';
          //echo '<div class="unbann"><a style="text-decoration:none;" href="admin_gen_user_status_handler.php?id='.$id.'&stat='.$status.'">Unbann</a></div>';
         }
  ?>
       </div>

   </body>
 </html>
