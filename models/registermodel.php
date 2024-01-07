<?php

function validate_username($username)
{
    return ctype_alnum($username);
}

function validate_password($password)
{
    return strlen($password) >= 8;
}

function validate_name($name)
{
    // Check if the name contains at least one letter
    return preg_match('/[a-zA-Z]/', $name);
}


function validate_phone($phone)
{
    return preg_match('/^\d{10}$/', $phone);
}

function validate_email($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function register_user($db, $username, $password, $name, $phone, $email, $role = 'users')
{
    try {
        if (!$db) {
            throw new Exception("Database connection is null.");
        }

        $query = "INSERT INTO Users (Username, Password, Name, Phone, Email, role) VALUES (:username, :password, :name, :phone, :email, :role)";
        $statement = $db->prepare($query);

        $statement->bindParam(":username", $username);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":role", $role);

        $result = $statement->execute();

        // Return true if registration is successful, false otherwise
        return $result;
    } catch (PDOException $e) {
        // Handle any database errors here
        echo "Registration failed. PDO Error: " . $e->getMessage();
        return false;
    } catch (Exception $e) {
        echo "Registration failed. Error: " . $e->getMessage();
        return false;
    }
}

?>
