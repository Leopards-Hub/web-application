<?php
require_once "database/database.php";

function createDish($Dishname, $DishImage, $Details, $Price, $db)
{

    $statement = $db->prepare("INSERT INTO `Dish` (`Dish_name`, `Image_dish`, `Detail`, `Price`) VALUES (?, ?, ?, ?)");
    $createTable=  $statement->execute([$Dishname, $DishImage, $Details, $Price]);

    return  $createTable;
}

function getDish(int $id): array
{
    global $db;
    $statement = $db->prepare("SELECT * FROM `Dish` WHERE dish_id = ?");
    $statement->execute([$id]);
    return $statement->fetch();
}

function getDishes(): array
{
    global $db;
    $statement = $db->prepare("SELECT * FROM `Dish`");
    $statement->execute();
    return $statement->fetchAll();
}

function updateDish($Dishname, $DishImage,  $Details, $Price, $DishId, $db): bool
{
    // global $db;
    $statement = $db->prepare("UPDATE `Dish` SET `Dish_name` = ?, `Image_dish` = ?,  `Detail` = ?, `Price` = ? WHERE dish_id = ?");
    $statement->execute([$Dishname, $DishImage,  $Details, $Price, $DishId]);

    return $statement->rowCount() > 0; // Trả về true nếu có ít nhất một dòng được ảnh hưởng
}

function deleteDish($dish_id, $db): bool
{
    // global $db;
    
    try {
        $statement = $db->prepare("DELETE FROM `Dish` WHERE dish_id = :dish_id;");
        $statement->bindParam(":dish_id", $dish_id);
        $result = $statement->execute();

        // Kiểm tra xem có bản ghi nào bị xóa hay không
        if ($result && $statement->rowCount() > 0) {
            // Xóa thành công
            return true;
        } else {
            // Không có bản ghi nào bị xóa
            return false;
        }
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        // In hoặc ghi log $e->getMessage() để xem thông báo lỗi chi tiết
        return false;
    }
}

?>