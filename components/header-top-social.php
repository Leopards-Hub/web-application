<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
        include 'root/CSS/component/header-top-social.css.php';

    function generateSocial($color){
        echo "<div class='header-top-right'>
        <a href=''>
            <div class='header-top-right-bg $color'>
                <i class='fa fa-twitter twitter-icon' aria-hidden='true'></i>
            </div>
        </a>
        <a href=''>
            <div class='header-top-right-bg $color'>
                <i class='fa fa-facebook facebook-icon' aria-hidden='true'></i>
            </div>
        </a>
        <a href=''>
            <div class='header-top-right-bg $color'>
                <i class='fa fa-instagram instagram-icon' aria-hidden='true'></i>
            </div>
        </a>
        <a href=''>
            <div class='header-top-right-bg $color '>
                <i class='fa fa-github github-icon' aria-hidden='true'></i>
            </div>
        </a>
    </div>
    ";
    }

?>

