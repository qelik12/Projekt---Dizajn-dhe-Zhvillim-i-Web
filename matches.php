<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Matches - Lion Pride F.C.</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <div class="matches-background"></div>

    <header>
        <div class="top-bar">
            <a href="LoginForm.php">Login</a>
            <a href="register.php">Register</a>

            <div class="search-container">
              <input name="searchMatch" type="text" id="searchInput" placeholder="Kërko...">
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
                <li><a href="index.php" >HOME</a></li>
                <li><a href="squad.php" >TEAM</a></li> 
                <li><a href="news.php" >NEWS</a></li> 
                <li><a href="matches.php" class="active">MATCHES</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
            </ul>
        </nav>

    </header>

    <div class="page-header">
        <h2>UPCOMING FIXTURES</h2>
    </div>

    <main class="matches-container">
        
        <div class="match-row">
            <div class="match-teams">
                <span>LION PRIDE</span>
                <span class="vs-badge">VS</span>
                <span>BARCELONA</span>
            </div>
            <div class="match-info">
                <span class="match-date">12 DHJETOR | 21:00</span>
                <span class="match-stadium">Santiago Bernabéu</span>
            </div>
            <button class="btn-ticket">BUY TICKETS</button>
        </div>

        <div class="match-row">
            <div class="match-teams">
                <span>LIVERPOOL</span>
                <span class="vs-badge">VS</span>
                <span>LION PRIDE</span>
            </div>
            <div class="match-info">
                <span class="match-date">18 DHJETOR | 20:45</span>
                <span class="match-stadium">Anfield</span>
            </div>
            <button class="btn-ticket">AWAY TICKETS</button>
        </div>

        <div class="match-row">
            <div class="match-teams">
                <span>LION PRIDE</span>
                <span class="vs-badge">VS</span>
                <span>AC MILAN</span>
            </div>
            <div class="match-info">
                <span class="match-date">24 DHJETOR | 19:00</span>
                <span class="match-stadium">Santiago Bernabéu</span>
            </div>
            <button class="btn-ticket">BUY TICKETS</button>
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