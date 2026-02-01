<?php
session_start();
require_once 'Message.php';

$successMsg = "";
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = trim($_POST['message']);

    if (empty($name) || !$email || empty($message)) {
        $errorMsg = "Ju lutem plotësoni të gjitha fushat saktë dhe jepni një email valid.";
    } else {
        $msgObj = new Message();
        if ($msgObj->send($name, $email, $message)) {
            $successMsg = "Mesazhi u dërgua me sukses!";
        } else {
            $errorMsg = "Ndodhi një gabim teknik. Provo përsëri.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Na Kontaktoni - Lion Pride F.C.</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-container { max-width: 800px; margin: 50px auto; padding: 20px; color: white; }
        .form-box { background: #1a1a1a; padding: 40px; border-radius: 10px; border-top: 3px solid #d4af37; }
        input, textarea { width: 100%; padding: 15px; margin: 10px 0; background: #333; border: 1px solid #444; color: white; border-radius: 5px; box-sizing: border-box; }
        input:focus, textarea:focus { outline: none; border-color: #d4af37; }
        .btn-send { background: #d4af37; color: black; padding: 15px 30px; border: none; font-weight: bold; cursor: pointer; width: 100%; text-transform: uppercase; margin-top: 10px; }
        .btn-send:hover { background: #f1c40f; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 5px; text-align: center; }
        .success { background: green; color: white; }
        .error { background: red; color: white; }
    </style>
</head>
<body>

    <h1 style="text-align:center; margin-top: 40px;">NA KONTAKTONI</h1>
    <div style="text-align:center;">
        <a href="index.php" style="color: #d4af37; text-decoration: none;">&larr; Kthehu në Ballinë</a>
    </div>

    <div class="contact-container">
        <?php if ($successMsg): ?>
            <div class="alert success"><?php echo $successMsg; ?></div>
        <?php endif; ?>
        
        <?php if ($errorMsg): ?>
            <div class="alert error" style="background: red; color: white; padding: 10px; margin-bottom: 10px;"><?php echo $errorMsg; ?></div>
        <?php endif; ?>

        <div class="form-box">
            <form action="contact.php" method="POST">
                <label>Emri Juaj</label>
                <input type="text" name="name" placeholder="Shkruani emrin..." required>

                <label>Email Adresa</label>
                <input type="email" name="email" placeholder="Shkruani emailin..." required>

                <label>Mesazhi</label>
                <textarea name="message" rows="6" placeholder="Shkruani mesazhin tuaj këtu..." required></textarea>

                <button type="submit" class="btn-send">Dërgo Mesazhin</button>
            </form>
        </div>
    </div>

</body>
</html>