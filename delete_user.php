<?php
session_start();
require_once 'config/Database.php';

if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin' && isset($_GET['id'])) {
    $database = new Database();
    $db = $database->getConnection();
    
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        header("Location: admin_dashboard.php");
    }
    
} else {
    echo "Nuk keni autorizim!";
}
?>