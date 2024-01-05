<?php
include_once 'database/database.php';

class Orderdetailmodel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function fetchAll() {
        $query = "SELECT 
            order_detail.Order_id,
            order_detail.Dish_id,
            order_detail.dish_name,
            order_detail.Quantity,
            order_detail.total_price,
            orders.User_id,
            users.Username
          FROM order_detail
          INNER JOIN orders ON order_detail.Order_id = orders.Order_id
          INNER JOIN dish ON order_detail.Dish_id = dish.Dish_id
          INNER JOIN users ON orders.User_id = users.User_id";


        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }

    public function fetchOne($id) {
        $query = "SELECT 
                    order_detail.Order_id,
                    order_detail.quantity,
                    order_detail.Dish_id,
                    order_detail.total_price,
                    orders.user_id,
                    users.Username,
                    dish.Dish_id AS dish_id,
                    dish.Dish_name AS dish_name,
                    orders.order_date,
                    orders.status,
                    order_detail.price,
                    orders.delivery_date,
                    orders.discount
                  FROM order_detail
                  INNER JOIN orders ON order_detail.Order_id = orders.Order_id
                  INNER JOIN dish ON order_detail.Dish_id = dish.Dish_id
                  INNER JOIN users ON orders.user_id = users.user_id
                  WHERE order_detail.Order_id = :id  and orders.Order_id = :id";
    
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }
    
    

    public function createOrder_detail($values) {
        if (!is_array($values) || empty($values)) {
            return false;
        }
        $query = "INSERT INTO order_detail (Order_id, Quantity, Dish_id, total_price) 
                  VALUES (:Order_id, :Quantity, :Dish_id, :total_price)";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute($values);
            return true;
        } catch (PDOException $e) {
            echo "Lỗi thêm mới đơn hàng chi tiết: " . $e->getMessage();
            return false;
        }
    }

    public function updateOrderDetail($id, $values) {
        if (!is_array($values) || empty($values)) {
            return false;
        }
        $query = "UPDATE order_detail
                  SET Order_id = :Order_id, Quantity = :Quantity, Dish_id = :Dish_id, total_price = :total_price
                  WHERE Order_detail_id = :Order_detail_id";
        try {
            $values['Order_detail_id'] = $id;
            $stmt = $this->db->prepare($query);
            $stmt->execute($values);
            return true;
        } catch (PDOException $e) {
            echo "Lỗi cập nhật đơn hàng chi tiết: " . $e->getMessage();
            return false;
        }
    }


}
