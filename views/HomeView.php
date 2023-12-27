<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'root/CSS/home.css.php'; ?>
    <?php include 'root/CSS/htmlfont.css.php'; ?>
    <?php include_once 'components/linkbootstrap5.php';?>
    <title>Yummy Food Restaurant</title>
</head>

<body>
    <!-- init header -->
    <?php include 'components/header.php'; ?>

    <div class="container-fluid ">
        <!-- init header - body -->
        <div class="container-fluid " id="hero">
            <?php
            include 'components/title.php';
            createTitle($array_title['h1'][0], $array_title['p'][0], "", "title-h1", "title-p", "", "hero-title");
            ?>
            <div id="hero-button">
                <?php
                createButton($array_button[0], "book-tb", "btn-primary");
                createButton($array_button[1], "explore", "btn-second");
                ?>
            </div>
        </div>
        <!-- include section-menu -->
        <?php include 'components/menu.php'; ?>
        <div class="container-fluid bg-white" id="bg">
            <h2>Browse Our Menu</h2>
            <div class="container d-flex flex-row justify-content-between gap-2">
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
                <div class="row justify-content-center align-items-center margin-center" style="width: 100%;">
                    <div class="col-md-6">
                        <?php include 'components/contact-image.php';
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
                    <?php include 'components/event.php'; ?>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-1" id="bg">
            <div class="container p-5">
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
                        <div class="container-fluid gap-4">
                            <div class="row align-items-center">
                                <p class="col-md-2"></p>
                                <svg class="col-md-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <circle cx="15" cy="15" r="15" fill="#AD343E" />
                                    <path d="M7.53504 5.02349V7.53516L9.41879 9.41891M13.1863 7.53516C13.1863 10.6563 10.6561 13.1864 7.53504 13.1864C4.41394 13.1864 1.88379 10.6563 1.88379 7.53516C1.88379 4.41406 4.41394 1.88391 7.53504 1.88391C10.6561 1.88391 13.1863 4.41406 13.1863 7.53516Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" transform="translate(7.5, 7.5)"/>
                                </svg>
                                <p class="col-md-8" id="content-fast-food">Delivery within 30 minutes</p>
                            </div>
                            <div class="row align-items-center">
                                <p class="col-md-2"></p>
                                <svg class="col-md-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <circle cx="15" cy="15" r="15" fill="#AD343E" />
                                    <path d="M10.6513 15.791L14.4188 12.0235M10.9653 12.3375H10.9716M14.1049 15.477H14.1111M16.9305 20.1864V10.1397C16.9305 9.44617 16.3682 8.88391 15.6746 8.88391H9.39548C8.7019 8.88391 8.13965 9.44617 8.13965 10.1397V20.1864L10.3374 18.9306L12.5351 20.1864L14.7328 18.9306L16.9305 20.1864ZM11.2792 12.3375C11.2792 12.5108 11.1387 12.6514 10.9653 12.6514C10.7919 12.6514 10.6513 12.5108 10.6513 12.3375C10.6513 12.1641 10.7919 12.0235 10.9653 12.0235C11.1387 12.0235 11.2792 12.1641 11.2792 12.3375ZM14.4188 15.477C14.4188 15.6504 14.2783 15.791 14.1049 15.791C13.9315 15.791 13.7909 15.6504 13.7909 15.477C13.7909 15.3036 13.9315 15.1631 14.1049 15.1631C14.2783 15.1631 14.4188 15.3036 14.4188 15.477Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" transform="translate(2, 1)" />
                                </svg>                                <p class="col-md-8" id="content-fast-food">Best Offer & Prices</p>
                            </div>
                            <div class="row align-items-center">
                                <p class="col-md-2"></p>
                                <svg class="col-md-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <circle cx="15" cy="15" r="15" fill="#AD343E" />
                                    <path d="M1.88379 1.88385H3.13962L3.39079 3.13968M4.39546 8.16302H10.6746L13.1863 3.13968H3.39079M4.39546 8.16302L3.39079 3.13968M4.39546 8.16302L2.95571 9.60276C2.56014 9.99833 2.8403 10.6747 3.39971 10.6747H10.6746M10.6746 10.6747C9.98104 10.6747 9.41879 11.2369 9.41879 11.9305C9.41879 12.6241 9.98104 13.1863 10.6746 13.1863C11.3682 13.1863 11.9305 12.6241 11.9305 11.9305C11.9305 11.2369 11.3682 10.6747 10.6746 10.6747ZM5.65129 11.9305C5.65129 12.6241 5.08903 13.1863 4.39546 13.1863C3.70188 13.1863 3.13962 12.6241 3.13962 11.9305C3.13962 11.2369 3.70188 10.6747 4.39546 10.6747C5.08903 10.6747 5.65129 11.2369 5.65129 11.9305Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"transform="translate(7.5, 7.5)"/>
                                </svg>
                                <p class="col-md-8" id="content-fast-food">Online Services Available</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white pb-5" id="bg">
            <?php include 'components/comment.php'; ?>
        </div>
        <div class="container-fluid bg-1 p-5">
            <div class="container d-flex flex-row justify-content-between pb-5">
                <h2>Our Blog & Articles</h2>
                <?php createButton("Read All Articles", "btn-read", "btn-primary"); ?>

            </div>
            <div class="container pb-5">
                <?php include 'components/blogger-items.php'; ?>
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
    <?php include 'components/footer.php'; ?>
</body>

</html>