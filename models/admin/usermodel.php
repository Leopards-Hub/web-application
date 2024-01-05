<?php
require_once "database/database.php";

function createUser($Username, $password, $Name, $Phone, $Email, $Role,$db): bool
{
    // global $db;
    $statement = $db->prepare("INSERT INTO `Users` (`Username`, `Password`, `Name`, `Phone`,`Email`,`role`) VALUES (?, ?, ?, ?, ?, ?)");
    $createUser=  $statement->execute([$Username, $password, $Name, $Phone, $Email, $Role]);

    return  $createUser;
}



function getUser(int $id): array
{
    global $db;
    $statement = $db->prepare("SELECT * FROM `Users` WHERE user_id = ?");
    $statement->execute([$id]);
    return $statement->fetch();
}

function getUsers(): array
{
    global $db;
    $statement = $db->prepare("SELECT * FROM `Users`");
    $statement->execute();
    return $statement->fetchAll();
}

function updateUser($username, $password, $name, $phone, $Email,$Role, $user_id,$db): bool
{
    // global $db;
    $statement = $db->prepare("UPDATE `Users` SET `Username` = ?, `Password` = ?, `Name` = ?,`Phone` = ?,`Email` = ?,`role` = ? WHERE user_id = ?");
    $statement->execute([$username, $password, $name, $phone, $Email,$Role, $user_id]);

    return $statement->rowCount() > 0; // Trả về true nếu có ít nhất một dòng được ảnh hưởng
}


function deleteUser($user_id,$db): bool
{
    // global $db;
    
    try {
        $statement = $db->prepare("DELETE FROM `Users` WHERE user_id = :user_id;");
        $statement->bindParam(":user_id", $user_id);
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