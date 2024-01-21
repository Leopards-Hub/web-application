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
        <form method="post" action="">
            <div class="row d-flex justify-content-between pb-2">
                <div class="col-md-6" style="padding: 0;width:48%">
                    <label for="username" class="form-label custom-label" style="margin-left: 12px;">UserName</label>
                    <input type="text" class="form-control rounded-pill" name="username" id="username" placeholder="Enter your username" value="<?php echo htmlspecialchars($username); ?>">
                    <span class="text-danger"><?php echo $username_error; ?></span>
                </div>
                <div class="col-md-6" style="padding: 0;width:48%">
                    <label for="password" class="form-label custom-label" style="margin-left: 12px;">Password</label>
                    <input type="password" class="form-control rounded-pill" name="password" id="password" placeholder="Enter your password" value="<?php echo htmlspecialchars($password); ?>">
                    <span class="text-danger"><?php echo $password_error; ?></span>
                </div>
            </div>
            <div class="row d-flex justify-content-between pb-2">
                <div class="col-md-6" style="padding: 0;width:48%">
                    <label for="name" class="form-label custom-label" style="margin-left: 12px;">Name</label>
                    <input type="text" class="form-control rounded-pill" name="name" id="name" placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>">
                    <span class="text-danger"><?php echo $name_error; ?></span>
                </div>
                <div class="col-md-6" style="padding: 0;width:48%">
                    <label for="phone" class="form-label custom-label" style="margin-left: 12px;">Phone</label>
                    <input type="text" class="form-control rounded-pill" name="phone" id="phone" placeholder="x xxx xxx xxx" value="<?php echo htmlspecialchars($phone); ?>">
                    <span class="text-danger"><?php echo $phone_error; ?></span>
                </div>
            </div>
            <div class="row pb-2">
                <label for="email" class="form-label custom-label" style="margin-left: 12px;">Email</label>
                <input type="email" class="form-control rounded-pill" name="email" id="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>">
                <span class="text-danger"><?php echo $email_error; ?></span>
            </div>
            <div class="row p-1"></div>
            <div class="row d-flex flex-column align-items-center justify-content-center text-center">
                <p class="">You have an account? <a href="/login">Login now</a></p>
                <?php createButton("Register", "id-register", "send active") ?>
            </div>
        </form>

        </div>
    </div>
    <?php include_once 'components/footer.php'; ?>
</body>

</html>