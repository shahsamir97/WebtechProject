<?php
require  "../model/player_profile.php";

function applyProfileEdits($userID, $email,  $name, $phone, $region, $dob, $imgUrl){
    if (editPlayerDetails($userID, $email,  $name, $phone, $region, $dob, $imgUrl)){
        return true;
    }else{
        return false;
    }
}

function getUserInfo($userId){
    return playerInfo($userId);
}

function doesEmailAlreadyExist($email){
    if (checkEmailExists($email)){
        return true;
    }else{
        return false;
    }
}

function changeUserPassword($userId, $password){
    if (changePassword($userId, $password)){
        return true;
    }else{
        return false;
    }
}

function getOldPassword($userID){
    return retrieveOldPassword($userID);
}

function getProfilePicture($userId){
    return retrieveProfilePicture($userId);
}


function saveSelectedGames($userId, $selectedGames){
    if (storeSelectedGames($userId, $selectedGames)){
        return true;
    }else{
        return false;
    }
}

