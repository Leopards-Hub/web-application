<?php
require_once "database/database.php";
function createdBookTable($User_id,$Table_id, $time, $db): bool
{
  
    $statement = $db->prepare("INSERT INTO Booktable (`User_id`, `Table_id`, `time`) VALUES (?, ?, ?)");
    $createBookTable=  $statement->execute([$User_id, $Table_id, $time]);

    return  $createBookTable;
}



function getBookTable(int $id): array
{
    global $db;
    $statement = $db->prepare("SELECT * FROM Booktable WHERE  Book_id = ?");
    $statement->execute([$id]);
    return $statement->fetch();
}

function getBookTables(): array
{
    global $db;
    $statement = $db->prepare("SELECT * FROM Booktable");
    $statement->execute();
    return $statement->fetchAll();
}

function updateBookTable($Book_id, $User_id, $Table_id, $time, $db): bool
{
    //global $db;

    // Convert the input datetime to MySQL datetime format
    $formattedTime = date('Y-m-d H:i:s', strtotime($time));

    $statement = $db->prepare("UPDATE Booktable SET `User_id` = ?, `Table_id` = ?, `time` = ?  WHERE Book_id = ?");
    $statement->execute([$User_id, $Table_id, $formattedTime, $Book_id]);

    return $statement->rowCount() > 0;
}


function deleteBookTable($Book_id, $db): bool
{
    //global $db;
    
    try {
        $statement = $db->prepare("DELETE FROM Booktable WHERE Book_id = :Book_id;");
        $statement->bindParam(":Book_id", $Book_id);
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

function getAllIds($table, $id,$db): array
{
    //global $db;
    $statement = $db->prepare("SELECT $id FROM  `$table`");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_COLUMN);
    return $result;
}


?>