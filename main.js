
document.addEventListener('DOMContentLoaded', () => {
    
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.main-nav ul');

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('show'); 
        });
    }


    const buyButtons = document.querySelectorAll('.btn-buy, .btn-ticket');

    buyButtons.forEach(button => {
        button.addEventListener('click', () => {
            alert("Per te porositur Bileten/Produktin duhet te jeni regjistruar!");
        });
    });


    
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            let isValid = true;
            
            const fullname = document.getElementById('fullname');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirm-password');

            clearErrors();

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

            if (!isValid) {
                e.preventDefault();
            } else {
                alert("Regjistrimi u krye me sukses!");
            }
        });
    }


const loginForm = document.getElementById('loginForm');

if (loginForm) {
    loginForm.addEventListener('submit', (e) => {
        
        const usernameInput = document.getElementById('username'); 
        const passwordInput = document.getElementById('password'); 
        
        let isValid = true;
        clearErrors(); 
        
        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();
        
        if (username === '') {
            showError(usernameInput, 'Ju lutemi shkruani Emrin e Përdoruesit ose E-mailin.');
            isValid = false;
        } else if (username.length < 3) {
             showError(usernameInput, 'Emri i Përdoruesit është shumë i shkurtër.');
             isValid = false;
        }

        if (password === '') {
            showError(passwordInput, 'Shkruani Fjalëkalimin.');
            isValid = false;
        } else if (password.length < 8) { 
            showError(passwordInput, 'Fjalëkalimi duhet të ketë së paku 8 karaktere.');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault(); 
            return;
        }
        
        
    });
}

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


function showError(inputElement, message) {
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

const searchInput = document.getElementById('searchInput');
const searchBtn = document.getElementById('searchBtn');

function performSearch() {
    const query = searchInput.value.toLowerCase().trim();

    if (query === "") return;

    if (query.includes('shop') || query.includes('fanella') || query.includes('blej')) {
        window.location.href = 'shop.html'; 
    } 
    else if (query.includes('squad') || query.includes('ekipi') || query.includes('lojtaret')) {
        window.location.href = 'squad.html'; 
    }
    else if (query.includes('lajme') || query.includes('news')) {
        window.location.href = 'news.html';
    }
    else if (query.includes('kontakt') || query.includes('rreth')) {
        window.location.href = 'aboutus.html';
    }
    else {
        alert("Nuk u gjet asgjë për: " + query);
    }
    
    searchInput.value = ''; 
}

if (searchBtn) {
    searchBtn.addEventListener('click', performSearch);
}
if (searchInput) {
    searchInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') performSearch();
    });
}