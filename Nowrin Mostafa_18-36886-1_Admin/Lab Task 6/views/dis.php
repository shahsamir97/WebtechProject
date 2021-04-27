<?php session_start();

    function log_out()
    {
        session_destroy();
        header("Location:log_in.php");
    }

    if (isset($_GET['log_out']))
    {
        log_out();
    }
    if(!isset($_SESSION['uname']))
    {
       echo "You are not logged in." ;
    }
    else {
      echo $_SESSION['uname'].'<br>';
      echo $_SESSION['id'];
      echo '<a href="dis.php?log_out=true">Log out</a>';
    }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <script type="text/javascript">

     </script>
     <title></title>
   </head>
   <body>


   </body>
 </html>
