<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
    <link rel="stylesheet" href="../styles/changePassword_style.css"/>
    <script type="text/javascript" src="../scripts/change_password.js"></script>
</head>

<body>


  <?php

  session_start();

  require "../controller/player_profile_controller.php";

  $savedCurrentPassword = getOldPassword($_SESSION['userId']);
   $currentPassword = $newPassword = $confirmPassword = $message =  "";
  $newPasswordErr = $confirmPasswordErr = $currentPasswordErr = null;


  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['currentPassword'])) {
      $currentPassword = $_POST['currentPassword'];

      if ($_POST['currentPassword'] != $savedCurrentPassword) {
        $currentPasswordErr = "Current password do not match!";
      }
    }

    if (isset($_POST['newPassword'])) {
      $newPassword = $_POST['newPassword'];

      if ($_POST['newPassword'] == $currentPassword) {
        $newPasswordErr = "New password should be different from current password";
      }
      if (strlen($_POST['newPassword']) >= 6) {
        if (preg_match("^(?=.*[A-Za-z])(?=.*)(?=.*[@$!%*#?&])[A-Za-z@$%#]^", $_POST['newPassword']) == 1) {
          $newPasswordErr = "";

          if (isset($_POST['confirmPassword']) && isset($_POST['newPassword'])) {
            $confirmPassword = $_POST['confirmPassword'];
            if ($_POST['confirmPassword'] != $_POST['newPassword']) {
              $confirmPasswordErr = "Password do not match! Please write the same password you provided on New Password field";
            }else{
                if (changeUserPassword($_SESSION['userId'], $newPassword)){
                    echo "<script>alert('Password successfully changed')</script>";
                }else{
                    echo "<script>alert('Something went wrong! Couldn\'t change the password. Try again)</script>";
                }
              $message = "Well done! Your password has been changed.";
            }
          }
        } else {
          $newPasswordErr = ". Password must contain at least one of the special characters (@, #, $,%)";
        }
      } else {
        $newPasswordErr = "Password must be at least 8 character!";
      }
    }
  }

  ?>


  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="rounded-div">
        <h2 style="text-align: center;"> Change Password</h2><br><br>
        <input id="currentPass" class="rounded-input-field input-field-margin" placeholder="Current Password"
               type="password" name="currentPassword" value="<?php echo $currentPassword?>" onblur="verifyCurrentPass()"><br>
        <span id="currentPasswordErr" class="error"><?php echo $currentPasswordErr; ?></span><br>

        <input id="newPass" class="rounded-input-field input-field-margin" placeholder="New Password" type="password"
               name="newPassword" value="<?php echo $newPassword?>" onblur="verifyNewPassword()"><br>
        <span id="newPasswordErr" class="error"><?php echo $newPasswordErr; ?></span><br>

        <input id="confirmPass" class="rounded-input-field input-field-margin" placeholder="Confirm Password"
               type="password" name="confirmPassword" value="<?php echo $confirmPassword?>" onblur="verifyConfirmPassword()"><br>
        <span id="confirmPasswordErr" class="error"><?php echo $confirmPasswordErr; ?></span><br>
      <hr>

       <h4><?php echo $message?></h4>
      <input class="rectangular-button action-button-margin" type="Submit" value="Submit">
        <a href="../view/profile.php">Back to profile</a>
    </div>
  </form>

</body>
</html>