<?php

require_once __DIR__.'/database/database.php';
require_once __DIR__.'/../model/Category.php';

class CategoryUnit {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getListCategory() {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM tbl_category");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $categories = [];

        // Lặp qua kết quả và tạo đối tượng Category
        foreach ($result as $row) {
            $category = new Category();
            $category->setCategoryID($row['category_id']);
            $category->setCategoryName($row['category_name']);
            $categories[] = $category;
        }
        // Trả về mảng đối tượng Category
        return $categories;
    }
}

?>