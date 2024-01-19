<?php

    require_once 'database/database.php';

    function FoodItem(){
        $db = connectdb();
        $sql = "SELECT * FROM `dish` ORDER BY dish_id ASC";
        $stmt = $db->query($sql);
        $stmt -> execute();
        $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        $allproduct = $stmt -> fetchAll();
        $db = null;
        return $allproduct;
    }

    function search(){
        $db = connectdb();
        $searchValue = '';
    
        if (isset($_POST['search'])) {
            $searchValue = "%" . $_POST["search"] . "%";
            $sql = "SELECT * FROM `dish` WHERE Category LIKE :searchValue ORDER BY dish_id ASC";
        } elseif (isset($_POST['All'])) {
            $sql = "SELECT * FROM `dish` ORDER BY dish_id ASC";
        } elseif (isset($_POST['Breakfast'])) {
            $searchValue = $_POST['Breakfast'];
            
            $sql = "SELECT * FROM `dish` WHERE Category = :searchValue ORDER BY dish_id ASC";
        } elseif (isset($_POST['Main'])) {
            $searchValue = $_POST['Main'];
            $sql = "SELECT * FROM `dish` WHERE Category = :searchValue ORDER BY dish_id ASC";
        } elseif (isset($_POST['Drinks'])) {
            $searchValue = $_POST['Drinks'];
            $sql = "SELECT * FROM `dish` WHERE Category = :searchValue ORDER BY dish_id ASC";
        } elseif (isset($_POST['Desserts'])) {
            $searchValue = $_POST['Desserts'];
            $sql = "SELECT * FROM `dish` WHERE Category = :searchValue ORDER BY dish_id ASC";
        }
    
        if ($searchValue !== '') {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':searchValue', $searchValue, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }
    
        $db = null;
        return $result;
    }
    

?>