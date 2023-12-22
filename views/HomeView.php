<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../root/CSS/home.css.php'; ?>
    <title>Yummy Food Restaurant</title>
</head>

<body>
    <!-- init header -->
    <?php include '../components/header.php'; ?>

    <div class="container-fluid ">
        <!-- init header - body -->
        <div class="container-fluid " id="hero">
            <?php
            include '../components/title.php';
            createTitle($array_title['h1'][0], $array_title['p'][0], "", "title-h1", "title-p", "", "hero-title");
            ?>
            <div id="hero-button">
                <?php
                createButton($array_button[0], "btn-book-tb", "btn-primary");
                createButton($array_button[1], "btn-book-tb", "btn-second");
                ?>
            </div>
        </div>
        <!-- include section-menu -->
        <?php include '../components/menu.php'; ?>
        <div class="container-fluid bg-white" id="bg">
            <h2>Browse Our Menu</h2>
            <div class="menu-container">
                <?php
                // Loop through the array to create menu cards
                for ($i = 0; $i < count($array_menu['icon']); $i++) {
                    createMenuCard(
                        $array_menu['icon'][$i],
                        $array_menu['name'][$i],
                        $array_menu['content-menu'][$i]
                    );
                }
                ?>
            </div>
        </div>
        <div class="container-fluid bg-1" id="bg" style="height: 700px;">
            <div class="container d-md-flex align-items-center pt-5" id="bg-item">
                <div class="row" style="width: 100%;">
                    <div class="col-md-6">
                        <?php include '../components/contact-image.php';
                        generateContactImage($array_contact_image[0]);
                        ?>
                    </div>
                    <div class="col-md-6 pt-5">
                        <?php
                        createTitle("We provide healthy food for your family.", "Our story began with a vision to create a unique dining experience
                                that merges fine dining, exceptional service, and a vibrant ambiance. Rooted in city's rich culinary culture, we aim to honor our 
                                local roots while infusing a global palate.", "At place, we believe that 
                                dining is not just about food, but also about the overall experience. Our staff, renowned 
                                for their warmth and dedication, strives to make every visit an unforgettable event.", "content-title-h2", "content-title-p1", "content-title-p2");
                        createButton($array_button[2], "btn-more-about", "btn-second")
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white" id="bg">
            <div class="container pt-5">
                <h2 class="title-event-large">We also offer unique services for your events</h2>
                <div class="container-fluid d-flex flex-row pt-5 pb-5">
                    <?php include '../components/event.php'; ?>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-1" id="bg">
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row d-flex flex-row">
                            <div class="col-md-7 p-3" id="chef-left"></div>
                            <div class="col-md-5 d-flex flex-column pt-5 p-3">
                                <div class="mb-3" id="soup-top-right"></div>
                                <div id="grill-bottom-right"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <div class="container p-5">
                            <?php
                            createTitle("Fastest Food Delivery in City", "", "Our visual designer lets you quickly and of drag a down your way to customapps for both keep desktop."
                                , "content-title-h2", "", "content-title-p2"); ?>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <p class="col-md-2"></p>
                                <i class="fa fa-clock-o fa-lg col-md-2" aria-hidden="true" id="icon-fast-food"></i>
                                <p class="col-md-8" id="content-fast-food">Delivery within 30 minutes</p>
                            </div>
                            <div class="row">
                                <p class="col-md-2"></p>
                                <i class="fa fa-bookmark-o fa-lg col-md-2" aria-hidden="true" id="icon-fast-food"></i>
                                <p class="col-md-8" id="content-fast-food">Best Offer & Prices</p>
                            </div>
                            <div class="row">
                                <p class="col-md-2"></p>
                                <i class="fa fa-shopping-basket fa-lg col-md-2 " aria-hidden="true"
                                    id="icon-fast-food"></i>
                                <p class="col-md-8" id="content-fast-food">Online Services Available</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white pb-5" id="bg">
            <?php include '../components/comment.php'; ?>
        </div>
        <div class="container-fluid bg-1 p-5">
            <div class="container d-flex flex-row justify-content-between pb-5">
                <h2>Our Blog & Articles</h2>
                <?php createButton("Read All Articles", "btn-read", "btn-primary"); ?>

            </div>
            <div class="container pb-5">
                <?php include '../components/blogger-items.php'; ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php createBlogger($params[4], $class); ?>
                    </div>
                    <div class="col-md-6 d-flex flex-column gap-1">
                        <div class="row">
                            <div class="col-sm-6 p-2">
                                <?php createBlogger($params[0], ""); ?>
                            </div>
                            <div class="col-sm-6 p-2">
                                <?php createBlogger($params[1], ""); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 p-2">
                                <?php createBlogger($params[2], ""); ?>
                            </div>
                            <div class="col-sm-6 p-2">
                                <?php createBlogger($params[3], ""); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- init footer -->
    <?php include '../components/footer.php'; ?>
</body>

</html>