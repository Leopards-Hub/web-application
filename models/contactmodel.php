<?php
require_once "database/database.php";
class Contact{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function fetchAll(){
        $query = "SELECT * FROM contacts";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function createContact($contact){
        // Sử dụng filter_var để làm sạch dữ liệu nhập vào
        $cleanedName = filter_var($contact['name'], FILTER_SANITIZE_STRING);
        $cleanedEmail = filter_var($contact['email'], FILTER_SANITIZE_EMAIL);
        $cleanedSubject = filter_var($contact['subject'], FILTER_SANITIZE_STRING);
        $cleanedMessage = filter_var($contact['message'], FILTER_SANITIZE_STRING);
    
        $query = "INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':name', $cleanedName);
            $stmt->bindParam(':email', $cleanedEmail);
            $stmt->bindParam(':subject', $cleanedSubject);
            $stmt->bindParam(':message', $cleanedMessage);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();  
            return false;
        }
    }
    
}
$t = new Contact($db);

// $value =[
//     'name' => "hung",
//     'email' => "hung@gmail.com",
//     'subject' =>"feedback",
//     'message'=>"xon chaoo",
// ];
// $t->createContact($value);
