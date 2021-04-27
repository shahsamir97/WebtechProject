<?php
require "../model/authentication.php";


function createUser($email, $password, $name,$phone, $region, $dob, $gender, $imgUrl){
    if(registerUser($email, $password, $name, $phone, $region, $dob, $gender, $imgUrl)){
        //when registration successful
       return true;
    }else{
        //when registration unsuccessful
        return false;
    }
}

function doesEmailAlreadyExist($email){
    if (checkEmailExists($email)){
        return true;
    }else{
        return false;
    }
}

function getUserId($email){
    return retrieveUserId($email);
}
