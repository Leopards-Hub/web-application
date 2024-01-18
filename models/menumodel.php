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

?>