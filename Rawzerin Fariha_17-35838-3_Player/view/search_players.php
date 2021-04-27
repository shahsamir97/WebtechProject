<!DOCTYPE html>
<html>
<head>
    <title>Search Players</title>
    <link rel="stylesheet" href="../styles/search_players.css">

</head>

<body>
<?php
session_start();
if (!isset($_SESSION['userId'])){
    header('location: ../view/profile.php');
}
include "../view/header.php";
?>
<div class="flex-container">
    <div class="search-box input-field-margin">
        <input id="searchBar" class="rounded-input-field input-field-margin" type="search" placeholder="Search a game"
        onkeyup="searchPlayer()">
        <div class="input-field-margin rounded-input-field">
            <p style="color: gray">Search by region</p>
            <select name="region" id="regions" class="drop-down-menu" onchange="searchPlayer()">
                <?php
                include '../utils/utilities.php';
                $countries = getCountryNames();
                foreach ($countries as $country) {
                    echo "<option value=".$country.">$country</option>";
                }
                ?>
            </select><br>
        </div>
        <button id="searchButton" class="outlined-button input-field-margin action-button" type="button" onclick="searchPlayer()">Search</button>
    </div>
    <div id="player-list" class="player-list">
    </div>
</div>
<div class="button-container">
    <button class="previous" onclick="previous()">&laquo; Previous</button>
    <button class="next" onclick="next()">Next &raquo;</button>
</div>
<div id="snackBar">
</div>
<script type="text/javascript">
    var offset = 0
    var response = true
    var snackBer = document.getElementById("snackBar")

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
        if (receiverId == senderId){
            return
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.response == 1){
                    document.getElementById(receiverId).setAttribute("src","../img/check.png")
                }else if(this.responseText == "exist"){
                    showSnackbarMessage("Request Already Sent")
                }
            }
        };
        xhttp.open("GET", "../controller/friend_request_controller.php?receiverId="+receiverId+"&senderId="+senderId+"&action=send", true);
        xhttp.send();
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

    function showSnackbarMessage(message){
        snackBer.style.height = "30px"
        snackBer.innerText = message

    }
</script>
</body>
</html>

