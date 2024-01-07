<?php

require_once 'database/database.php';
require_once 'models/registermodel.php';

$username_error = "";
$password_error = "";
$name_error = "";
$phone_error = "";
$email_error = "";
$username = "";
$password = "";
$name = "";
$phone = "";
$email = "";

$form_valid = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Validate the input fields
    if (!validate_username($username)) {
        $username_error = "Invalid username";
    }

    if (!validate_password($password)) {
        $password_error = "Invalid password";
    }

    if (!validate_name($name)) {
        $name_error = "Invalid name";
    }

    if (!validate_phone($phone)) {
        $phone_error = "Invalid phone number";
    }

    if (!validate_email($email)) {
        $email_error = "Invalid email";
    }

    // If all fields are valid, proceed with registration
    if (empty($username_error) && empty($password_error) && empty($name_error) && empty($phone_error) && empty($email_error)) {
        $registration_result = register_user($db, $username, $password, $name, $phone, $email, 'customer');

        if ($registration_result) {
            // Registration successful, redirect to the login page
            header('Location: /web-application/login');
            exit(); // Ensure that no further code is executed after the redirect
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}

require_once 'views/registerview.php';
?>
