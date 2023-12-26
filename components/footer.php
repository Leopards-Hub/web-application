<?php 
    // include './linkbootstrap5.php';
    include 'root/CSS/component/footer.css.php';
    // include 'logo.php';
    // include 'header-navbar.php';
    // include 'header-top-social.php';
    include 'root/CSS/component/header-top-social.css.php';
    include 'footer-image.php';
?>

<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="row">
                <div class="col-4 footer-logo">
                    
                    <?php createLogo("white","white"); ?>
                    
                    <p>In the new era of technology we look a in the future with certainty and pride to for our company and.</p>
                    
                    <?php generateSocial("bg-danger");?>
                    
                </div>
                <div class="col-3">
                    <div class="row footer-pages">
                        <div class="col-2">
                            <p class="footer-pages-title1"><strong>Pages</strong></p>
                            <?php generateNavbar($array_navbar_2,"menu2") ?>
                        </div>
                        <div class="col-6">
                            <p class="footer-pages-title2"><strong>Utility Pages</strong></p>
                            <?php generateNavbar($array_navbar_3,"menu2") ?>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <p class="footer-pages-title3"><strong>Follow Us On Instagram</strong></p>
                    <?php createImgFooter($imageArray); ?>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <hr>
        </div>
        <div class="footer-copyright">
            <p>Copyright © 2023 Hashtag Developer. All Rights Reserved</p>
        </div>
    </div>
</footer>
