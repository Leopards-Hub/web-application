<?php 
class Admin{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getTotalUsersCount(){
        $query = "SELECT COUNT(*) AS total_users FROM users";
        try {
            $stmt = $this->db->query($query);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // Trả về số lượng người dùng
            return $result['total_users'];
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function getTotalOrdersCount(){
        $query = "SELECT COUNT(*) AS total_orders FROM orders";
        try{
            $stmt = $this->db->query($query);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['total_orders'];

        }catch(PDOException $e ){
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function getCustomerVisitorsCount(){
        $fp = 30000;
        $fo = fopen($fp, 'r');
        $count = fread($fo,filesize($fp));
        $count++;
        $fc = fclose($fo);
        $fo = fopen($fp, 'w');
        $fw = fwrite($fo,$count);
        $fc = fclose($fo);
    }
    
}
