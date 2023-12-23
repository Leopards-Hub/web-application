<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Blog</title>
    <?php
        include '../components/linkbootstrap5.php';
    ?>
</head>
<body>
    <div>
        <?php
            include_once '../components/header.php';
        ?>
    </div>

    <div class="container" style="width:100%; display:flex; align-items: center; justify-content: center;">
        <?php
            include '../components/title.php';
            createTitle($array_title['h1'][3], $array_title['p'][1], '', 'title-h1-blog', 'title-p1');
        ?>
    </div>
    <div class="container">
        <div class="row" style="gap: 2em;">
            <?php
                include '../components/blogger-items.php';
                createBlog($params);
                createBlog($params);
            ?>
        </div>
    </div>

    <div>
        <?php
            include_once '../components/footer.php';
        ?>
    </div>
</body>
</html>