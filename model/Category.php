<?php
class Category {
    private $categoryId;
    private $categoryName;
    
    
    public function getCategoryID() {
        return $this->categoryId;
    }
    
    public function setCategoryID($categoryId) {
        $this->categoryId = $categoryId;
    }
    
    public function getCategoryName() {
        return $this->categoryName;
    }
    
    public function setCategoryName($categoryName) {
        $this->categoryName = $categoryName;
    }
}
?>