<?php
require_once "models/admin/booktablemodel.php";

$heading = "Post Page";

$statement = $db->prepare("SELECT * FROM Booktable ");
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
    if (!empty($_POST['User_id']) && !empty($_POST['Table_id']) && !empty($_POST['time']) ) {
        $User_id = $_POST['User_id'];
        $Table_id = $_POST['Table_id'];
        $time = $_POST['time'];
        $create = createdBookTable($User_id,$Table_id, $time);

        if ($create) {
            header("Location: /controllers/admin/booktablecontroller.php");
            echo "created successfully";
        } else {
            echo "Failed to create book table";
        }
    } else {
        echo "Missing data";
    }
}
function handleEdit() {
    // Xử lý sửa
    if (isset($_POST['Book_id']) && !empty($_POST['User_id']) && !empty($_POST['Table_id']) && !empty($_POST['time']) ) {
        $Book_id = $_POST['Book_id'];
        $User_id = $_POST['User_id'];
        $Table_id = $_POST['Table_id'];
        $time = $_POST['time'];

        $edit = updateBookTable($Book_id,$User_id,$Table_id, $time );

        if ($edit) {
            header("Location: /controllers/admin/booktablecontroller.php");
            echo " edited successfully";
        } else {
            echo "Failed to edit book table";
        }
    } else {
        echo "Missing data or ID";
    }
}


function handleDelete() {
    // Xử lý xóa
    if (isset($_POST['Book_id'])) {
        $Book_id = $_POST['Book_id'];

        $delete =  deleteBookTable($Book_id);

        if ($delete) {
            header("Location: /controllers/admin/booktablecontroller.php");
            echo "deleted successfully";
        } else {
            echo "Failed to delete book table";
        }
    } else {
        echo "Missing ID";
    }
}


require "views/admin/booktableview.php";
?>
