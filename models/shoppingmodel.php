<?php
    require_once 'database/database.php';

    // function AddToCart(){
    //     $db = connectdb();
    //     $sql = 
    // }
    function showcart($session,$i){
    $html = '<div class="cart-item">
            <div class="row">
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <h5>'.$i.'</h5>
                </div>
                <div class="col-md-3">
                    <img src="'.$session[1].'" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>'.$session[2].'</h4>
                    <p>'.$session[3].'</p>
                    <p>Price: $'.$session[4].'</p>
                    <form action = "post">    
                        <div class="cart-actions">
                            <div class="quantity">
                                <button class="btn btn-minus" name = "submit" onclick="decreaseQuantity(this)">-</button>
                                <input name="quantity" type="text" value="'. $session[5] .'">
                                <button class="btn btn-plus" name = "submit" onclick="increaseQuantity(this)">+</button>
                            </div>
                            <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                            <label class="checkbox-label" for="checkbox-id">
                                <input type="checkbox" class="checkbox" id="checkbox-id">
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>';
    echo $html;    
    }
    


?>