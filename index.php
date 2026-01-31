<?php session_start(); ?>

<script>
    const isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;
</script>


<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lion Pride F.C. - Official Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <div class="main-background"></div>

    <header>
    <div class="top-bar">
        <?php if (isset($_SESSION['user_id'])): ?>
            <span class="user-welcome">Përshëndetje, <strong><?php echo $_SESSION['username']; ?></strong></span>
            
            <?php if ($_SESSION['role'] == 'admin'): ?>
                <a href="admin_dashboard.php" style="color: #ffcc00; margin-left: 10px; font-weight: bold;">Admin Panel</a>
            <?php endif; ?>
            
            <a href="logout.php" style="margin-left: 15px; color: #ff4d4d;">Logout</a>

        <?php else: ?>
            <a href="LoginForm.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>

        <div class="search-container">
            <input name="search" type="text" id="searchInput" placeholder="Kërko...">
            <button id="searchBtn">🔍</button>
        </div>
    </div>

    <div class="brand-center">
        <div class="logo-container">
            <img src="images/Logo.png" alt="Logo" class="main-logo">
        </div>
        <h1>LION PRIDE F.C.</h1>
    </div>

    <nav class="main-nav">
        <div class="hamburger">☰</div>
        <ul>
            <li><a href="index.php" class="active">HOME</a></li>
            <li><a href="squad.php">TEAM</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="matches.php">MATCHES</a></li>
            <li><a href="shop.php">SHOP</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>

        </ul>
    </nav>
</header>

    <main class="container">
        
        <div class="hero-grid">
            
            <div class="main-featured-card">
                <img src="images/Gemini_Generated_Image_hnfj67hnfj67hnfj.png" alt="Lojtarët në fushë">
                <div class="card-overlay">
                    <span class="tag">MATCH REPORT</span>
                    <h2>FITORE E MADHE NË SHTËPI KUNDËR RIVALËVE</h2>
                    <a href="#" class="read-more">LEXO MË SHUMË &rarr;</a>
                </div>
            </div>

            <div class="side-news-list">
                <h3>LATEST NEWS</h3>
                
                <div class="side-card">
                    <img src="images/text-lines.png" alt="Lajm i vogel">
                    <div class="side-info">
                        <span class="date">28 NËNTOR</span>
                        <h4>Transferimet e reja të sezonit</h4>
                    </div>
                </div>

                <div class="side-card">
                    <img src="images/text-lines.png" alt="Lajm i vogel">
                    <div class="side-info">
                        <span class="date">27 NËNTOR</span>
                        <h4>Intervistë ekskluzive me kapitenin</h4>
                    </div>
                </div>

                <div class="side-card schedule-card">
                    <h4>NDESHJA E RADHËS</h4>
                    <p>Lion Pride vs. City FC</p>
                    <button class="btn-small">BLEJ BILETA</button>
                </div>
            </div>

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