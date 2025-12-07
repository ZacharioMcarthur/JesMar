let navbar = document.querySelector('.barnav');
window.addEventListener('scroll', () => {
    if (window.scrollY > 70) {
        navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
})