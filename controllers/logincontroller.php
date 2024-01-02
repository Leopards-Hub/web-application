<?php

require_once '../database/database.php';
require_once '../models/loginmodel.php';

class LoginController {
    public function index() {
        require_once 'views/loginview.php';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Username']) && isset($_POST['Password'])) {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $loginModel = new LoginModel($db);
        $User = $loginModel->loginUser($Username, $Password);

        if ($User) {
            $_SESSION['user'] = $User;

            // Redirect based on user role
            switch ($User['role']) {
                case 'admin':
                    header('Location: ../views/adminview.php');
                    break;
                case 'customer':
                    header('Location: /controllers/views/HomeView.php');
                    break;
                case 'waiter':
                    header('Location: ../views/adminview.php');
                    break;
                case 'chef':
                    header('Location: ../views/adminview.php');
                    break;
                default:
                    header('Location: index.php');
            }
            exit();
        } else {
            echo "Invalid username or password";
        }
    }
}
?>
