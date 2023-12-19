<?php 
    // include 'linkbootstrap5.php';
    include '../root/CSS/component/footer-image.css.php';
?>
<?php
function createImgFooter($imageArray) {
    echo '<div class="row">';
    
    // Lặp qua mảng ảnh
    foreach ($imageArray as $image) {
        echo '<div class="col-md-6">';
        echo '<img src="' . $image['src'] . '" alt="' . $image['alt'] . '">';
        echo '</div>';
    }
    
    echo '</div>';
}
?>

<!-- Sử dụng hàm trong mã HTML -->
<?php
    $imageArray = [
        ['src' => '../root/assets/images/photo1.png', 'alt' => 'Image'],
        ['src' => '../root/assets/images/photo2.png', 'alt' => 'Image'],
        ['src' => '../root/assets/images/photo3.png', 'alt' => 'Image'],
        ['src' => '../root/assets/images/photo4.png', 'alt' => 'Image'],
    ];

    
?>
