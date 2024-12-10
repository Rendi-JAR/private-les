const daftarLink = document.querySelector('.text-wrapper'); 
const loginLink = document.querySelector('.div-wrapper a'); 
const searchInput = document.querySelector('.search-input'); 
const searchButton = document.querySelector('.search-btn'); 
const navbarLinks = document.querySelectorAll('.nav-links a'); 

daftarLink.addEventListener('click', function(event) {
    event.preventDefault();
    console.log('Tombol DAFTAR diklik!');
    window.location.href = 'login.html';
});

loginLink.addEventListener('click', function(event) {
    event.preventDefault();
    console.log('Tombol Login diklik!');
    window.location.href = 'regis.html';
});

searchButton.addEventListener('click', function() {
    const query = searchInput.value;
    if (query.trim() !== '') {
        console.log('Kamu mencari:', query);
        alert('Mencari: ' + query);
    } else {
        alert('Silakan masukkan sesuatu untuk dicari!');
    }
});

navbarLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        console.log('Navigasi ke:', link.textContent);
    });
});

function hidePreloader() {
    setTimeout(function () {
        document.getElementById("preloader").style.display = "none";
        document.getElementById("content").style.display = "block";
    }, 2000);
}
