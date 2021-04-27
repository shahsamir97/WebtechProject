<?php

require "../model/db_connect.php";

function editPlayerDetails($userID, $email, $name, $phone, $region, $dob, $imgUrl)
{
    $conn = db_conn();
    $query = "update player set email='$email', name='$name', phone='$phone', region='$region', dob='$dob', imgUrl = '$imgUrl' where id='$userID'";
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

function getUserID($email)
{
    $conn = db_conn();
    $query = "select id from player where email='$email'";
    try {
        $result = $conn->query($query);
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $row[0]['id'];
    } catch (PDOException $e){
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}

function playerInfo($userId){
    $conn = db_conn();
    $query = "select * from player where id='$userId'";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows[0];
    } catch (PDOException $e){
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}

function checkEmailExists($email){
    $conn = db_conn();
    $query = "select email from player where email='$email'";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        if (sizeof($rows) > 0){
            //when email exists
            return true;
        }else{
            //when email doest not exits
            return false;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function changePassword($userID,$password){
    $conn = db_conn();
    $query = "update player set password='$password' where id='$userID'";
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

function retrieveOldPassword($userId){
    $conn = db_conn();
    $query = "select password from player where id='$userId'";
    try {
        $result = $conn->query($query);
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $row[0]['password'];
    } catch (PDOException $e){
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}

function retrieveProfilePicture($userId){
    $conn = db_conn();
    $query = "select imgUrl from player where id='$userId'";
    try {
        $result = $conn->query($query);
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $row[0]['imgUrl'];
    } catch (PDOException $e){
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}


function storeSelectedGames($userId, $selectedGames){
    $conn = db_conn();
    $query = "update player set selectedGames='$selectedGames' where id='$userId'";
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
