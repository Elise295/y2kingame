<?php

require_once __DIR__.'/database/database.php';
require_once __DIR__.'/../model/Game.php';

class GameUnit {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    public function getAllGame() {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM tbl_game");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $games = [];

        foreach ($result as $row) {
            $game = new Game();
            $game->setGameId($row['game_id']);
            $game->setCategoryID($row['category_id']);
            $game->setName($row['game_name']);
            $game->setIntro($row['game_intro']);
            $game->setPrice($row['game_price']);
            $game->setConfiguration($row['game_configuration']);
            $game->setDeveloper($row['game_developer']);
            $game->setReleaseDate($row['game_releasedate']);
            $game->setImgURL($row['image_url']);
            $games[] = $game;
        }
        return $games;
    }
    public function getListGameByCategory($categoryId) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM tbl_game WHERE category_id = :category_id");
        $stmt->bindParam(':category_id', $categoryId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $games = [];

        foreach ($result as $row) {
            $game = new Game();
            $game->setGameId($row['game_id']);
            $game->setCategoryID($row['category_id']);
            $game->setName($row['game_name']);
            $game->setIntro($row['game_intro']);
            $game->setPrice($row['game_price']);
            $game->setConfiguration($row['game_configuration']);
            $game->setDeveloper($row['game_developer']);
            $game->setReleaseDate($row['game_releasedate']);
            $game->setImgURL($row['image_url']);
            $games[] = $game;
        }
        return $games;
    }
    public function getListGameByAccID($accID) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("select * FROM tbl_game inner join tbl_cart_item on tbl_game.game_id = tbl_cart_item.game_id where acc_id = :acc_id");
        $stmt->bindParam(':acc_id', $accID);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $games = [];

        foreach ($result as $row) {
            $game = new Game();
            $game->setGameId($row['game_id']);
            $game->setCategoryID($row['category_id']);
            $game->setName($row['game_name']);
            $game->setIntro($row['game_intro']);
            $game->setPrice($row['game_price']);
            $game->setConfiguration($row['game_configuration']);
            $game->setDeveloper($row['game_developer']);
            $game->setReleaseDate($row['game_releasedate']);
            $game->setImgURL($row['image_url']);
            $games[] = $game;
        }
        return $games;
    }

    public function searchGame($search) {
        $games = [];
        if($search != null){
            $conn = $this->db->getConnection();
            $stmt = $conn->prepare("SELECT * FROM tbl_game WHERE game_name LIKE :search");
            $searchTerm = '%' . $search . '%';
            $stmt->bindParam(':search',$searchTerm);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
           
    
            foreach ($result as $row) {
                $game = new Game();
                $game->setGameId($row['game_id']);
                $game->setCategoryID($row['category_id']);
                $game->setName($row['game_name']);
                $game->setIntro($row['game_intro']);
                $game->setPrice($row['game_price']);
                $game->setConfiguration($row['game_configuration']);
                $game->setDeveloper($row['game_developer']);
                $game->setReleaseDate($row['game_releasedate']);
                $game->setImgURL($row['image_url']);
                $games[] = $game;
            }
        }
        
        return $games;
    }
}

?>