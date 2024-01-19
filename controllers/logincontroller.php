<?php

require_once 'database/database.php';
require_once 'models/loginmodel.php';

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
                    header('Location: ./admin');
                    exit();
                case 'customer':
                    header('Location: ./home');
                    exit();
            }
        } else {
            $_SESSION['error_message'] = "Invalid username or password";
            $_SESSION['username_input'] = ''; // Xóa giá trị của biến $_SESSION['username_input']
        }
    }
}

require_once 'views/loginview.php';
?>