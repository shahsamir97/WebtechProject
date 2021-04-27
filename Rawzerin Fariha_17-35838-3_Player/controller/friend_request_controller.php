<?php
require '../model/friend_connection_model.php';
if (isset($_GET['receiverId']) && isset($_GET['action'])) {
    $sender = $_GET['senderId'];
    $receiver = $_GET['receiverId'];
    $action = $_GET['action'];
    if ($action == "send"){
        if (!isFriendRequestAlreadySent($sender,$receiver)){
            $result = sendFriendRequest($sender, $receiver);
            echo $result;
        }else{
            echo "exist";
        }
    }
}

if (isset($_GET['friendId']) && isset($_GET['action'])) {
    $user = $_GET['userId'];
    $friend = $_GET['friendId'];
    $action = $_GET['action'];
    if ($action === "accept") {
        updateFriendRequest($user,$friend);
        $result = insertInFriendList($user, $friend);
        //insert in reverse direction for whom you're going to accept the request.
        //that means when one person accept a request two rows get inserted in the friends table
        //in one row player1 is user and player2 is friend and
        //in second row player2 is user and player1 is friend
        //below line inserts data in reverse
        insertInFriendList($friend, $user);
        deleteFriendRequest($friend, $user);
        echo $result;
    }
}

function sendFriendRequest($sender, $receiver){
    return insertFriendRequest($sender, $receiver);
}


function getFriendRequests($receiverId){
    return retrieveFriendRequests($receiverId);
}

function getAllFriends($userId){
    return retrieveAllFriends($userId);
}