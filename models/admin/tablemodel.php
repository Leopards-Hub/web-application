<?php
require_once "database/database.php";

function createTable($Tablename, $numberchair, $status, $db)
{

    $statement = $db->prepare("INSERT INTO `table` (`Tablename`, `numberchair`, `status`) VALUES (?, ?, ?)");
    $createTable=  $statement->execute([$Tablename, $numberchair, $status]);

    return  $createTable;
}

function getTable(int $id): array
{
    global $db;
    $statement = $db->prepare("SELECT * FROM `Table` WHERE table_id = ?");
    $statement->execute([$id]);
    return $statement->fetch();
}

function getTables(): array
{
    global $db;
    $statement = $db->prepare("SELECT * FROM `Table`");
    $statement->execute();
    return $statement->fetchAll();
}

function updateTable($Tablename, $numberchair, $status, $table_id, $db): bool
{
    // global $db;
    $statement = $db->prepare("UPDATE `Table` SET `Tablename` = ?, `numberchair` = ?, `status` = ? WHERE table_id = ?");
    $statement->execute([$Tablename, $numberchair, $status, $table_id]);

    return $statement->rowCount() > 0; // Trả về true nếu có ít nhất một dòng được ảnh hưởng
}

function deleteTable($table_id, $db): bool
{
    // global $db;
    
    try {
        $statement = $db->prepare("DELETE FROM `Table` WHERE table_id = :table_id;");
        $statement->bindParam(":table_id", $table_id);
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