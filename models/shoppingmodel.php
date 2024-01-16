<?php
require_once 'database/database.php';

// function AddToCart(){
//     $db = connectdb();
//     $sql = 
// }
function showcart($session, $i)
{
    $html = '<div class="cart-item">
    
            <div class="row">
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <h5>' . $i . '</h5>
                </div>
                <div class="col-md-3">
                    <img src="' . $session[1] . '" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>' . $session[2] . '</h4>
                    <p>' . $session[3] . '</p>
                    <p>Price: $' . $session[4] . '</p>
                    <form method = "post">    
                        <div class="cart-actions">
                            <div class="quantity">
                                <button class="btn btn-minus" name = "submit" onclick="decreaseQuantity(this)">-</button>
                                <input name="quantity" type="text" value="' . $session[5] . '">
                                <button class="btn btn-plus" name = "submit" onclick="increaseQuantity(this)">+</button>
                            </div>
                            <input type="hidden" name="id" value="' . $session[0] . '" >
                            <button class="btn btn-sm btn-remove" onclick="removeItem(this)">Remove</button>
                            <button class="btn btn-sm btn-remove" name="deleteItem" type="submit">Delete</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>';
    echo $html;
}

class Shopping {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getOrdersList($id) {
        // Không cần sử dụng global $db ở đây, sử dụng $this->db thay thế
        $query = "SELECT o.order_id, o.order_date, o.status, o.delivery_date, o.user_id, o.discount,
                         od.dish_id, od.dish_name, od.price, od.quantity, od.total_price,
                         od.address, od.phone, od.payment
                  FROM `orders` o
                  JOIN order_detail od ON o.order_id = od.order_id
                  WHERE o.user_id = :user_id";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':user_id', $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }
}


