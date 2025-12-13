
document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. MOBILE MENU (HAMBURGER) ---
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.main-nav ul');

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('show'); // Shfaq/Fsheh menune
        });
    }

    // --- 2. INTERAKTIVITETI I DYQANIT DHE BILETAVE ---
    // Gjej të gjithë butonat "Shto në Shportë" dhe "Blej Bileta"
    const buyButtons = document.querySelectorAll('.btn-buy, .btn-ticket');

    buyButtons.forEach(button => {
        button.addEventListener('click', () => {
            alert("Produkti/Bileta u shtua në shportë me sukses!");
        });
    });


    // --- 3. VALIDIMI I FORMAVE ---
    
    // A. Validimi i Formës së Regjistrimit
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            let isValid = true;
            
            // Merr vlerat
            const fullname = document.getElementById('fullname');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirm-password');

            // Pastro gabimet e vjetra
            clearErrors();

            // Rregullat
            if (fullname.value.trim() === '') {
                showError(fullname, 'Emri nuk mund të jetë bosh');
                isValid = false;
            }

            if (!isValidEmail(email.value)) {
                showError(email, 'Ju lutem shkruani një email të saktë');
                isValid = false;
            }

            if (password.value.length < 8) {
                showError(password, 'Fjalëkalimi duhet të ketë të paktën 8 karaktere');
                isValid = false;
            }

            if (password.value !== confirmPassword.value) {
                showError(confirmPassword, 'Fjalëkalimet nuk përputhen');
                isValid = false;
            }

            // Nëse ka gabime, ndalo dërgimin
            if (!isValid) {
                e.preventDefault();
            } else {
                alert("Regjistrimi u krye me sukses!");
            }
        });
    }

    // B. Validimi i Formës Login
    const loginForm = document.getElementById('loginForm'); // Sigurohu qe forma ne login.html ka id="loginForm"
    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            let isValid = true;
            const email = document.getElementById('email');
            const password = document.getElementById('password');

            clearErrors();

            if (!isValidEmail(email.value)) {
                showError(email, 'Email nuk është valid');
                isValid = false;
            }

            if (password.value.trim() === '') {
                showError(password, 'Shkruani fjalëkalimin');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    }

    // C. Validimi i Formës së Kontaktit
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            let isValid = true;
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            clearErrors();

            if (name.value.trim() === '') {
                showError(name, 'Emri është i detyrueshëm');
                isValid = false;
            }

            if (!isValidEmail(email.value)) {
                showError(email, 'Email nuk është valid');
                isValid = false;
            }

            if (message.value.trim().length < 10) {
                showError(message, 'Mesazhi duhet të ketë të paktën 10 karaktere');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
            } else {
                alert("Mesazhi u dërgua!");
            }
        });
    }

});

// --- FUNKSIONET NDIHMËSE ---

function showError(inputElement, message) {
    // Gjej prinderin (.form-group) dhe elementin span.error-msg
    const parent = inputElement.parentElement;
    const errorSpan = parent.querySelector('.error-msg') || parent.querySelector('.error-message');
    
    if (errorSpan) {
        errorSpan.innerText = message;
        inputElement.style.borderColor = "red";
    }
}

function clearErrors() {
    const errorSpans = document.querySelectorAll('.error-msg, .error-message');
    const inputs = document.querySelectorAll('input, textarea');

    errorSpans.forEach(span => span.innerText = '');
    inputs.forEach(input => input.style.borderColor = '#ccc');
}

function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

/* === LOGJIKA E KËRKIMIT === */
const searchInput = document.getElementById('searchInput');
const searchBtn = document.getElementById('searchBtn');

function performSearch() {
    const query = searchInput.value.toLowerCase().trim();

    if (query === "") return;

    // Logjika e drejtimit - Tani me drejtim direkt
    if (query.includes('shop') || query.includes('fanella') || query.includes('blej')) {
        // Dërgo direkt te emri i saktë i skedarit (shop.html)
        window.location.href = 'shop.html'; 
    } 
    else if (query.includes('squad') || query.includes('ekipi') || query.includes('lojtaret')) {
        // Dërgo direkt te emri i saktë i skedarit (squad.html)
        window.location.href = 'squad.html'; 
    }
    else if (query.includes('lajme') || query.includes('news')) {
        // Dërgo direkt te emri i saktë i skedarit (news.html)
        window.location.href = 'news.html';
    }
    else if (query.includes('kontakt') || query.includes('rreth')) {
        // Dërgo direkt te emri i saktë i skedarit (aboutus.html)
        window.location.href = 'aboutus.html';
    }
    else {
        alert("Nuk u gjet asgjë për: " + query);
    }
    
    // Pastro fushën pas kërkimit
    searchInput.value = ''; 
}

// Lidhja me butonin dhe Enter - Kjo pjesë është në rregull
if (searchBtn) {
    searchBtn.addEventListener('click', performSearch);
}
if (searchInput) {
    searchInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') performSearch();
    });
}