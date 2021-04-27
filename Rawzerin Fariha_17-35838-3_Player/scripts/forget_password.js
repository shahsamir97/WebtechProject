function validateForm(){
    var email = document.getElementById("email").value
    var emailErr = document.getElementById("emailErr")
    if (email == ""){
        emailErr.innerText = "Email cannot be empty!"
        return false
    }else{
        return  true
    }

}