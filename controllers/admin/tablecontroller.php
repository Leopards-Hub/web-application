<?php
require_once "../../models/admin/tablemodel.php";

$heading = "Post Page";

$statement = $db->prepare("SELECT * FROM `Table` ");
$statement->execute();
$posts = $statement->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action']; // Thêm dòng này để lấy hành động từ form

    switch ($action) {
        case 'create':
            handleCreate();
            break;
        case 'edit':
            handleEdit();
            break;
        case 'delete':
            handleDelete();
            break;
        default:
            echo "Invalid action";
    }
}

function handleCreate() {
    if (!empty($_POST['Tablename']) && !empty($_POST['numberchair']) && !empty($_POST['status'])) {
        $Tablename = $_POST['Tablename'];
        $numberchair = $_POST['numberchair'];
        $status = $_POST['status'];

        $create = createTable($Tablename, $numberchair, $status);

        if ($create) {
            header("Location: /controllers/admin/tablecontroller.php");
            echo " created successfully";
        } else {
            echo "Failed to create table";
        }
    } else {
        echo "Missing data";
    }
}
function handleEdit() {
    // Xử lý sửa
    if (isset($_POST['table_id']) && !empty($_POST['Tablename']) && !empty($_POST['numberchair']) && !empty($_POST['status'])) {
        $tableId = $_POST['table_id'];
        $Tablename = $_POST['Tablename'];
        $numberchair = $_POST['numberchair'];
        $status = $_POST['status'];

        $edit = updateTable($Tablename, $numberchair, $status, $tableId);

        if ($edit) {
            header("Location: /controllers/admin/tablecontroller.php");
            echo "edited successfully";
        } else {
            echo "Failed to edit table";
        }
    } else {
        echo "Missing data or ID";
    }
}


function handleDelete() {
    // Xử lý xóa
    if (isset($_POST['table_id'])) {
        $table_id = $_POST['table_id'];

        $delete = deleteTable($table_id);

        if ($delete) {
            header("Location: /controllers/admin/tablecontroller.php");
            echo "deleted successfully";
        } else {
            echo "Failed to delete table";
        }
    } else {
        echo "Missing ID";
    }
}

require "../../views/admin/tableview.php";
?>
