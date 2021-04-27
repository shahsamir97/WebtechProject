<?php

require "../model/db_connect.php";

function insertFriendRequest($senderId, $receiverId){
    $conn = db_conn();
    $query = "INSERT INTO friend_request (senderId, receiverId) values ('$senderId', '$receiverId')";
    try{
        $conn->exec($query);
    }catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    $conn = null;
    return true;
}

function updateFriendRequest($user, $sender){
    $conn = db_conn();
    $query = "update friend_request set status='accepted' where senderId='$sender' and receiverId='$user'";
    try {
        $conn->exec($query);
        $conn = null;
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return false;
    }
}

function insertInFriendList($userId, $friendId){
    $conn = db_conn();
    $query = "INSERT INTO friends (userId, friendId) values ('$userId', '$friendId')";
    try{
        $conn->exec($query);
    }catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    $conn = null;
    return true;
}

function isFriendRequestAlreadySent($sender, $receiver){
    $conn = db_conn();
    $query = null;
    $query = "SELECT * FROM friend_request
                      WHERE receiverId='$receiver' and senderId='$sender'";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        if (sizeof($rows) >0){
            return true;
        }else{
            return false;
        }
    }catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return true;
    }
}



function retrieveFriendRequests($receiverId){
    $conn = db_conn();
    $query = null;
    $query = "SELECT player.id,player.name,player.imgUrl FROM friend_request,player
                      WHERE friend_request.receiverId='$receiverId' and friend_request.senderId=player.id";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows;
    }catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}

function retrieveAllFriends($userId)
{
    $conn = db_conn();
    $query = null;
    $query = "SELECT player.id,player.name,player.imgUrl FROM friends,player
                      WHERE friends.userId='$userId' and player.id=friends.friendId";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows;
    }catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}

function deleteFriendRequest($senderId, $receiverId){
    $conn = db_conn();
    $query = null;
    $query = "DELETE FROM friend_request WHERE senderId='$senderId' and receiverId='$receiverId'";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows;
    }catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}