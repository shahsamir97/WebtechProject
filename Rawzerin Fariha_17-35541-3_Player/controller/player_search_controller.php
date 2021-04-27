<?php
require '../model/player_search.php';
session_start();

if (isset($_GET['region']) && isset($_GET['game']) && isset($_GET['offset'])) {
    $players = searchPlayer($_GET['region'], $_GET['game'], $_GET['offset']);;
    if (sizeof($players) > 0) {
        foreach ($players as $key => $player) {
            echo "<div class='list-item card'>";
            echo "<div class='visit-player-profile'>";
            echo "<a href=../view/profile.php?userId={$player['id']}>";
            echo "<div class='rounded-avatar'>";
            echo "<img src=" . $player['imgUrl'] . ">";
            echo "</div>";
            echo "<h4>" . $player['name'] . "</h4>";
            echo "</a>";
            echo "</div>";
            echo "<img class='buttonImg' id='{$player['id']}' height='50px' width='50px' src='../img/add_icon.png' onclick='sendFriendRequest(this.id)'>";
            echo "</div>";
        }
    } else {
        echo "<h3>No result found</h3>";
    }
}






