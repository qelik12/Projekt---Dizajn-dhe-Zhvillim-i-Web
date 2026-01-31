<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>News - Lion Pride F.C.</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <div class="news-background"></div>

    <header>
        <div class="top-bar">
            <a href="LoginForm.php">Login</a>
            <a href="register.php">Register</a>

            <div class="search-container">
                <input name="searchNews" type="text" id="searchInput" placeholder="Kërko...">
                <button id="searchBtn">🔍</button>
            </div>
        </div>

        <div class="brand-center">
             <h1><a href="index.php" style="color: white; text-decoration: none;">LION PRIDE F.C.</a></h1>
        </div>

        <nav class="main-nav">
            <div class="hamburger">☰</div>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="squad.php">TEAM</a></li>
                <li><a href="news.php" class="active">NEWS</a></li>
                <li><a href="matches.php">MATCHES</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li> </ul>
        </nav>
    </header>

    <div class="page-header">
        <h2>CLUB NEWS</h2>
    </div>

    <main class="news-container">
        <article class="news-item">
            <img src="images/training.jpg" alt="Lajmi 1"> 
            <div class="news-content">
                <span class="news-meta">10 DHJETOR 2024 | CLUB OFFICIAL</span>
                <h3>TRAJNIMI I FUNDIT PARA DERBIT TË MADH</h3>
                <p class="news-excerpt">Skuadra ka përfunduar seancën e fundit stërvitore në qendrën sportive. Trajneri është shprehur optimist për gjendjen e lojtarëve...</p>
                <a href="#" class="read-more-link">LEXO MË SHUMË &rarr;</a>
            </div>
        </article>

        <article class="news-item">
            <img src="images/contrat.jpg" alt="Lajmi 2">
            <div class="news-content">
                <span class="news-meta">08 DHJETOR 2024 | TRANSFERS</span>
                <h3>ZYRTARE: SHTYLLA E MBROJTJES RINOVON KONTRATËN</h3>
                <p class="news-excerpt">Klubi është i lumtur të njoftojë se mbrojtësi ynë kryesor ka nënshkruar një kontratë të re 3 vjeçare, duke hedhur poshtë zërat për largim...</p>
                <a href="#" class="read-more-link">LEXO MË SHUMË &rarr;</a>
            </div>
        </article>
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