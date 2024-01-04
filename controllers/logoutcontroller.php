<?php
// Include your login model file here
require_once 'models/loginmodel.php';

// Create an instance of your login model class
$loginModel = new LoginModel($db);

// Call the logoutUser() method
$loginModel->logoutUser();

// Redirect to the login page after successful logout
header("Location: /login");
exit();
?>