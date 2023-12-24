<?php
$routes 
    // Lấy tên file từ đường dẫn
    $currentURL = "http://localhost:3000/views/HomeView.php";
    $filename = basename($currentURL, ".php"); // Lấy phần tên file mà không bao gồm phần mở rộng .php
    
    // In tên file
    echo $filename;