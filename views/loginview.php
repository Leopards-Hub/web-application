<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy Food Restaurant</title>
    <?php include 'root/CSS/htmlfont.css.php'; ?>
    <?php include 'root/CSS/login.css.php'; ?>
    <?php include_once 'components/linkbootstrap5.php'; ?>
</head>

<body>
    <?php include_once 'components/header.php'; ?>
    <div class="container-fluid" id="container-fluid">
        <div class="container-fluid pb-5" id="bg-1">
            <div class="container-fluid bg-1 p-5" id="bg">
                <?php include 'components/title.php'; ?>
                <?php createTitle("Login", "", "", "title-h1", "", "", "hero-title"); ?>
            </div>
        </div>
        <div class="container-fluid bg-2 p-5 bg-white" id="bg-2">
        </div>
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <label for="Username" class="col-form-label custom-label">Username</label>
                    <input type="text" class="form-control rounded-pill" name="Username" id="Username" value="" placeholder="Enter the username">
                </div>
                <div class="row">
                    <label for="Password" class="col-form-label custom-label">Password</label>
                    <input type="password" class="form-control rounded-pill" name="Password" id="Password" placeholder="Enter the password">
                </div>
                <div class="row d-flex flex-column align-items-center justify-content-center pt-4 text-center">
                    <?php if (!empty($_SESSION['error_message'])) : ?>
                        <p class="text-danger"><?php echo $_SESSION['error_message']; ?></p>
                        <?php unset($_SESSION['error_message']); ?>
                    <?php endif; ?>
                    <p class="">You don't have an account?<a href="register">Register now</a></p>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once 'components/footer.php'; ?>
</body>

</html>