<?php 
class logincontroller{
    public function index(){
        require_once 'views/loginview.php';
    }
}
require_once 'models/loginmodel.php';
require_once './database/database.php';

$userModal = new UserModal($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $userModal->getUser($username, $password);

    if ($user) {
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['Username'];
        $_SESSION['name'] = $user['Name'];
        $_SESSION['role'] = $user['role'];

        header('Location: index.php');
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>