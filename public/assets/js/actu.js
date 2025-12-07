const closemess = document.querySelector(".closemess");
const messages = document.querySelector(".messages");
const boutons = document.querySelectorAll(".message");

boutons.forEach(bouton => {
    bouton.addEventListener('click', () => {
        messages.style.opacity = "1";
    })
})

closemess.addEventListener('click', () => {
    messages.style.opacity = "0";
})