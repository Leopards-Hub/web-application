<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy Food Restaurant</title>
    <?php include 'root/CSS/htmlfont.css.php'; ?>
    <?php include 'root/CSS/register.css.php'; ?>
    <?php
    include_once 'components/linkbootstrap5.php';
    ?>
</head>

<body>
    <?php include_once 'components/header.php'; ?>
    <div class="container-fluid" id="container-fluid">
        <div class="container-fluid pb-5" id="bg-1">
            <div class="container-fluid bg-1 p-5" id="bg">
                <?php include 'components/title.php';
                createTitle("Register", "", "", "title-h1", "", "", "hero-title"); ?>
            </div>
        </div>
        <div class="container-fluid bg-2 p-5 bg-white " id="bg-2">
        </div>
        <div class="container">
            <form>
                <div class="row d-flex justify-content-between pb-2" >
                    <div class="col-md-6" style="padding: 0;width:48%">
                        <label for="username" class="form-label custom-label"
                            style="margin-left: 12px;">UserName</label>
                        <input type="text" class="form-control rounded-pill" name="username" id="name"
                            placeholder="Enter your username">
                    </div>
                    <div class="col-md-6" style="padding: 0;width:48%">
                        <label for="password" class="form-label custom-label"
                            style="margin-left: 12px;">Password</label>
                        <input type="text" class="form-control rounded-pill" name="password" id="password"
                            placeholder="Enter your password">
                    </div>
                </div>
                <div class="row d-flex justify-content-between pb-2">
                    <div class="col-md-6" style="padding: 0;width:48%">
                        <label for="name" class="form-label custom-label" style="margin-left: 12px;">Name</label>
                        <input type="text" class="form-control rounded-pill" name="name" id="name"
                            placeholder="Enter your name">
                    </div>
                    <div class="col-md-6" style="padding: 0;width:48%">
                        <label for="phone" class="form-label custom-label" style="margin-left: 12px;">Phone</label>
                        <input type="number" class="form-control rounded-pill" name="phone" id="phone"
                            placeholder="x xxx xxx xxx">
                    </div>
                </div>
                <div class="row pb-2">
                    <label for="email" class="form-label custom-label" style="margin-left: 12px;">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" placeholder="Enter your email">
                </div>
                <div class="row p-1"></div>
                <div class="row d-flex flex-column align-items-center justify-content-center text-center">
                    <p class="" >You have an account?<a href="<?php URL_ROOT.URL_SUBFLODER;?>logincontroller">Login now</a></p>
                    <?php createButton("Register", "id-register", "send active") ?>
                </div>
            </form>
        </div>
    </div>
    <?php include_once 'components/footer.php'; ?>
</body>

</html>