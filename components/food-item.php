<?php
    // include 'linkbootstrap5.php';
    include 'root/CSS/component/food-item.css.php';
    // require_once 'models/menumodel.php';

    function createFood($Foods, $class) {
        // Extract parameters from the array or set default values
        $dish_id = isset($Foods['dish_id']) ? $Foods['dish_id'] : '';
        $src = isset($Foods['Image_dish']) ? $Foods['Image_dish'] : '';
        $h1Cost = isset($Foods['Price']) ? $Foods['Price'] : '';
        $h1Title = isset($Foods['Dish_name']) ? $Foods['Dish_name'] : '';
        $infor = isset($Foods['Detail']) ? $Foods['Detail'] : '';
        
        // Generate HTML code for the card
        
        $html = '<div class="card '.$class.'" style="width: 19rem;">';
        $html .= '<img src="' . $src . '" class="card-img-top" alt="images">';
        $html .= '<div class="card-body text-center">';
        $html .= '<h5 class="card-title text-danger"> $' . $h1Cost . '</h5>';
        $html .= '<h5 class="card-title">' . $h1Title . '</h5>';
        $html .= '<p class="card-text">' . $infor . '</p>';
        $html .= '</div>';
        $html .= '<form action = "shopping" method = "post">';
        $html .= '<input type = "hidden" name = "dish_id" value = "'. $dish_id .'">';
        $html .= '<input type = "hidden" name = "images" value = "'. $src .'">';
        $html .= '<input type = "hidden" name = "prices" value = "'. $h1Cost .'">';
        $html .= '<input type = "hidden" name = "name" value = "'. $h1Title .'">';
        $html .= '<input type = "hidden" name = "details" value = "'. $infor .'">';
        $html .= '<button type= "submit" name="addtocart" id ="addtocart" value="addtocart" class="btn btn-primary add-to-cart-btn">ADD TO CART</button>';
        $html .= '</form>';
        $html .= '</div>';

        


        // Display the result using echo
        echo $html;
    }

    $class = '';

    $Foods = FoodItem();
    // Example usage
    // $Foods = array(
    //     ['src'   => './root/assets/images-food/food1.png',
    //     'cost' => '$ 9.99',
    //     'title' => 'Fried Eggs',
    //     'infor'     => 'How to prepare the perfect french fries in an air frye'
    //     ],
    //     ['src'   => './root/assets/images-food/food2.png',
    //     'cost' => '$ 9.99',
    //     'title' => 'Fried Eggs',
    //     'infor'     => 'How to prepare delicious chicken tenders'
    //     ],
    //     ['src'   => './root/assets/images-food/food3.png',
    //     'cost' => '$ 9.99',
    //     'title' => 'Fried Eggs',
    //     'infor'     => '7 delicious cheesecake recipes you can prepare'
    //     ],
    //     ['src'   => './root/assets/images-food/food4.png',
    //     'cost' => '$ 9.99',
    //     'title' => 'Fried Eggs',
    //     'infor'     => '5 great pizza restaurants you should visit this city'
    //     ],
    //     ['src'   => './root/assets/images-food/food5.png',
    //     'cost' => '$ 9.99',
    //     'title' => 'Fried Eggs',
    //     'infor'     => '5 great pizza restaurants you should visit this city'
    //     ],
    //     ['src'   => './root/assets/images-food/food6.png',
    //     'cost' => '$ 9.99',
    //     'title' => 'Fried Eggs',
    //     'infor'     => '5 great pizza restaurants you should visit this city'
    //     ],
    //     ['src'   => './root/assets/images-food/food7.png',
    //     'cost' => '$ 9.99',
    //     'title' => 'Fried Eggs',
    //     'infor'     => '5 great pizza restaurants you should visit this city'
    //     ],
    //     ['src'   => './root/assets/images-food/food8.png',
    //     'cost' => '$ 9.99',
    //     'title' => 'Fried Eggs',
    //     'infor'     => '5 great pizza restaurants you should visit this city'
    //     ],

    // );

    // Call the function, and it will automatically echo the result
    // createFood($Foods[0],$class);

?>

