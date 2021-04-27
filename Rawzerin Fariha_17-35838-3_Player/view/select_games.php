<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/selectGames__style.css">
    <script src="../scripts/select_games.js"></script>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['userId'])) {
    echo "invalid url";
    return;
}
require "../controller/player_profile_controller.php";

$games = file_get_contents("../utils/games.json");
$games = json_decode($games, true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['selectedGames'])) {
        if (saveSelectedGames($_SESSION['userId'], implode(",", $_POST['selectedGames']))) {
            session_destroy();
            header('location: ../view/loading_page.php');
        } else {
            echo "<script>alert('Something went wrong! Try Again')</script>";
        }
    }
}
?>
<h2 class="top-headline">Select The Games You Play</h2>
<form method="post" action="<?php echo htmlspecialchars(@$_SERVER['PHP_SELF']); ?>">
    <div class="product-list">
        <div class="row" id="product_list">
            <?php foreach ($games as $key => $game): ?>
                <div class="column">
                    <div class="card">
                        <input type="checkbox" id="<?php echo $game['name'] ?>" value="<?php echo $game['name'] ?>"
                               name="selectedGames[]"/>
                        <label for="<?php echo $game['name'] ?>"><img alt="img"
                                                                      src="<?php echo $game['imgUrl'] ?>"/></label>
                        <p class="head-line"><?php echo $game['name']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="next-button">
        <input class="rectangular-button" type="submit" name="nextButton" value="Next">
    </div>
</form>
<footer>
    <?php include "../view/footer.php" ?>
</footer>

</body>
</html>
