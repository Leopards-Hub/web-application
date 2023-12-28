<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy Food Restaurant</title>
    <?php include 'root/CSS/htmlfont.css.php'; ?>
    <?php include 'root/CSS/login.css.php'; ?>
    <?php
    include_once 'components/linkbootstrap5.php';
    ?>
</head>

<body>
    <?php include_once 'components/header.php'; ?>
    <div class="container-fluid" id="container-fluid" >
        <div class="container-fluid pb-5" id="bg-1">
            <div class="container-fluid bg-1 p-5" id="bg">
                <?php include 'components/title.php';
                createTitle("Login", "", "", "title-h1", "", "", "hero-title"); ?>
            </div>
        </div>
        <div class="container-fluid bg-2 p-5 bg-white " id="bg-2" >
        </div>
        <div class="container">
            <form action="" method="post" >
                <div class="row">
                    <label for="name" class="col-form-label custom-label">Username</label>
                    <input type="text" class="form-control rounded-pill" name="username" id="name" placeholder="Enter the username">
                </div>
                <div class="row">
                    <label for="password" class="col-form-label custom-label">Message</label>
                    <input type="password" class="form-control rounded-pill" name="password" id="password" placeholder="Enter the password">                </div>
                <div class="row d-flex flex-column align-items-center justify-content-center pt-4 text-center">
                    <p class="" >You don't have an account?<a href="<?php URL_ROOT.URL_SUBFLODER;?>registercontroller">Register now</a></p>
                    <?php createButton("Login", "id-login", "send active") ?>
                </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once 'components/footer.php'; ?>
</body>

</html>