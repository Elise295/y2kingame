<?php
require_once __DIR__ . '/../dtos/GameUnit.php';
$status = 'null';

if (isset($_GET['categoryId'])) {
    $categoryId = $_GET['categoryId'];

    if ($categoryId == null) {
        $gameUnit = new GameUnit();
        $listGameByCategory = $gameUnit->getAllGame();
        $status = 'ok';
    } else {
        $gameUnit = new GameUnit();
        $listGameByCategory = $gameUnit->getListGameByCategory($categoryId);
        $status = 'ok';
    }
}else{
    if(isset($_GET['search'])){
        $categoryId = null;
        $gameUnit = new GameUnit();
        $listGameByCategory = $gameUnit->searchGame($_GET['search']);
        $status = 'ok';
    }else{
        $categoryId = null;
        $gameUnit = new GameUnit();
        $listGameByCategory = $gameUnit->getAllGame();
        $status = 'ok';
    }
   
}
?>