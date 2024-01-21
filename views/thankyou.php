<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <!-- Update the Bootstrap version to 5.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <?php include 'root/CSS/htmlfont.css.php'; ?>
    <style>
        h1{
            font-size: 500px;
            font-weight: bold;
            font-family:  sans-serif;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div>
        <?php
        include_once 'components/header.php';
        ?>
    </div>
    <div class="container d-flex flex-column align-items-center justify-content-center text-align-center mt-5">
        <!-- Adjust the classes accordingly based on your design -->
        <h1 class="display-4 p-5"><strong>THANK YOU</strong></h1>
    </div>
    <div>
        <?php
        include_once 'components/footer.php';
        ?>
    </div>

    <!-- Bootstrap 5 JS and Popper.js (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
