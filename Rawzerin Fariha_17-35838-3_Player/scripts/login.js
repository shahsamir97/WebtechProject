

function validateForm(){
     var email = document.getElementById("email").value
     var password = document.getElementById("password").value

    if (email == "" || password == ""){
        alert("Email or Password cannot be empty")
        return false;
    }else{
        return true;
    }
}