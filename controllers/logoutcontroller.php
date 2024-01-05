
<?php 
    
    if ($_SESSION['user']) {
        // Xoá các biến session
        session_unset();    
        session_destroy();
        header("Location: /web-application/home");
exit();
    }
    
?>