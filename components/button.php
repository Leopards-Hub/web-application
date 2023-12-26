<?php
    include 'root/CSS/component/button.css.php';
    $array_button = ["Book A Table", "Explore Menu", "More About Us", "Read All Articles", "Send"];

    function createButton($label, $index, $additionalClass = '')
    {
        $class = "btn $additionalClass";
        echo "<button class='$class' id='btn-$index'>$label</button>";
    }
    
?>

