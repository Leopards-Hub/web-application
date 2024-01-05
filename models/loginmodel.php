<?php

class LoginModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function loginUser($Username, $Password) {
        try {
            $query = "SELECT * FROM Users WHERE Username = :Username";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':Username', $Username);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && $Password === $user['Password']) {
                return $user;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

}
?>
