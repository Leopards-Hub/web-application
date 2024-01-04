<?php 
include_once 'database/database.php';
class Orderdetailmodel{
    public function fetchAll() {
        global $db;
    
        $query = "SELECT order_detail.Order_detail_id, order_detail.Order_id, order_detail.Quantity, 
                         order_detail.Dish_id, order_detail.total_price,
                         orders.User_id, users.Username, dish.Dish_id, dish.Disk_name
                  FROM order_detail
                  INNER JOIN orders ON order_detail.Order_id = orders.Order_id
                  INNER JOIN dish ON order_detail.Dish_id = dish.Dish_id
                  INNER JOIN users ON orders.User_id = users.User_id";
        try {
            $stmt = $db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }
    public function fetchOne($id) {
        global $db;
    
        $query = "SELECT order_detail.Order_detail_id, order_detail.Order_id, order_detail.Quantity, 
                         order_detail.Dish_id, order_detail.total_price,
                         orders.User_id, users.Username, dish.Dish_id, dish.Disk_name
                  FROM order_detail
                  INNER JOIN orders ON order_detail.Order_id = orders.Order_id
                  INNER JOIN dish ON order_detail.Dish_id = dish.Dish_id
                  INNER JOIN users ON orders.User_id = users.User_id
                  WHERE order_detail.Order_detail_id = :id";
    
        try {
            $stmt = $db->prepare($query);
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
        global $db;
        if (!is_array($values) || empty($values)) {
            return false;
        }
        $query = "INSERT INTO order_detail (Order_id, Quantity, Dish_id, total_price) 
                  VALUES (:Order_id, :Quantity, :Dish_id, :total_price)";
        try {
            $stmt = $db->prepare($query);
            $stmt->execute($values);
            return true; 
        } catch (PDOException $e) {
            echo "Lỗi thêm mới đơn hàng chi tiết: " . $e->getMessage();
            return false; 
        }
    }
    public function updateOrderDetail($id, $values) {
        global $db;
        if (!is_array($values) || empty($values)) {
            return false; 
        }
        $query = "UPDATE order_detail
                  SET Order_id = :Order_id, Quantity = :Quantity, Dish_id = :Dish_id, total_price = :total_price
                  WHERE Order_detail_id = :Order_detail_id";
        try {
            $values['Order_detail_id'] = $id;
            $stmt = $db->prepare($query);
            $stmt->execute($values);
            return true; 
        } catch (PDOException $e) {
            echo "Lỗi cập nhật đơn hàng chi tiết: " . $e->getMessage();
            return false; 
        }
    }
    public function deleteOrderDetail($id) {
        global $db;
        if (!isset($id)) {
            return false;
        }
        $query = "DELETE FROM order_detail WHERE Order_detail_id = :Order_detail_id";
        try {
            $stmt = $db->prepare($query);
            $stmt->bindParam(':Order_detail_id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Lỗi xóa đơn hàng chi tiết: " . $e->getMessage();
            return false; 
        }
    }
}

$t = new Orderdetailmodel();


echo '<pre>';
print_r($t->fetchOne(1));
echo '</pre>';

// // Khởi tạo mảng chứa giá trị mới cho đơn hàng chi tiết
// $newOrderDetailValues = array(
//     'Order_id' => 1, // Giá trị cho trường Order_id
//     'Quantity' => 2, // Giá trị cho trường Quantity
//     'Dish_id' => 3, // Giá trị cho trường Dish_id
//     'total_price' => 145.21 // Giá trị cho trường total_price
// );

// // Gọi hàm create để thêm mới đơn hàng chi tiết
// $result = $t->createOrder_detail($newOrderDetailValues);

// // Kiểm tra kết quả của hàm
// if ($result) {
//     echo "Thêm mới đơn hàng chi tiết thành công!";
// } else {
//     echo "Thêm mới đơn hàng chi tiết thất bại!";
// }
// Khởi tạo mảng chứa giá trị cập nhật cho đơn hàng chi tiết
// $updateOrderDetailValues = array(
//     'Order_id' => 2, // Giá trị mới cho trường Order_id
//     'Quantity' => 3, // Giá trị mới cho trường Quantity
//     'Dish_id' => 4, // Giá trị mới cho trường Dish_id
//     'total_price' => 100.99 // Giá trị mới cho trường total_price
// );

// // Gọi hàm updateOrderDetail để cập nhật đơn hàng chi tiết có Order_detail_id là 1
// $result =$t-> updateOrderDetail(1, $updateOrderDetailValues);

// // Kiểm tra kết quả của hàm
// if ($result) {
//     echo "Cập nhật đơn hàng chi tiết thành công!";
// } else {
//     echo "Cập nhật đơn hàng chi tiết thất bại!";
// }
// $orderDetailIdToDelete = 8; // Thay đổi giá trị này bằng Order_detail_id thực tế bạn muốn xóa
// $result = $t->deleteOrderDetail($orderDetailIdToDelete);

// // Kiểm tra kết quả của hàm
// if ($result) {
//     echo "Xóa đơn hàng chi tiết thành công!";
// } else {
//     echo "Xóa đơn hàng chi tiết thất bại!";
// }
