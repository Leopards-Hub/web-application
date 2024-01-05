<?php
require_once "models/admin/dishmodel.php";

$heading = "Post Page";

$statement = $db->prepare("SELECT * FROM `Dish` ");
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
    if (!empty($_POST['dishname']) && !empty($_POST['imagedish']) && !empty($_POST['details']) && !empty($_POST['price'])) {
        $Dishname = $_POST['dishname'];
        $DishImage = $_POST['imagedish'];
        $Details = $_POST['details'];
        $Price = $_POST['price'];

        $create = createDish($Dishname, $DishImage, $Details, $Price, $db);
        
        if ($create) {
            header("Location: dish");
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
    if (isset($_POST['dish_id']) && !empty($_POST['Dish_name']) && !empty($_POST['Image_dish']) && !empty($_POST['Detail']) && !empty($_POST['Price'])) {
        $DishId = $_POST['dish_id'];
        $Dishname = $_POST['Dish_name'];
        $DishImage = $_POST['Image_dish'];
        $Details = $_POST['Detail'];
        $Price = $_POST['Price'];

        $edit = updateDish($Dishname, $DishImage, $Details, $Price, $DishId, $db);

        if ($edit) {
            header("Location: dish");
            echo "edited successfully";
        } else {
            echo "Failed to edit table";
        }
    } else {
        echo "Missing data or ID";
    }
}


function handleDelete($db) {
    // Xử lý xóa
    if (isset($_POST['dish_id'])) {
        $dish_id = $_POST['dish_id'];

        $delete = deleteDish($dish_id, $db);

        if ($delete) {
            header("Location: dish");
            echo "deleted successfully";
        } else {
            echo "Failed to delete table";
        }
    } else {
        echo "Missing ID";
    }
}
require "views/admin/dishview.php";
?>
