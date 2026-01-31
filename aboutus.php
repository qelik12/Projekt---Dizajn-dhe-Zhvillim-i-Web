<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>About Us - Lion Pride F.C.</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <div class="aboutus-background"></div>

    <header>
        <div class="top-bar">
            <a href="LoginForm.html">Login</a>
            <a href="register.html">Register</a>

            <div class="search-container">
              <input type="text" id="searchInput" placeholder="Kërko...">
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
                <li><a href="index.html" >HOME</a></li>
                <li><a href="squad.html" >TEAM</a></li> 
                <li><a href="news.html">NEWS</a></li> 
                <li><a href="matches.html">MATCHES</a></li>
                <li><a href="shop.html">SHOP</a></li>
                <li><a href="aboutus.html" class="active">ABOUT US</a></li>
            </ul>
        </nav>
    </header>

    <div class="page-header">
        <h2>OUR HISTORY & MISSION</h2>
    </div>

    <main class="about-container">
        <div class="about-text">
            <h3 style="color: #c5a059; margin-bottom: 15px; font-family: 'Oswald', sans-serif;">NJË SHEKULL PASION</h3>
            <p>
                Lion Pride F.C. u themelua në vitin 1924 nga një grup studentësh pasionantë. 
                Që nga ajo ditë, klubi është rritur për të u bërë një nga simbolet më të mëdha të futbollit botëror.
                Ne nuk luajmë vetëm për të fituar, ne luajmë për të frymëzuar.
            </p>
            <p>
                Misioni ynë është të zhvillojmë talentet e reja dhe të sjellim gëzim për miliona tifozë në mbarë botën.
                Me shtëpinë tonë në stadiumin legjendar, ne jemi më shumë se një klub - ne jemi një familje.
            </p>
        </div>

        <div class="trophy-section">
            <h3 style="color: white; margin-bottom: 15px;">TROPHIES CABINET</h3>
            <div class="trophy-list">
                <span>🏆 14x Champions League</span>
                <span>🏆 35x League Titles</span>
                <span>🏆 20x National Cups</span>
            </div>
        </div>

<div class="history-gallery-section">
            <h2 id="galleryTitle">Historia jonë në foto</h2>
            
            <div class="photo-grid">
                <div class="photo-item">
                    <img src="images/historia-topi-pare.jpg" alt="Lojtar duke kontrolluar topin me gjoks">
                    <p class="photo-caption">Kontrolli i parë i topit në fushën tonë historike.</p>
                </div>

                <div class="photo-item">
                    <img src="images/historia-duel-ajror.jpg" alt="Dy lojtarë në duel për topin me kokë">
                    <p class="photo-caption">Duel intensiv në ajër gjatë një ndeshjeje derbi të hershme.</p>
                </div>

                <div class="photo-item">
                    <img src="images/historia-goditja-fituese.jpg" alt="Lojtar duke goditur topin">
                    <p class="photo-caption">Momenti i golit që na solli titullin e parë kampion.</p>
                </div>

                <div class="photo-item">
                    <img src="images/historia-aksion-shpejtesi.jpg" alt="Lojtar duke vrapuar me top">
                    <p class="photo-caption">Aksion i shpejtë gjatë një turneu ndërkombëtar në vitet '90.</p>
                </div>

                <div class="photo-item">
                    <img src="images/historia-portieri-hero.jpg" alt="Portieri duke komanduar mbrojtjen">
                    <p class="photo-caption">Portieri hero i viteve '80 duke udhëhequr ekipin.</p>
                </div>
                
                <div class="photo-item">
                    <img src="images/historia-stadiumi-legjendar.jpg" alt="Stadiumi i klubit nga pamja e lart">
                    <p class="photo-caption">Shtëpia jonë: Stadiumi legjendar nga pamja e syve të Zotit.</p>
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
                    <li><a href="index.html">Ballina</a></li>
                    <li><a href="squad.html">Skuadra</a></li>
                    <li><a href="shop.html">Bli Tani</a></li>
                    <li><a href="news.html">Lajmet e Fundit</a></li>
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