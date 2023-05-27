<?php
require_once __DIR__ . '/../dtos/CartItemUnit.php';
require_once __DIR__ . '/../dtos/GameUnit.php';
$status = 'null';

//kiểm tra đăng nhập
if (isset($_COOKIE['user'])) {
    $userID = $_COOKIE['user'];

    if (isset($_GET['gameId'])) {
        $gameId = $_GET['gameId'];


        if ($gameId == null) {
            $status = 'null';
        } else if ($gameId == "-1") {
            // trường hợp xóa một sản phẩm ra khỏi đơn hàng
            $gameIdDelete = $_GET['gameIdDelete'];
            $cartItem = new CartItem();
            $cartItem->setAccID($userID);
            $cartItem->setGameID($gameIdDelete);
            $cartItemUnit = new CartItemUnit();
            $cartItemUnit->subCartItem($cartItem);
            $gameUnit = new GameUnit();
            $listGameByAcc = $gameUnit->getListGameByAccID($userID);
            $sumItem = 0;
            $sumPrice = 0;
            foreach ($listGameByAcc as $item) {
                $sumItem++;
                $sumPrice += $item->getPrice();
            }
            $sumPriceFormat = number_format($sumPrice) . 'đ';
        } else {
            //trường hợp chọn thêm 1 game để đưa vào giỏ hàng
            $cartItem = new CartItem();
            $cartItem->setAccID($userID);
            $cartItem->setGameID($gameId);
            $cartItemUnit = new CartItemUnit();
            $cartItemUnit->addCartItem($cartItem);
            $gameUnit = new GameUnit();
            $listGameByAcc = $gameUnit->getListGameByAccID($userID);
            $sumItem = 0;
            $sumPrice = 0;
            foreach ($listGameByAcc as $item) {
                $sumItem++;
                $sumPrice += $item->getPrice();
            }
            $sumPriceFormat = number_format($sumPrice) . 'đ';
            // foreach ($listGameByAcc as $item) {
            //     echo $item->getGameId();
            //     echo "<br>";
            //     echo $item->getCategoryId();
            //     echo "<br>";
            //     echo $item->getName();
            //     echo "<br>";
            //     echo $item->getIntro();
            //     echo "<br>";
            //     echo $item->getPriceFormat();
            //     echo "<br>";
            //     echo $item->getDetail();
            //     echo "<br>";
            //     echo $item->getConfiguration();
            //     echo "<br>";
            //     echo $item->getDeveloper();
            //     echo "<br>";
            //     echo $item->getReleaseDateFormat();
            //     echo "<br>";
            //     echo $item->getImgURL();
            //     echo "<br>";
            //     echo "<br>";
            // }
            $status = 'ok';
        }
    } else {
        //trường hợp vào giỏ hàng
        $gameUnit = new GameUnit();
        $listGameByAcc = $gameUnit->getListGameByAccID($userID);
        $sumItem = 0;
            $sumPrice = 0;
            foreach ($listGameByAcc as $item) {
                $sumItem++;
                $sumPrice += $item->getPrice();
            }
            $sumPriceFormat = number_format($sumPrice) . 'đ';
        // foreach ($listGameByAcc as $item) {
        //     echo $item->getGameId();
        //     echo "<br>";
        //     echo $item->getCategoryId();
        //     echo "<br>";
        //     echo $item->getName();
        //     echo "<br>";
        //     echo $item->getIntro();
        //     echo "<br>";
        //     echo $item->getPriceFormat();
        //     echo "<br>";
        //     echo $item->getDetail();
        //     echo "<br>";
        //     echo $item->getConfiguration();
        //     echo "<br>";
        //     echo $item->getDeveloper();
        //     echo "<br>";
        //     echo $item->getReleaseDateFormat();
        //     echo "<br>";
        //     echo $item->getImgURL();
        //     echo "<br>";
        //     echo "<br>";
        // }
        $status = 'ok';
    }

} else {
    //chưa đăng nhập thì quay về trang đăng nhập
    echo '<script>window.location.href = "login.php";</script>';

}



?>