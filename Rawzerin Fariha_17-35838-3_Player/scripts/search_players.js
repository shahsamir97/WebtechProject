var offset = 0
var response = true

function searchPlayer(){
    var region = document.getElementById('regions').options
    var index = region.selectedIndex
    var r = region[index].text
    var game = document.getElementById('searchBar').value
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "<h3>No result found</h3>"){
                response = false
                document.getElementById("searchButton").style.visibility = "hidden"
            }else{
                response = true
                document.getElementById("searchButton").style.visibility = "visible"
            }
            document.getElementById("player-list").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "../controller/player_search_controller.php?region="+r+"&game="+game+"&offset="+offset, true);
    xhttp.send();
}

function sendFriendRequest(receiverId){
    var senderId = "<?php echo $_SESSION['userId']?>"
    alert(receiverId + " "+senderId)
    // xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //
    //     }
    // };
    // xhttp.open("GET", "../controller/friend_request_controller.php?receiverId="+receiverId+"&action=send", true);
    // xhttp.send();
}

function next(){
    if (response){
        offset += 4
        searchPlayer()
    }
}

function previous(){
    if (offset > 0){
        offset -= 4
        searchPlayer()
    }
}