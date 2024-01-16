<?php
    require_once 'database/database.php';
    $user = $_SESSION['user'];
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
                    <img src="'.$session['image'].'" alt="Product Image">
                </div>
                <div class="col-md-8">
                    <h4>'.$session['dish_name'].'</h4>
                    <p>'.$session['details'].'</p>
                    <p>Price: $'.$session['price'].'</p>
                    <form action = "post">    
                        <div class="cart-actions">
                            <div class="quantity">
                                <button class="btn btn-minus" name = "submit" onclick="decreaseQuantity(this)">-</button>
                                <input name="quantity" type="text" value="'. $session['quantity'] .'">
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
    
    

function addToCart($sp) {

    $connection = connectdb();

    
        $user_id = $_SESSION["user"]["user_id"];

        // Kiểm tra xem sản phẩm đã tồn tại trong bảng cart chưa
        $query_check = "SELECT * FROM cart WHERE user_id = :user_id AND dish_id = :dish_id";
        $stmt_check = $connection->prepare($query_check);
        $stmt_check->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        $stmt_check->bindParam(":dish_id", $sp[0], PDO::PARAM_INT);
        $stmt_check->execute();

        if ($stmt_check->rowCount() > 0) {
            // Nếu sản phẩm đã tồn tại, cập nhật số lượng
            $row = $stmt_check->fetch(PDO::FETCH_ASSOC);
            $soluong = $row['quantity'] + 1;

            $query_update = "UPDATE cart SET quantity = :quantity WHERE user_id = :user_id AND dish_id = :dish_id";
            $stmt_update = $connection->prepare($query_update);
            $stmt_update->bindParam(":quantity", $soluong, PDO::PARAM_INT);
            $stmt_update->bindParam(":user_id", $user_id, PDO::PARAM_INT);
            $stmt_update->bindParam(":dish_id", $sp[0], PDO::PARAM_INT);
            $stmt_update->execute();
        } else {
            // Nếu sản phẩm chưa tồn tại, thêm mới vào bảng cart
            $query_insert = "INSERT INTO cart (dish_id, user_id, dish_name, image, details, quantity, price) VALUES (:dish_id, :user_id, :dish_name, :image, :details, :quantity, :price)";
            $stmt_insert = $connection->prepare($query_insert);
            $stmt_insert->bindParam(":user_id", $user_id, PDO::PARAM_INT);
            $stmt_insert->bindParam(":dish_id", $sp[0], PDO::PARAM_INT);
            $stmt_insert->bindParam(":image", $sp[1], PDO::PARAM_STR);
            $stmt_insert->bindParam(":dish_name", $sp[2], PDO::PARAM_STR);
            $stmt_insert->bindParam(":details", $sp[3], PDO::PARAM_STR);
            $stmt_insert->bindParam(":price", $sp[4], PDO::PARAM_INT);
            $stmt_insert->bindParam(":quantity", $sp[5], PDO::PARAM_INT);
            $stmt_insert->execute();
            // $sp = array($id, $img, $name, $details, $price, $soluong);
        }
        // $connection = null;
}
function getCart(){
    $conn = connectdb();
    
    $user_id = $_SESSION['user']['user_id'];

    $sql = "SELECT * FROM cart WHERE user_id = :user_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $conn = null;

    return $result;
}



// Thêm các câu lệnh đóng kết nối cơ sở dữ liệu ở đây


?>