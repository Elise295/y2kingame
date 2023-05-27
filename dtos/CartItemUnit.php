<?php

require_once __DIR__ . '/database/database.php';
require_once __DIR__ . '/../model/CartItem.php';

class CartItemUnit
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    

    public function getListCartItemByAcc($accId)
    {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM tbl_cart_item WHERE acc_id = :acc_id");
        $stmt->bindParam(':acc_id', $accId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $cartItems = [];

        foreach ($result as $row) {
            $cartItem = new CartItem();
            $cartItem->setGameID($row['game_id']);
            $cartItem->setAccID($row['acc_id']);

            $cartItems[] = $cartItem;
        }
        return $cartItems;
    }

    public function addCartItem($item)
    {
        try {
            $conn = $this->db->getConnection();
            $stmt = $conn->prepare("INSERT INTO tbl_cart_item (game_id, acc_id) VALUES (:game_id, :acc_id)");
            $stmt->bindValue(':game_id', $item->getGameID());
            $stmt->bindValue(':acc_id', $item->getAccID());
            $stmt->execute();
        } catch (PDOException $e) {
            
        }
    }
    public function subCartItem($item)
    {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("DELETE FROM tbl_cart_item WHERE game_id = :game_id AND acc_id = :acc_id");
        $stmt->bindValue(':game_id', $item->getGameID());
        $stmt->bindValue(':acc_id', $item->getAccID());
        $stmt->execute();
    }

}

?>