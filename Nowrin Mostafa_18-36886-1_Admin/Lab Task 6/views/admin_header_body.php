 <?php
session_start();
if(!isset($_SESSION['uid']))
{
  echo "You are not logged in";
  exit();
}
$name=$_SESSION['uname'];
$uid=$_SESSION['uid'];
$u=$_SESSION['u_type'];

if($u!="admin") {
  echo "You are not logged in as admin";
  exit();
}
    function log_out()
    {
      session_destroy();
      header("Location:log_in.php");
    }
    if(isset($_GET['log_out']))
    {
      log_out();
    }
 ?>
<nav>
  <ul>
    <div class="nav1">
      <li><a class="logo" href="admin_home_view.php">GBuddy</a></li>
      <li><a href="admin_home_view.php">Home</a></li>
      <li><a href="admin_gen_user_view.php">General Users</a></li>
      <li><a href="adminsponsorview.php">Sponsors</a></li>
      <li><a href="admin_admins_view.php">Admins</a></li>
      <li><a href="admin_home_view.php?log_out=true">Log out (<?php echo $name; ?>)</a></li>
    </div>
  </ul>
</nav>
