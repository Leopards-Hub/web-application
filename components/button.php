<?php
    include 'root/CSS/component/button.css.php';
    $array_button = ["Book A Table", "Explore Menu", "More About Us", "Read All Articles", "Send"];
    function createButton($label, $index, $additionalClass = '')
    {
        $class = "btn $additionalClass";
        echo "<button class='$class' id='btn-$index'>$label</button>";
    }
    function createbtnmenu($name, $class, $active){
        $active = ($name == 'All')? 'active' : '';

        $html = '<input type="hidden" name = "'.$name.'" value="'. $name . '">';
        $html .= '<button type="submit" class="btn '. $class .' '. $active .'" id="btn-'.$name.'">'. $name .'</button>';
        echo $html;
    }
    
?>

