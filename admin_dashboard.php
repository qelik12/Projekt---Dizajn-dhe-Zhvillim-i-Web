<?php
session_start();
require_once 'config/Database.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

$database = new Database();
$db = $database->getConnection();

$query = "SELECT id, name, surname, email, username, role FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Lion Pride F.C.</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .admin-table { width: 90%; margin: 50px auto; border-collapse: collapse; background: white; color: black; }
        .admin-table th, .admin-table td { padding: 15px; border: 1px solid #ddd; text-align: left; }
        .admin-table th { background-color: #d4af37; color: white; }
        .btn-delete { background: red; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; }
    </style>
</head>
<body>
    <h1 style="text-align:center; margin-top:30px;">Paneli i Administratorit</h1>
    <p style="text-align:center;">Mirësevjen, <?php echo $_SESSION['username']; ?>! | <a href="index.php">Kthehu te Ballina</a></p>

    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Emri & Mbiemri</th>
                <th>Email</th>
                <th>Username</th>
                <th>Roli</th>
                <th>Veprime</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $u): ?>
            <tr>
                <td><?php echo $u['id']; ?></td>
                <td><?php echo $u['name'] . " " . $u['surname']; ?></td>
                <td><?php echo $u['email']; ?></td>
                <td><?php echo $u['username']; ?></td>
                <td><strong><?php echo $u['role']; ?></strong></td>
                <td>
                    <?php if ($u['id'] != $_SESSION['user_id']): ?>
                       <a href="delete_user.php?id=<?php echo $u['id']; ?>" class="btn-delete" onclick="return confirm('A jeni i sigurt?')">Fshij</a>
                      <?php else: ?>
                       <span style="color: gray; font-style: italic;">Ti (Admin)</span>
                     <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>