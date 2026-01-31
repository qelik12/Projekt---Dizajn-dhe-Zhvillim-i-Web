<?php
session_start(); 
require_once 'config/Database.php';
require_once 'models/User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userData = $user->login($username, $password);

    if ($userData) {
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['username'] = $userData['username'];
        $_SESSION['role'] = $userData['role'];

        if ($userData['role'] == 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: index.php");
        }
    } else {
        echo "<script>alert('Username ose Password gabim!');</script>";
    }
}
?>





<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyrja në Llogari - Lion Pride F.C.</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <div class="register-background"></div>

    <header>
        <div class="brand-center">
            <div class="logo-container">
                <img src="images/Logo.png" alt="Logo" class="main-logo">
            </div>
            <h1><a href="index.php" style="color: white; text-decoration: none;">LION PRIDE F.C.</a></h1>
        </div>
    </header>

    <main class="auth-container">
       
        <div class="auth-card">
            <h2>Hyr në Llogari</h2>
            <p>Përdorni kredencialet tuaja zyrtare</p>

            <form method="POST" id="loginForm">
               
                <div class="form-group">
                    <label for="username">Emri i Përdoruesit</label>
                    <input type="text" id="username" name="username" placeholder="Emri i Përdoruesit ose E-mail">
                    <span class="error-msg" id="userError"></span>
                </div>

                <div class="form-group">
                    <label for="password">Fjalëkalimi</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                    <span class="error-msg" id="passError"></span>
                </div>

                <button type="submit" class="btn-gold-full">HYR</button>

                <div class="form-footer">
                    <p>Nuk keni llogari? <a href="register.php">Regjistrohuni këtu</a></p>
                    <p><a href="#" class="forgot-link">Kam harruar Fjalëkalimin</a></p>
                </div>
                
            </form>

        </div>

    </main>

    <footer class="main-footer">
        <div class="footer-container">

            <div class="footer-column brand-info">
                <img src="images/Logo.png" alt="Logo Footer" class="footer-logo">
                <p>Lion Pride F.C. - Një histori e pasionit, suksesit dhe traditës që nga viti 1924.</p>
                <p class="copyright">&copy; 2024 Lion Pride F.C. All rights reserved.</p>
            </div>

            <div class="footer-column quick-links">
                <h3>LINQET E SHPEJTA</h3>
                <ul>
                    <li><a href="index.php">Ballina</a></li>
                    <li><a href="squad.php">Skuadra</a></li>
                    <li><a href="shop.php">Bli Tani</a></li>
                    <li><a href="news.php">Lajmet e Fundit</a></li>
                </ul>
            </div>

            <div class="footer-column contact-info">
                <h3>KONTAKTI</h3>
                <p>📍 Stadiumi: Lion Arena, Rr. e Luanëve, 10000</p>
                <p>📞 Telefon: +383 4X XXX XXX</p>
                <p>📧 Email: <a href="mailto:info@lionpridefc.com">info@lionpridefc.com</a></p>
                
                <div class="social-links">
                    <a href="#"><img src="images/facebook-app-symbol.png" alt="Facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
                    <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
                </div>
            </div>

        </div>
    </footer>

    <script src="main.js"></script>
</body>
</html>