<?php
class Users {
    private $conn;
    private $table_name = "users";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($name, $surname, $email, $username, $password) {
        $query = "INSERT INTO " . $this->table_name . " (name, surname, email, username, password, role) VALUES (:name, :surname, :email, :username, :password, 'user')";
        $stmt = $this->conn->prepare($query);

        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":surname", $surname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password_hash);

        return $stmt->execute();
    }
}
?>