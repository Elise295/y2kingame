<?php
require_once __DIR__ . '/../dtos/GameUnit.php';
require_once __DIR__ . '/../unit/sort.php';
$status = 'null';
$state = 'default';
$valueState = 'default';
$sort = 'default';
$categoryId = null;


//sort
//----- default option
if (isset($_GET['sortDefault'])) {

    if ($_GET['state'] == 'search') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price($gameUnit->searchGame($_GET['valueState']));
        $state = 'search';
        $valueState = $_GET['valueState'];
    } elseif ($_GET['state'] == 'categoryFilter') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price($gameUnit->getListGameByCategory($_GET['categoryId']));
        $state = 'categoryFilter';
        $valueState = $_GET['valueState'];
        $categoryId = $_GET['categoryId'];
    } elseif ($_GET['state'] == 'allCategory') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price($gameUnit->getAllGame());
        $state = 'default';
        $valueState = $_GET['valueState'];
    }
    $sort = 'default';
    return;
}
//-----by price option
if (isset($_GET['sortByPrice'])) {

    if ($_GET['state'] == 'search') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price($gameUnit->searchGame($_GET['valueState']));
        $state = 'search';
        $valueState = $_GET['valueState'];

    } elseif ($_GET['state'] == 'categoryFilter') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price($gameUnit->getListGameByCategory($_GET['categoryId']));
        $state = 'categoryFilter';
        $valueState = $_GET['valueState'];
        $categoryId = $_GET['categoryId'];
    } elseif ($_GET['state'] == 'allCategory') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price($gameUnit->getAllGame());
        $state = 'allCategory';
        $valueState = $_GET['valueState'];
    }
    $sort = 'sortByPrice';
    return;
}
//-----by price reverse option
if (isset($_GET['sortByPriceReverse'])) {

    if ($_GET['state'] == 'search') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price_reverse($gameUnit->searchGame($_GET['valueState']));
        $state = 'search';
        $valueState = $_GET['valueState'];

    } elseif ($_GET['state'] == 'categoryFilter') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price_reverse($gameUnit->getListGameByCategory($_GET['categoryId']));
        $state = 'categoryFilter';
        $valueState = $_GET['valueState'];
        $categoryId = $_GET['categoryId'];
    } elseif ($_GET['state'] == 'allCategory') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_price_reverse($gameUnit->getAllGame());
        $state = 'allCategory';
        $valueState = $_GET['valueState'];
    }
    $sort = 'sortByPriceReverse';
    return;
}
//-----by date option
if (isset($_GET['sortByDate'])) {

    if ($_GET['state'] == 'search') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_date($gameUnit->searchGame($_GET['valueState']));
        $state = 'search';
        $valueState = $_GET['valueState'];

    } elseif ($_GET['state'] == 'categoryFilter') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_date($gameUnit->getListGameByCategory($_GET['categoryId']));
        $state = 'categoryFilter';
        $valueState = $_GET['valueState'];
        $categoryId = $_GET['categoryId'];
    } elseif ($_GET['state'] == 'allCategory') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_date($gameUnit->getAllGame());
        $state = 'allCategory';
        $valueState = $_GET['valueState'];
    }
    $sort = 'sortByDate';
    return;
}
//-----by date reverse option
if (isset($_GET['sortByDateReverse'])) {

    if ($_GET['state'] == 'search') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_date_reverse($gameUnit->searchGame($_GET['valueState']));
        $state = 'search';
        $valueState = $_GET['valueState'];

    } elseif ($_GET['state'] == 'categoryFilter') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_date_reverse($gameUnit->getListGameByCategory($_GET['categoryId']));
        $state = 'categoryFilter';
        $valueState = $_GET['valueState'];
        $categoryId = $_GET['categoryId'];
    } elseif ($_GET['state'] == 'allCategory') {
        $gameUnit = new GameUnit();
        $listGameByCategory = sort_by_date_reverse($gameUnit->getAllGame());
        $state = 'allCategory';
        $valueState = $_GET['valueState'];
    }
    $sort = 'sortByDateReverse';
    return;
}



//search
if (isset($_GET['search'])) {
    $gameUnit = new GameUnit();
    $listGameByCategory = $gameUnit->searchGame($_GET['search']);
    $state = 'search';
    $valueState = $_GET['search'];
    return;
}

//categoryFilter
//-----lọc có id
if (isset($_GET['categoryId'])) {
    $gameUnit = new GameUnit();
    $listGameByCategory = $gameUnit->getListGameByCategory($_GET['categoryId']);
    $state = 'categoryFilter';
    $categoryId = $_GET['categoryId'];
    $valueState = $_GET['categoryId'];
    return;
}
//------ko có id => all
$gameUnit = new GameUnit();
$listGameByCategory = $gameUnit->getAllGame();
$state = 'allCategory';
$valueState = 'default';

?>