const toggleBtn = document.querySelector('.mobile-menu-toggle');
const navLinks = document.querySelector('.nav-links');

toggleBtn.addEventListener('click', () => {
navLinks.classList.toggle('open');
});
