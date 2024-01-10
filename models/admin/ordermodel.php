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

        $query = "
            SELECT 
                orders.order_id,
                orders.order_date,
                orders.status,
                orders.delivery_date,
                orders.user_id,
                users.Username,
                orders.discount,
                order_detail.quantity,
                order_detail.Dish_id,
                order_detail.total_price,
                dish.Dish_id AS dish_id,
                dish.Dish_name AS dish_name,
                order_detail.price
            FROM orders
            LEFT JOIN order_detail ON orders.order_id = order_detail.Order_id
            LEFT JOIN dish ON order_detail.Dish_id = dish.Dish_id
            INNER JOIN users ON orders.user_id = users.user_id
            WHERE orders.order_id = :id
        ";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }


    public function updateOrder($id, $orderValues, $orderDetailValues)
    {
        // Ensure that arrays $orderValues and $orderDetailValues have required fields
        $orderRequiredFields = ['order_date', 'status', 'delivery_date', 'user_id', 'discount'];
        $orderDetailRequiredFields = ['dish_id', 'dish_name', 'price', 'quantity', 'total_price'];

        if (
            array_diff($orderRequiredFields, array_keys($orderValues)) ||
            array_diff($orderDetailRequiredFields, array_keys($orderDetailValues))
        ) {
            echo "Error: Missing required fields.";
            return false;
        }

        // Update orders table
        $orderSetClauses = [];
        foreach ($orderValues as $key => $value) {
            if ($key !== 'order_id' && in_array($key, $orderRequiredFields)) {
                $orderSetClauses[] = "$key = :$key";
            }
        }

        if (empty($orderSetClauses)) {
            return false;
        }

        $orderQuery = "UPDATE orders SET ";
        $orderQuery .= implode(', ', $orderSetClauses);
        $orderQuery .= " WHERE order_id = :order_id";

        $orderValues['order_id'] = $id;

        try {
            $orderStmt = $this->db->prepare($orderQuery);
            $orderStmt->execute($orderValues);

            // Update order_detail table
            $orderDetailQuery = "
                INSERT INTO order_detail (order_id, dish_id, dish_name, price, quantity, total_price) 
                VALUES (:order_id, :dish_id, :dish_name, :price, :quantity, :total_price)
                ON DUPLICATE KEY UPDATE 
                    dish_name = VALUES(dish_name), 
                    price = VALUES(price), 
                    quantity = VALUES(quantity), 
                    total_price = VALUES(total_price)
            ";

            $orderDetailValues['order_id'] = $id;

            $orderDetailStmt = $this->db->prepare($orderDetailQuery);
            $orderDetailStmt->execute($orderDetailValues);

            echo '<script>window.location.href = "order";</script>';
            return true;
        } catch (PDOException $e) {
            echo "Error updating: " . $e->getMessage();
            return false;
        }
    }


    public function createOrder($orderValues, $orderDetails)
    {
        // Ensure that arrays $orderValues and $orderDetails have required fields
        $orderRequiredFields = ['order_date', 'status', 'user_id', 'discount'];
        $orderDetailRequiredFields = ['dish_id', 'dish_name', 'price', 'quantity', 'total_price'];
    
        try {
            $this->db->beginTransaction();
    
            // Prepare the SQL query for orders table
            $orderQuery = "INSERT INTO orders (order_date, status, user_id, discount) 
                           VALUES (:order_date, :status, :user_id, :discount)";
    
            $orderStmt = $this->db->prepare($orderQuery);
            $orderStmt->bindParam(':order_date', $orderValues['order_date']);
            $orderStmt->bindParam(':status', $orderValues['status']);
            $orderStmt->bindParam(':user_id', $orderValues['user_id']);
            $orderStmt->bindParam(':discount', $orderValues['discount']);
            $orderStmt->execute();
    
            // Get the last inserted order_id
            $orderId = $this->db->lastInsertId();
    
            // Insert into order_detail table
            $orderDetailQuery = "INSERT INTO order_detail (order_id, dish_id, dish_name, price, quantity, total_price) 
                                 VALUES (:order_id, :dish_id, :dish_name, :price, :quantity, :total_price)";
    
            $orderDetailStmt = $this->db->prepare($orderDetailQuery);
    
            // Check if $orderDetails is an array
            if (is_array($orderDetails)) {
                // Output the data for debugging
                echo '<pre>';
                print_r($orderDetails);
                echo '</pre>';
    
                // Bind parameters for order_detail statement
                $orderDetailStmt->bindParam(':order_id', $orderId);
                $orderDetailStmt->bindParam(':dish_id', $orderDetails['dish_id']);
                $orderDetailStmt->bindParam(':dish_name', $orderDetails['dish_name']);
                $orderDetailStmt->bindParam(':price', $orderDetails['price']);
                $orderDetailStmt->bindParam(':quantity', $orderDetails['quantity']);
                $orderDetailStmt->bindParam(':total_price', $orderDetails['total_price']);
    
                // Execute the statement
                if (!$orderDetailStmt->execute()) {
                    throw new Exception("Error inserting into order_detail: " . implode(", ", $orderDetailStmt->errorInfo()));
                }
            } else {
                // Handle the case where $orderDetails is not an array
                // You might want to log an error or handle it accordingly
            }
    
            // Commit the transaction
            $this->db->commit();
    
            // Redirect after successful operation
            echo '<script>window.location.href = "order";</script>';
            return true;
        } catch (Exception $e) {
            // Log the error
            error_log("Error creating order: " . $e->getMessage() . PHP_EOL . $e->getTraceAsString());
    
            // Rollback the transaction on error
            $this->db->rollBack();
    
            // Output an error message
            echo "An error occurred while processing your order. Please try again later.";
            return false;
        }
    }
    
    function deleteOrder($id)
    {
        global $db;
        // Kiểm tra nếu $id không phải là số hoặc không hợp lệ
        if (!is_numeric($id) || $id <= 0) {
            return false;
        }

        try {
            // Xóa dữ liệu từ bảng chi tiết (order_detail) trước
            $queryDetail = "DELETE FROM order_detail WHERE order_id = :Order_id";
            $stmtDetail = $this->db->prepare($queryDetail);
            $stmtDetail->bindParam(':Order_id', $id, PDO::PARAM_INT);
            $stmtDetail->execute();

            // Xóa dữ liệu từ bảng chính (orders)
            $queryOrder = "DELETE FROM orders WHERE order_id = :Order_id";
            $stmtOrder = $this->db->prepare($queryOrder);
            $stmtOrder->bindParam(':Order_id', $id, PDO::PARAM_INT);
            $stmtOrder->execute();

            // Kiểm tra xóa thành công và chuyển hướng trang
            if ($stmtOrder->rowCount() > 0) {
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

    // getall dish
    public function getAllDish()
    {
        $query = "SELECT Dish_name FROM dish";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error querying: " . $e->getMessage();
            return false;
        }
    }
    // get id and price from dish_name
    public function getDetailDish($name)
    {
        $query = "SELECT dish_id, Price FROM dish WHERE Dish_name = :dishname";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':dishname', $name, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            echo "Error fetching detail: " . $e->getMessage();
            return null;
        }
    }

    // hàm tính total_price
    public function getTotalPrice($price, $quantity, $discount)
    {
        // Check if $price, $quantity, and $discount are numeric
        if (!is_numeric($price) || !is_numeric($quantity) || !is_numeric($discount)) {
            // Handle the case where one or more of the values is not numeric
            echo "Invalid input. Please provide numeric values for price, quantity, and discount.";
            return false;
        }

        // Perform the calculation only if all values are numeric
        return ($price * $quantity) - $discount;
    }
    function getCurrentDateTime()
    {
        // Đặt múi giờ
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // Thay 'Asia/Ho_Chi_Minh' bằng múi giờ mong muốn

        // Lấy ngày giờ hiện tại
        $currentDateTime = date('Y-m-d H:i:s');

        return $currentDateTime;
    }
}

?>