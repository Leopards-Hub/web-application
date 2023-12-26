<?php 
    include 'components/button.php';
    include 'components/header-navbar.php';
    include 'root/CSS/component/header-navbar.css.php';
    include 'components/logo.php';
?>

<div class="header-navbarcontainer" >
    <div class="container-head">
        <?php
        // #AD343E #474747 #ffffff
            createLogo("#AD343E","#474747");

            generateNavbar($array_navbar_1,"");

            createButton($array_button[0],"set-table","");
        ?>
    </div>

</div>
