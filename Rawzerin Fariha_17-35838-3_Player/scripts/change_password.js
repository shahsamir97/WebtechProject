var currentPassOk = false;
var newPassOk = false;
var confirmPassOk = false;

function verifyCurrentPass(){
    var currentPass = document.getElementById("currentPass").value
    var currentPassErr = document.getElementById("currentPasswordErr")
    if (currentPass == ""){
        currentPassOk = false;
        currentPassErr.innerText = "Cannot be empty!"
    }else {
        currentPassOk = true;
        currentPassErr.innerText = null
    }
}

function verifyNewPassword(){
    var newPass = document.getElementById("newPass").value
    var newPassErr = document.getElementById("newPasswordErr")
    if (newPass == ""){
        newPassOk = false;
        newPassErr.innerText = "Cannot be empty!"
    }else {
        newPassOk = true;
        newPassErr.innerText = null
    }
}

function verifyConfirmPassword(){
    var confirmPass = document.getElementById("confirmPass").value
    var newPass = document.getElementById("newPass").value
    var confirmPassErr = document.getElementById("confirmPasswordErr")
    if (newPass == ""){
        confirmPassOk = false;
        confirmPassErr.innerText = "Type new password first!"
    }else{
        if (confirmPass == ""){
            confirmPassOk = false;
            confirmPassErr.innerText = "Cannot be empty!"
        }else {
            if (confirmPass != newPass){
                confirmPassOk = false;
                confirmPassErr.innerText = "Password do not match!"
            }else{
                confirmPassOk = true;
                confirmPassErr.innerText = null
            }
        }
    }

}