<?php
require_once "models/admin/tablemodel.php";
require_once "database/database.php";

$heading = "Post Page";

$statement = $db->prepare("SELECT * FROM `Table` ");
$statement->execute();
$posts = $statement->fetchAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action']; // Thêm dòng này để lấy hành động từ form

    switch ($action) {
        case 'create':
            handleCreate($db);
            break;
        case 'edit':
            handleEdit($db);
            break;
        case 'delete':
            handleDelete($db);
            break;
        default:
            echo "Invalid action";
    }
}

function handleCreate($db) {
    if (!empty($_POST['Tablename']) && !empty($_POST['numberchair']) && !empty($_POST['status'])) {
        $Tablename = $_POST['Tablename'];
        $numberchair = $_POST['numberchair'];
        $status = $_POST['status'];

        $create = createTable($Tablename, $numberchair, $status, $db);
        
        if ($create) {
            header("Location: table");
            echo " created successfully";
        } else {
            echo "Failed to create table";
        }
    } else {
        echo "Missing data";
    }
}
function handleEdit($db) {
    // Xử lý sửa
    if (isset($_POST['table_id']) && !empty($_POST['Tablename']) && !empty($_POST['numberchair']) && !empty($_POST['status'])) {
        $tableId = $_POST['table_id'];
        $Tablename = $_POST['Tablename'];
        $numberchair = $_POST['numberchair'];
        $status = $_POST['status'];

        $edit = updateTable($Tablename, $numberchair, $status, $tableId, $db);

        if ($edit) {
            header("Location: table");
            echo "edited successfully";
        } else {
            echo "Failed to edit table";
        }
    } else {
        echo "Missing data or ID";
    }
}


function handleDelete( $db) {
    // Xử lý xóa
    if (isset($_POST['table_id'])) {
        $table_id = $_POST['table_id'];

        $delete = deleteTable($table_id, $db);

        if ($delete) {
            header("Location: table");
            echo "deleted successfully";
        } else {
            echo "Failed to delete table";
        }
    } else {
        echo "Missing ID";
    }
}
require "views/admin/tableview.php";
?>
