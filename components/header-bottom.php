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

            createButton("Login","login","");
        ?>
    </div>

</div>
<script>
    const btn_login =document.getElementById("btn-login");
    btn_login.addEventListener('click',() =>{
        window.location.href = "logincontroller";
    })
</script>
