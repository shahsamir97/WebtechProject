<!DOCTYPE html>
<html>
<head>
    <title>Friend Requests</title>
    <link rel="stylesheet" href="../styles/friend_requests.css">
</head>

<body>
<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header('location: ../view/login.php');
}
require "../controller/friend_request_controller.php";
include "../view/header.php";
$players = getFriendRequests($_SESSION['userId']);

?>
<div class="flex-container">
    <div id="player-list" class="player-list">
        <?php foreach ($players as $key => $player): ?>
            <div class='list-item card'>
                <div class='visit-player-profile'>
                    <a href="../view/profile.php?userId=<?php echo $player['id']?>">
                       <div class='rounded-avatar'>
                            <img src="<?php echo $player['imgUrl'] ?>">
                       </div>
                        <p><?php echo $player['name'] ?></p>
                       </a>
                    </div>
                <img id='<?php echo $player['id']?>' height='50px' width='50px' src='../img/check.png' onclick='acceptFriendRequest(this.id, "<?php echo $_SESSION['userId']?>" )'>
                </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="button-container">
    <button class="previous" onclick="previous()">&laquo; Previous</button>
    <button class="next" onclick="next()">Next &raquo;</button>
</div>
<script type="text/javascript" src="../scripts/friend_requests.js"></script>
</body>
</html>

