<?php
require_once __DIR__ . '/../dtos/GameUnit.php';
$status = 'null';
$state = 'default';
$valueState = 'default';

if (isset($_GET['categoryId'])) {
    $categoryId = $_GET['categoryId'];


    if ($categoryId == null) {
        $gameUnit = new GameUnit();
        $listGameByCategory = $gameUnit->getAllGame();
        $status = 'ok';
    } else {
        $gameUnit = new GameUnit();
        $listGameByCategory = $gameUnit->getListGameByCategory($categoryId);
        foreach ($listGameByCategory as $item) {
            
        }
        $status = 'ok';
        $state = 'byCategory';
        $valueState = $categoryId;
    }
}else{
    if(isset($_GET['search'])){
        $categoryId = null;
        $gameUnit = new GameUnit();
        $listGameByCategory = $gameUnit->searchGame($_GET['search']);
        $status = 'ok';
        $state = 'search';
        $valueState = $_GET['search'];
    }else{
        $categoryId = null;
        $gameUnit = new GameUnit();
        $listGameByCategory = $gameUnit->getAllGame();
        $status = 'ok';
        $state = 'byCategory';
        $valueState = 'all';
    }
   
}
?>