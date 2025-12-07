const menu = document.querySelector(".menu");
const menubtn = document.querySelector(".menubtn");
const fond = document.querySelector(".fondt");
menubtn.addEventListener('click', ()=>{
    console.log('bouton clické !')
    fond.style.display = "flex";
    menu.style.transform = "translateX(-80%)";
})

const closemenu = document.querySelector(".closemenu");
closemenu.addEventListener('click', ()=>{
    menu.style.transform = "translateX(0)";
    fond.style.display = "none";
})