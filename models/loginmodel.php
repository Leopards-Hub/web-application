<?php
class UserModal {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUser($username, $password) {
        $query = "SELECT * FROM User WHERE Username = :username AND Password = :password";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
?>