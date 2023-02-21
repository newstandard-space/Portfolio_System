const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const navtoggle = document.querySelector('.nav-toggle');

navToggle.addEventListener('click', () => {
    if (navToggle.classList.contains("active")) {
        navToggle.classList.remove('active');
    } else {
        navToggle.classList.add('active');
    }
});