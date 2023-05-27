<?php
class CartItem {
    private $gameID;
    private $accId;
    
    
    public function getGameID() {
        return $this->gameID;
    }
    
    public function setGameID($gameID) {
        $this->gameID = $gameID;
    }
    
    public function getAccID() {
        return $this->accId;
    }
    
    public function setAccID($accId) {
        $this->accId = $accId;
    }
}
?>