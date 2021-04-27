function acceptFriendRequest(friendId,userId){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           if(this.response == 1){
                document.getElementById(friendId).setAttribute("src","../img/new_friends.png")
               document.getElementById(friendId).enabled = false
            }
        }
    };
    xhttp.open("GET", "../controller/friend_request_controller.php?friendId="+friendId+"&userId="+userId+"&action=accept", true);
    xhttp.send();
}