const menu = document.querySelector(".menu");
const menubtn = document.querySelector(".menubtn");
const fond = document.querySelector(".fond");
menubtn.addEventListener('click', ()=>{
    menu.style.transform = "translateX(114%)";
    fond.style.display = "flex";
})

const closemenu = document.querySelector(".closemenu");
closemenu.addEventListener('click', ()=>{
    menu.style.transform = "translateX(0)";
    fond.style.display = "none";
})