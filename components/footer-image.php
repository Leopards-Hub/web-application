<?php 
    include 'root/CSS/component/footer-image.css.php';
?>
<?php
function createImgFooter($imageArray) {
    echo '<div class="row">';
    foreach ($imageArray as $image) {
        echo '<div class="col-md-5">';
        echo '<img src="' . $image['src'] . '" alt="' . $image['alt'] . '">';
        echo '</div>';
    }
    echo '</div>';
}
?>
<?php
    $imageArray = [
        ['src' => './root/assets/images-footer/photo1.png', 'alt' => 'Image'],
        ['src' => './root/assets/images-footer/photo2.png', 'alt' => 'Image'],
        ['src' => './root/assets/images-footer/photo3.png', 'alt' => 'Image'],
        ['src' => './root/assets/images-footer/photo4.png', 'alt' => 'Image'],
    ];

    
?>
