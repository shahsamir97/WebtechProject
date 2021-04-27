<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'admin_header_head.php'; ?>
    <title>Add new Admin</title>
    <style media="screen">
    input
    {
      width: 500px;
      border-radius: 10px;
      padding: 8px;
      border-bottom: 2px solid green;
      text-align: center;
    }
    hr
    {
      color: green;
    }
    .form
    {
      text-align: center;
      padding: 20px;
    }
    .admin_title
    {
      font-family: consolas;
      margin-left: 43%;
      font-size: 35px;
      color: green;
    }
    .crbtn
    {
      color:green;
      background: white;
      width: 200px;
      border-bottom: 2px solid green;
      height: 30px;
    }
    .crbtn:hover
    {
      color: white;
      background: green;
      border-radius: 20px;
      transition: .4s;
    }
    </style>
  </head>
  <body>
    <?php include 'admin_header_body.php'; ?>
    <span class="admin_title">admin Form</span><hr>
    <div class="form">
      <form onsubmit="return validate();" action="../controllers/admin_add_admin_handler.php" method="post">
      		<input type="text" name="uname" id="uname" placeholder="Username" class="uname"><br><br>
      		<input type="text" name="email" id="email" placeholder="Email" class="email"><br><br>
      		<input type="password" name="pass" id="pass" placeholder="password" class="pass"><br><br>
          <input type="password" name="cnf_pass" id="cnf_pass" placeholder="Confirm password" class="cnf_pass"><br><br>
      		<input type="text" name="con" id="con" placeholder="Phone Number " class="con"><br><br>
      		<button type="submit" id="crbtn" class="crbtn">Add Admin</button>
      </form>
    </div>
  </body>
</html>
