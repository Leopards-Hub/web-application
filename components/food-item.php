<?php
    // include 'linkbootstrap5.php';
    include '../root/CSS/component/food-item.css.php';
?>
<?php

    function createFood($Foods, $class) {
        // Extract parameters from the array or set default values
        $src = isset($Foods['src']) ? $Foods['src'] : '';
        $h1Cost = isset($Foods['cost']) ? $Foods['cost'] : '';
        $h1Title = isset($Foods['title']) ? $Foods['title'] : '';
        $infor = isset($Foods['infor']) ? $Foods['infor'] : '';
        
        // Generate HTML code for the card
        $html = '<div class="card '.$class.'" style="width: 19rem;">';
        $html .= '<img src="' . $src . '" class="card-img-top" alt="images">';
        $html .= '<div class="card-body text-center">';
        $html .= '<h5 class="card-title text-danger">' . $h1Cost . '</h5>';
        $html .= '<h5 class="card-title">' . $h1Title . '</h5>';
        $html .= '<p class="card-text">' . $infor . '</p>';
        $html .= '</div>';
        $html .= '</div>';

        // Display the result using echo
        echo $html;
    }

    $class = '';

    // Example usage
    $Foods = array(
        ['src'   => '../root/assets/images-food/food1.png',
        'cost' => '$ 9.99',
        'title' => 'Fried Eggs',
        'infor'     => 'How to prepare the perfect french fries in an air frye'
        ],
        ['src'   => '../root/assets/images-food/food2.png',
        'cost' => '$ 9.99',
        'title' => 'Fried Eggs',
        'infor'     => 'How to prepare delicious chicken tenders'
        ],
        ['src'   => '../root/assets/images-food/food3.png',
        'cost' => '$ 9.99',
        'title' => 'Fried Eggs',
        'infor'     => '7 delicious cheesecake recipes you can prepare'
        ],
        ['src'   => '../root/assets/images-food/food4.png',
        'cost' => '$ 9.99',
        'title' => 'Fried Eggs',
        'infor'     => '5 great pizza restaurants you should visit this city'
        ],
        ['src'   => '../root/assets/images-food/food5.png',
        'cost' => '$ 9.99',
        'title' => 'Fried Eggs',
        'infor'     => '5 great pizza restaurants you should visit this city'
        ],
        ['src'   => '../root/assets/images-food/food6.png',
        'cost' => '$ 9.99',
        'title' => 'Fried Eggs',
        'infor'     => '5 great pizza restaurants you should visit this city'
        ],
        ['src'   => '../root/assets/images-food/food7.png',
        'cost' => '$ 9.99',
        'title' => 'Fried Eggs',
        'infor'     => '5 great pizza restaurants you should visit this city'
        ],
        ['src'   => '../root/assets/images-food/food8.png',
        'cost' => '$ 9.99',
        'title' => 'Fried Eggs',
        'infor'     => '5 great pizza restaurants you should visit this city'
        ],

    );

    // Call the function, and it will automatically echo the result
    // createFood($Foods[0],$class);

?>

