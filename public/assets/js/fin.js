const closetxt = document.querySelector('.closetxt');
const fenetre = document.querySelector('.fenetre1');
const text = document.querySelector('.text');

closetxt.addEventListener('click', () => {
    text.style.transform = "scale(0)";
    fenetre.style.opacity = "0";
})

const acc = document.querySelector('.acc');
acc.addEventListener('click', () => {
        fenetre.style.opacity = "1";
        text.style.transform = "scale(1)";
    })