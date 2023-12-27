<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'root/CSS/about.css.php'; ?>
    <?php include 'root/CSS/htmlfont.css.php'; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Yummy Food Restaurant</title>
</head>

<body class="bg-1">
    <!-- init header -->
    <?php include 'components/header.php'; ?>
    <div class="container-fluid p-5">
        <div class="container-fluid pb-5 bg-1">
            <div class="container pb-5 "  >
                <div class="row justify-content-center align-items-center margin-center" style="width: 100%;">
                    <div class="col-6" id="">
                        <?php include 'components/contact-image.php';
                            generateContactImage($array_contact_image[1]);
                        ?>
                    </div>
                    <div class="col-6" id="">
                        <?php include 'components/title.php';
                        createTitle("We provide healthy food for your family.", "Our story began with a vision to create a unique dining experience that merges fine dining, exceptional service, and a vibrant ambiance. Rooted in city's rich culinary 
                    culture, we aim to honor our local roots while infusing a global palate.", "At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, 
                    strives to make every visit an unforgettable event.", 'content-title-h2', 'content-title-p1', 'content-title-p2', 'content-title')
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center p-5 bg-white">
            <div class="video-container p-5">
                <video autoplay loop muted>
                    <source src="../root/assets/images-about/video-introduction.mp4" type="video/mp4">
                </video>
                <div class="text-overlay">
                    <h1>Feel the authentic & original taste from us</h1>
                </div>
            </div>
            <div class="item-about">
                <div class="item">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M38 46L6 43V5L38 2V46Z" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M44 6V42" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M13 29H29" stroke="#AD343E" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M13 36L29 37" stroke="#AD343E" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M21 22C24.3137 22 27 19.3137 27 16C27 12.6863 24.3137 10 21 10C17.6863 10 15 12.6863 15 16C15 19.3137 17.6863 22 21 22Z"
                                stroke="#AD343E" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></p>
                    <div class="item-content">
                        <p id="large-item-content">Multi Cuisine</p>
                        <p id="smaill-item-content">In the new era of technology we look in the future with certainty
                            life.</p>
                    </div>
                </div>
                <div class="item">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M38 22H10V38H38V22Z" stroke="#AD343E" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M31 28H17" stroke="#AD343E" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M29 12C30.1046 12 31 11.1046 31 10C31 8.89543 30.1046 8 29 8C27.8954 8 27 8.89543 27 10C27 11.1046 27.8954 12 29 12Z"
                                fill="#474747" />
                            <path
                                d="M37 12C38.1046 12 39 11.1046 39 10C39 8.89543 38.1046 8 37 8C35.8954 8 35 8.89543 35 10C35 11.1046 35.8954 12 37 12Z"
                                fill="#474747" />
                            <path
                                d="M40 4H8C5.79086 4 4 5.79086 4 8V40C4 42.2091 5.79086 44 8 44H40C42.2091 44 44 42.2091 44 40V8C44 5.79086 42.2091 4 40 4Z"
                                stroke="#474747" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 10H16" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M4 16H44" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg></p>
                    <div class="item-content">
                        <p id="large-item-content">Easy To Order</p>
                        <p id="smaill-item-content">In the new era of technology we look in the future with certainty
                            life.</p>
                    </div>
                </div>
                <div class="item">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M42 28V46H6V28" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M17 2H31" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M24 28L32.5 19.5" stroke="#AD343E" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M24 2V5" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M24 46C33.9411 46 42 37.9411 42 28C42 18.0589 33.9411 10 24 10C14.0589 10 6 18.0589 6 28C6 37.9411 14.0589 46 24 46Z"
                                stroke="#474747" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M24 16V18" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M36 28H34" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M32.485 36.485L31.071 35.071" stroke="#474747" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M24 40V38" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15.5149 36.485L16.9289 35.071" stroke="#474747" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 28H14" stroke="#474747" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15.5149 19.515L16.9289 20.929" stroke="#474747" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></p>
                    <div class="item-content">
                        <p id="large-item-content">Fast Delivery</p>
                        <p id="smaill-item-content">In the new era of technology we look in the future with certainty
                            life.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid p-5 bg-1 ">
            <div class="container">
                <div class="row">
                    <div class="col-6" id="information" >
                        <?php include_once 'components/title.php';
                        createTitle("A little information for our valuable guest", "At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for
                         their warmth and dedication, strives to make every visit an 
                         unforgettable event.", "", "content-title-h2-about", "content-title-p1", )
                            ?>
                        <div class="card-number">
                            <div class="sum-card">
                                <div class="card d-inline-flex flex-column justify-content-center align-items-center gap-3">
                                    <h2>3</h2>
                                    <p>Locations</p>
                                </div>
                                <div class="card d-inline-flex flex-column justify-content-center align-items-center gap-3">
                                    <h2>1995</h2>
                                    <p>Founded</p>
                                </div>
                            </div>
                            <div class="sum-card">
                                <div class="card d-inline-flex flex-column justify-content-center align-items-center gap-3">
                                    <h2>65+</h2>
                                    <p>Staff Members</p>
                                </div>
                                <div class="card d-inline-flex flex-column justify-content-center align-items-center gap-3">
                                    <h2>100%</h2>
                                    <p>Satisfied Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="information-right">
                            <img src="https://studiovietnam.com/wp-content/uploads/2022/03/hinh-anh-ve-do-an-20.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white pb-5" id="">
            <?php include 'components/comment.php'; ?>
        </div>
    </div>
    <!-- init footer -->
    <?php include 'components/footer.php'; ?>
</body>

</html>