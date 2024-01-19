<?php
    include 'root/CSS/component/food-item.css.php';
    function createFood($Foods, $class) {
        // Extract parameters from the array or set default values
        $dish_id = isset($Foods['dish_id']) ? $Foods['dish_id'] : '';
        $src = isset($Foods['Image_dish']) ? $Foods['Image_dish'] : '';
        $h1Cost = isset($Foods['Price']) ? $Foods['Price'] : '';
        $h1Title = isset($Foods['Dish_name']) ? $Foods['Dish_name'] : '';
        $infor = isset($Foods['Detail']) ? $Foods['Detail'] : '';
        
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
        echo $html;
    }

    $class = '';
    if((isset($_POST['search'])  || isset($_POST['All']) || isset($_POST['Breakfast']) || isset($_POST['Dishes']) || isset($_POST['Dessert'])) && !empty(search()) ){
        $Foods = search();
    }else{
        $Foods = FoodItem();
    }

?>

