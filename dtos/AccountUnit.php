<?php

require_once __DIR__.'/database/database.php';
require_once __DIR__.'/../model/Account.php';

class AccountUnit {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAccount($userName, $password) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM tbl_account WHERE user_name = :userName AND password = :password");
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $account = new Account();
            $account->setAccID($result['acc_id']);
            $account->setUserName($result['user_name']);
            $account->setPassword($result['password']);
            $account->setName($result['acc_name']);
            $account->setPhone($result['acc_phone']);
            $account->setAddress($result['acc_address']);
            return $account;
        } else {
            return null;
        }
    }
}

?>