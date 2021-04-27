<?php
require  '../model/db_connect.php';


function searchPlayer($region = null, $game = null, $offset = null){
    $conn = db_conn();
    $query = null;
    $query = "select * from player where region='$region' and selectedGames like '%$game%' limit 4 offset {$offset}";
    try {
        $result = $conn->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows;
    }catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return null;
    }
}