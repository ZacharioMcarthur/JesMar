const slides = document.querySelector('.slides')
const nextone = document.querySelector('.nextone');
const nexttwo = document.querySelector('.nexttwo');
const nextthree = document.querySelector('.nextthree');
const nextfour = document.querySelector('.nextfour');
const prevone = document.querySelector('.prevone');
const prevtwo = document.querySelector('.prevtwo');
const prevthree = document.querySelector('.prevthree');
const prevfour = document.querySelector('.prevfour');

nextone.addEventListener('click', ()=>{
    console.log("Next button clicked");
    slides.style.transform = "translateX(-100%)";
})

nexttwo.addEventListener('click', ()=>{
    console.log("Next button clicked");
    slides.style.transform = "translateX(-200%)";
})

nextthree.addEventListener('click', ()=>{
    console.log("Next button clicked");
    slides.style.transform = "translateX(-300%)";
})

nextfour.addEventListener('click', ()=>{
    console.log("Next button clicked");
    slides.style.transform = "translateX(-400%)";
})

prevone.addEventListener('click', ()=>{
    console.log("Prev button clicked");
    slides.style.transform = "translateX(0%)";
})

prevtwo.addEventListener('click', ()=>{
    console.log("Prev button clicked");
    slides.style.transform = "translateX(-100%)";
})

prevthree.addEventListener('click', ()=>{
    console.log("Prev button clicked");
    slides.style.transform = "translateX(-200%)";
})
prevfour.addEventListener('click', ()=>{
    console.log("Prev button clicked");
    slides.style.transform = "translateX(-300%)";
})
