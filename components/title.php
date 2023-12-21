<?php 
  include '../root/CSS/component/title.css.php';
  $array_title = array(
    'h1' => array(
        "Best food for your taste",
        "Our Menu",
        "Book A Table",
        "Our Blog & Articles",
        "Contact Us"
    ),
    'p' => array(
        "Discover delectable cuisine and unforgettable moments in our welcoming, culinary haven.",
        "We consider all the drivers of change gives you the components you need to change to create a truly happens.",
        "We consider all the drivers of change gives you the components you need to change to create a truly happens.",
        "We consider all the drivers of change gives you the components you need to change to create a truly happens.",
        "We consider all the drivers of change gives you the components you need to change to create a truly happens."
    ),
);
function createTitle($h1Content, $pContent1, $pContent2, $h1Class = '', $p1Class = '', $p2Class = '', $additionalClass = '')
{
    echo "
        <div class='$additionalClass'>
            <h1 class='$h1Class'>$h1Content</h1>
            <p class='$p1Class'>$pContent1</p>
            <p class='$p2Class'>$pContent2</p>
        </div>
    ";
}

?>

