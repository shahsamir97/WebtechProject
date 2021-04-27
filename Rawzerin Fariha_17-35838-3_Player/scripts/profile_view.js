document.getElementById('edit_profile').addEventListener('click', applyProfileEdits)

function applyProfileEdits() {
    window.location.href = "../view/player_edit_profile.php";
}


var url_string = window.location.href
var url = new URL(url_string);
var userId = url.searchParams.get("userId");


if (userId == null){
    document.getElementById("edit_profile").style.display = "visible"
}else{
    document.getElementById("edit_profile").style.display = "none";
}
