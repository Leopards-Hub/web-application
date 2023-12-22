<?php
    // include 'linkbootstrap5.php';
    include '../root/CSS/component/blogger-items.css.php';
?>

<?php

function createBlogger($params, $class) {
    // Extract parameters from the array or set default values
    $src = isset($params['src']) ? $params['src'] : '';
    $label = isset($params['label']) ? $params['label'] : '';
    $p = isset($params['p']) ? $params['p'] : '';
    $infor = isset($params['infor']) ? $params['infor'] : '';
    // Generate HTML code for the card
    $html = '<div class="card '.$class.'">';
    $html .= '<img src="' . $src . '" class="card-img-top" alt="images">';
    $html .= '<div class="card-body">';
    $html .= '<label class="card-title fs-6">' . $label . '</label>';
    $html .= '<p class="card-text"><strong>' . $p . '</strong></p>';
    if($class === 'card-larger') {
        $html .= '<p class="card-text">' . $infor . '</p>';
    }
    $html .= '</div>';
    $html .= '</div>';

    // Display the result using echo
    echo $html;
}

$class = 'card-larger';

// Example usage
$params = array(
    ['src'   => '../root/assets/images-blogger/photo-bg1.png',
    'label' => 'January 12, 2023',
    'p'     => 'How to prepare the perfect french fries in an air frye'
    ],
    ['src'   => '../root/assets/images-blogger/photo-bg2.png',
    'label' => 'January 12, 2023',
    'p'     => 'How to prepare delicious chicken tenders'
    ],
    ['src'   => '../root/assets/images-blogger/photo-bg3.png',
    'label' => 'January 12, 2023',
    'p'     => '7 delicious cheesecake recipes you can prepare'
    ],
    ['src'   => '../root/assets/images-blogger/photo-bg4.png',
    'label' => 'January 12, 2023',
    'p'     => '5 great pizza restaurants you should visit this city'
    ],
    ['src'   => '../root/assets/images-blogger/photo-biggest.png',
    'label' => 'January 12, 2023',
    'p'     => 'The secret tips & tricks to prepare a perfect burger & pizza for our customers',
    'infor' => 'Lorem ipsum dolor sit amet consectetur of a adipiscing elitilmim semper adipiscing massa gravida nisi cras enim quis nibholm varius amet gravida ut facilisis neque egestas.'
    ],
);

// Call the function, and it will automatically echo the result
// createBlogger($params[4],$class);

?>
