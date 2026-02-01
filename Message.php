<?php
require_once 'config/Database.php';

class Message {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function send($name, $email, $message) {
        $query = "INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $this->conn->prepare($query);

        $name = htmlspecialchars(strip_tags($name));
        $email = htmlspecialchars(strip_tags($email));
        $message = htmlspecialchars(strip_tags($message));

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function getAllMessages() {
        $query = "SELECT * FROM messages ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>