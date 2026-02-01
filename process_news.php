<?php
session_start();
require_once 'config/Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
    $database = new Database();
    $db = $database->getConnection();

    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id']; 

    $target_dir = "uploads/";
    $file_name = time() . "_" . basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $query = "INSERT INTO news (title, content, image_path, user_id) VALUES (:title, :content, :image, :user_id)";
        $stmt = $db->prepare($query);
        
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $target_file);
        $stmt->bindParam(':user_id', $user_id);

        if ($stmt->execute()) {
            header("Location: index.php?success=news_added");
        } else {
            echo "Gabim gjatë ruajtjes në databazë.";
        }
    } else {
        echo "Gabim gjatë ngarkimit të fotos.";
    }
}
?>