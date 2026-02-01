<?php
session_start();
require_once 'config/Database.php';
require_once 'Message.php';

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

$msgObj = new Message();
$messages = $msgObj->getAllMessages();
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Lion Pride F.C.</title>
    <link rel="stylesheet" href="style.css">
  <style>
    body { background-color: #0a0a0a; color: white; font-family: 'Roboto', sans-serif; }
    
    .admin-container { width: 95%; max-width: 1200px; margin: 30px auto; }
    
    .dashboard-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; border-bottom: 2px solid #d4af37; padding-bottom: 15px; }
    
    .btn-add { background: #28a745; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; font-weight: bold; transition: 0.3s; }
    .btn-add:hover { background: #218838; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(40, 167, 69, 0.3); }

    .admin-table { width: 100%; border-collapse: separate; border-spacing: 0 10px; }
    .admin-table th { background-color: #d4af37; color: #000; padding: 15px; text-transform: uppercase; letter-spacing: 1px; }
    .admin-table td { background-color: #1a1a1a; color: #ccc; padding: 15px; border: none; }
    
    .admin-table tr td:first-child { border-top-left-radius: 8px; border-bottom-left-radius: 8px; }
    .admin-table tr td:last-child { border-top-right-radius: 8px; border-bottom-right-radius: 8px; }
    
    .admin-table tr:hover td { background-color: #252525; color: white; }

    .btn-delete { background: #dc3545; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; font-size: 14px; }
    .btn-edit { background: #d4af37; color: black; padding: 6px 12px; text-decoration: none; border-radius: 4px; font-size: 14px; margin-right: 5px; font-weight: bold; }
    
    .status-admin { color: #d4af37; font-weight: bold; text-transform: uppercase; font-size: 12px; }
</style>
</head>
<body>
    <div class="admin-container">
        <div class="dashboard-header">
            <div>
                <h1>PANELI I ADMINISTRATORIT</h1>
                <p>Mirësevjen, <strong><?php echo $_SESSION['username']; ?></strong></p>
            </div>
            <div>
                <a href="add_news.php" class="btn-add">+ SHTO LAJM TË RI</a>
                <a href="index.php" style="color: #d4af37; margin-left: 20px;">Ballina &rarr;</a>
            </div>
        </div>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Përdoruesi</th>
                    <th>Email</th>
                    <th>Roli</th>
                    <th>Veprime</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                <tr>
                    <td>#<?php echo $u['id']; ?></td>
                    <td>
                        <strong><?php echo $u['name'] . " " . $u['surname']; ?></strong><br>
                        <small style="color: #666;">@<?php echo $u['username']; ?></small>
                    </td>
                    <td><?php echo $u['email']; ?></td>
                    <td><span class="status-admin"><?php echo $u['role']; ?></span></td>
                    <td>
                        <?php if ($u['id'] != $_SESSION['user_id']): ?>
                            <a href="change_role.php?id=<?php echo $u['id']; ?>&current_role=<?php echo $u['role']; ?>" class="btn-edit">Ndrysho Rolin</a>
                            <a href="delete_user.php?id=<?php echo $u['id']; ?>" class="btn-delete" onclick="return confirm('A jeni i sigurt?')">Fshij</a>
                        <?php else: ?>
                            <span style="color: #555; font-style: italic;">Ti (Admin)</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <hr style="border: 1px solid #333; margin: 40px 0;">

    <h2 style="margin-bottom: 20px;">Mesazhet nga Vizitorët</h2>

    <?php if (count($messages) > 0): ?>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dërguesi</th>
                    <th>Email</th>
                    <th>Mesazhi</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $msg): ?>
                <tr>
                    <td>#<?php echo $msg['id']; ?></td>
                    <td><strong><?php echo htmlspecialchars($msg['name']); ?></strong></td>
                    <td><?php echo htmlspecialchars($msg['email']); ?></td>
                    <td style="max-width: 300px;">
                        <div style="max-height: 100px; overflow-y: auto; color: #ccc;">
                            <?php echo htmlspecialchars($msg['message']); ?>
                        </div>
                    </td>
                    <td>
                        <span class="status-admin" style="color: #888;">
                            <?php echo date('d M Y, H:i', strtotime($msg['created_at'])); ?>
                        </span>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p style="color: #666; font-style: italic;">Nuk ka asnjë mesazh të ri.</p>
    <?php endif; ?>
    </div>
</body>
</html>