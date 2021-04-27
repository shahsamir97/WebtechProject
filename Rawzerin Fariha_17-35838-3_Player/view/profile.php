<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../styles/player_profile_styles.css">
</head>

<body>
<?php

session_start();

include 'header.php';
require  "../controller/player_profile_controller.php";

if (!isset($_SESSION['userId'])) {
    header('Location: ../view/login.php');
}

if (isset($_GET['userId'])){
    $userInfo = getUserInfo($_GET['userId']);
}else{
    $userInfo = getUserInfo($_SESSION['userId']);
}

$name = $email = $phone = $address = $region = $shopName = "N/A";

$message = "";
?>
<div class="flex-container">
            <div class="sidenav">
                <a href="../view/profile.php"><p class="sidenav-items">Profile</p></a>
                <a href="../view/friend_list.php"><p class="sidenav-items">Friends</p></a>
                <a href="../view/friend_requests.php"><p class="sidenav-items">Requests</p></a>
                <a href="../view/search_players.php"><p class="sidenav-items">Search Players</p></a>
                <a href="../view/store.php"><p class="sidenav-items">Store</p></a>
                <a href="../view/change_password.php"><p class="sidenav-items">Change Password</p></a>
            </div>
          <div class="content rounded-input-field">
            <table class="user-info">
                <tr>
                    <td>Name</td>
                    <td> : <?php echo $userInfo['name']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : <?php echo $userInfo['email']; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td> : <?php echo $userInfo['phone']; ?></td>
                </tr>
                <tr>
                    <td>Region</td>
                    <td> : <?php echo $userInfo['region']; ?></td>
                </tr>
                <tr>
                    <td>Date of birth</td>
                    <td> : <?php echo $userInfo['dob'] ?></td>
                </tr>
            </table>
              <input id="edit_profile" class="rectangular-button" type="button" value="Edit Profile"/>
        </div>
    <div class="profile-picture rounded-input-field">
                <p>Profile Picture</p>
            <img src="<?php echo $userInfo['imgUrl']; ?>" alt="Avatar Icon" height="150" width="150"
                 style="align-content: center"><br>
    </div>
</div>
<footer>
    <?php include 'footer.php'; ?>
</footer>

<script type="text/javascript" src="../scripts/profile_view.js"></script>
</body>

</html>