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

    public function logoutUser() {
        // Perform logout actions if needed
        // You can unset or destroy the session here
        session_start(); // Make sure to start the session
        session_unset();
        session_destroy();
    }
}
?>
