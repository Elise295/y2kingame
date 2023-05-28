<?php
require_once __DIR__ . '/../dtos/CategoryUnit.php';
$categoryUnit = new CategoryUnit();
$categoryList = $categoryUnit->getListCategory();
?>