<?php
    include 'root/CSS/component/header-navbar.css.php';
    $array_navbar_1 = [
        ["label" => "Home", "url" => "home"],
        ["label" => "About", "url" => "about"],
        ["label" => "Menu", "url" => "menu"],
        ["label" => "Book", "url" => "booktable"],
        ["label" => "Pages", "url" => "blog"],
        ["label" => "Contact", "url" => "contact"],
    ];
    $array_navbar_2 = [
        ["label" => "Home", "url" =>  URL_ROOT . URL_SUBFLODER. "/controllers/homecontroller"],
        ["label" => "About", "url" => ""],
        ["label" => "Menu", "url" => ""],
        ["label" => "Pricing", "url" => ""],
        ["label" => "Blog", "url" => ""],
        ["label" => "Contact", "url" => URL_ROOT . URL_SUBFLODER. "/controllers/contactcontroller"],
        ["label" => "Delivery", "url" => ""]
    ];
    $array_navbar_3 = [
        ["label" => "Start here", "url" => ""],
        ["label" => "Styleguide", "url" => ""],
        ["label" => "Password Protected", "url" => ""],
        ["label" => "404 Not Found", "url" => ""],
        ["label" => "Licenses", "url" => ""],
        ["label" => "Changelog", "url" => ""],
        ["label" => "View More", "url" => ""]
    ];

    function generateNavbar($navItems,$class) {
        echo "<nav>";
        echo "<ul class='$class'>";
        
        foreach ($navItems as $item) {
            echo "<li>";
            
            // Kiểm tra nếu $item là mảng (đối tượng)
            if (is_array($item)) {
                echo '<a href="' . $item["url"] . '">' . $item["label"] . '</a>';
            } else {
                // Nếu không phải mảng, giả sử là chuỗi
                echo '<a href="#">' . $item . '</a>';
            }
            
            echo '</li>';
        }
        echo '</ul>';
        echo '</nav>';
        
    }
?>


