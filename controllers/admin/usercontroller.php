<?php
require_once "models/admin/usermodel.php";

$heading = "Post Page";

$statement = $db->prepare("SELECT * FROM `Users`");
$statement->execute();
$posts = $statement->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action']; // add this line to take action from Form

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
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['phone'])  && !empty($_POST['email']) && !empty($_POST['role'])) {
        $Username = $_POST['username'];
        $password = $_POST['password'];
        $Name = $_POST['name'];
        $Phone = $_POST['phone'];
        $Email = $_POST['email'];
        $Role = $_POST['role'];

        $create = createUser($Username, $password, $Name, $Phone, $Email, $Role,$db);

        if ($create) {
            header("Location: user");
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
    if (isset($_POST['user_id']) && !empty($_POST['Username']) && !empty($_POST['Password']) && !empty($_POST['Name']) && !empty($_POST['Phone']) && !empty($_POST['Email']) && !empty($_POST['role'])) {
        $user_id = $_POST['user_id'];
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $name = $_POST['Name'];
        $phone = $_POST['Phone'];
        $email = $_POST['Email'];
        $role = $_POST['role'];
        

        $edit = updateUser($username, $password, $name, $phone, $email,$role, $user_id,$db);

        if ($edit) {
            header("Location: user");
            echo "edited successfully";
        } else {
            echo "Failed to edit user";
        }
    } else {
        echo "Missing data or ID";
    }
}


function handleDelete($db) {
    // Xử lý xóa
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];

        $delete = deleteUser($user_id,$db);

        if ($delete) {
            header("Location: user");
            echo "deleted successfully";
        } else {
            echo "Failed to delete user";
        }
    } else {
        echo "Missing ID";
    }
}

require "views/admin/userview.php";
?>
