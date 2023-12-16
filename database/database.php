<?php
  $host     = 'localhost'; // Because MySQL is running on the same computer as the web server
  $database = 'seafoodrestaurant'; // Name of the database you use (you need first to CREATE DATABASE in MySQL)
  $user     = 'root'; // Default username to connect to MySQL is root
  $password = 'mysql'; // Default password to connect to MySQL is empty

  // TO DO: CREATE CONNECTION TO DATABASE
  // Read file: https://www.w3schools.com/php/php_mysql_connect.asp
  try {
      $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
      // set the PDO error mode to exception
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }
?>
