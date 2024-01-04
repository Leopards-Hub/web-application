<?php

include_once 'database/database.php';

class OrderModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function fetchAll()
    {
        $query = "SELECT orders.order_id, orders.order_date, orders.status, orders.delivery_date, orders.user_id, users.Username, orders.discount
            FROM orders
            INNER JOIN users ON orders.user_id = users.user_id";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error querying: " . $e->getMessage();
            return false;
        }
    }

    public function fetchOne($id)
    {
        if (!is_numeric($id) || $id <= 0) {
            return false;
        }

        $query = "SELECT orders.order_id, orders.order_date, orders.status, orders.delivery_date, orders.user_id, users.Username, orders.discount
            FROM orders
            INNER JOIN users ON orders.user_id = users.user_id
            WHERE orders.order_id = :id";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error querying: " . $e->getMessage();
            return false;
        }
    }

    public function updateOrder($id, $values)
    {
        // Đảm bảo rằng mảng $values có đủ các trường cần thiết
        $requiredFields = ['order_date', 'status', 'delivery_date', 'user_id', 'discount'];
        if (array_diff($requiredFields, array_keys($values))) {
            echo "Error: Missing required fields.";
            return false;
        }
    
        $setClauses = [];
        foreach ($values as $key => $value) {
            $allowedFields = ['order_date', 'status', 'delivery_date', 'user_id', 'discount'];
    
            if (in_array($key, $allowedFields)) {
                $setClauses[] = "$key = :$key";
            }
        }
    
        if (empty($setClauses)) {
            return false;
        }
    
        $query = "UPDATE orders SET ";
        $query .= implode(', ', $setClauses);
        $query .= " WHERE Order_id = :Order_id";
    
        $values['Order_id'] = $id;
    
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute($values);
    
            // Kiểm tra xem update thành công hay không
            if ($stmt->rowCount() > 0){
                echo '<script>window.location.href = "order";</script>';
                return true;
            }else{
                echo "errol";
                return false;
            }
    
            
        } catch (PDOException $e) {
            echo "Error updating: " . $e->getMessage();
            return false;
        }
    }
    


    public function createOrder($values)
    {
        if (!is_array($values) || empty($values)) {
            return false;
        }

        // Đảm bảo rằng mảng $values có đủ các trường cần thiết
        $requiredFields = ['order_date', 'status', 'delivery_date', 'user_id', 'discount'];
        if (array_diff($requiredFields, array_keys($values))) {
            echo "Error: Missing required fields.";
            return false;
        }

        $query = "INSERT INTO orders (order_date, status, delivery_date, user_id, discount) 
                  VALUES (:order_date, :status, :delivery_date, :user_id, :discount)";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute($values);
            if ($stmt->rowCount() > 0){
                echo '<script>window.location.href = "order";</script>';
                return true;
            }else{
                echo "errol";
                return false;
            }
        } catch (PDOException $e) {
            echo "Error creating order: " . $e->getMessage();
            return false;
        }
    }


    public function deleteOrder($id)
    {
        if (!is_numeric($id) || $id <= 0) {
            return false;
        }

        $query = "DELETE FROM orders WHERE Order_id = :Order_id";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':Order_id', $id, PDO::PARAM_INT);
            $stmt->execute();

            // Kiểm tra xóa thành công và chuyển hướng trang
            if ($stmt->rowCount() > 0) {
                echo '<script>window.location.href = "order";</script>';
                return true;
            } else {
                echo "No rows deleted.";
                return false;
            }
        } catch (PDOException $e) {
            echo "Error deleting order: " . $e->getMessage();
            return false;
        }
    }

    public function getAllUser()
    {
        $query = "SELECT Username FROM users";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error querying: " . $e->getMessage();
            return false;
        }

    }
    public function getId($name)
    {
        $query = "SELECT user_id FROM users WHERE username = :username";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':username', $name, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error querying: " . $e->getMessage();
            return false;
        }
    }

}

?>