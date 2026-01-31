<?php
include_once 'config/Database.php';
include_once 'models/User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = trim($_POST['fullname']); 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password']; 
    $username = $_POST['username']; 

    if ($password !== $confirm_password) {
        echo "<script>alert('Fjalëkalimet nuk përputhen!'); window.history.back();</script>";
        exit();
    }

    $parts = explode(" ", $fullname);
    $name = $parts[0]; 
    $surname = isset($parts[1]) ? implode(" ", array_slice($parts, 1)) : ""; 

    if ($user->register($name, $surname, $email, $username, $password)) {
        echo "<script>alert('Regjistrimi u krye!'); window.location.href='LoginForm.php';</script>";
    } else {
        echo "<script>alert('Gabim! Ky Username ose Email mund të jetë i zënë.');</script>";
    }
}
?>




<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Lion Pride F.C.</title>
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
            <h2>BASHKOHU ME SQUADRËN</h2>
            <p>Krijo llogarinë tënde zyrtare</p>

            <form method="POST" id="registerForm"> <div class="form-group">
                    <label for="fullname">Emri i Plotë</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Emri dhe Mbiemri">
                    <span class="error-msg" id="nameError"></span>
                </div>

                <div class="form-group">
                    <label for="email">E-mail Adresa</label>
                    <input type="email" id="email" name="email" placeholder="example@email.com">
                    <span class="error-msg" id="emailError"></span>
                </div>

                <div class="form-group">
                    <label for="username">Emri i Përdoruesit</label>
                    <input type="text" id="username" name="username" placeholder="Emri i përdoruesit">
                    <span class="error-msg" id="usernameError"></span>
                </div>

                <div class="form-group">
                    <label for="password">Fjalëkalimi</label>
                    <input type="password" id="password" name="password" placeholder="Minimum 8 karaktere">
                    <span class="error-msg" id="passError"></span>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Konfirmo Fjalëkalimin</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Përsërit fjalëkalimin">
                    <span class="error-msg" id="confirmPassError"></span>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="terms" name="terms">
                    <label for="terms">Pranoj Termat dhe Kushtet</label>
                </div>

                <button type="submit" class="btn-gold-full">REGJISTROHU</button>

                <div class="form-footer">
                    <p>Ke tashmë një llogari? <a href="LoginForm.php">Hyni këtu</a></p>
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