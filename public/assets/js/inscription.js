const pass = document.getElementById("pass");
const passconfirm = document.getElementById("passconfirm");
const next = document.getElementById("next");

const closetxt = document.querySelector('.closetxt');
const fenetre = document.querySelector('.fenetre');
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

next.disabled = true;

pass.addEventListener('input', () => {
    const barre = document.getElementById('barre');
    const nombre = document.getElementById('nombre');
    const majuscule = document.getElementById('majuscule');
    const chiffre = document.getElementById('chiffre');
    const special = document.getElementById('special');

    let cpt = 0;

    // Vérifier la longueur    
    if (pass.value.length >= 8) {
        cpt += 25;
        nombre.style.color = '#28a745';
    } else {
        nombre.style.color = '#5e7263ff';
    }

    // Vérifier les majuscules
    if (/[A-Z]/.test(pass.value)) {
        cpt += 25;
        majuscule.style.color = '#28a745';
    } else {
        majuscule.style.color = '#5e7263ff';
    }

    // Vérifier les chiffres
    if (/[0-9]/.test(pass.value)) {
        cpt += 25;
        chiffre.style.color = '#28a745';
    } else {
        chiffre.style.color = '#5e7263ff';
    }

    // Vérifier les caractères spéciaux
    if (/[^A-Za-z0-9]/.test(pass.value)) {
        cpt += 25;
        special.style.color = '#28a745';
    } else {
        special.style.color = '#5e7263ff';
    }

    barre.style.width = (cpt) + "%";

    if (cpt < 50) {
        barre.style.backgroundColor = '#dc3545'; // Rouge    
    } else if (cpt < 75) {
        barre.style.backgroundColor = '#ffc107'; // Jaune 
    } else {
        barre.style.backgroundColor = '#28a745'; // Vert
    }
})
passconfirm.addEventListener('blur', () => {
    if (passconfirm.value === pass.value) {
        next.disabled = false;
    } else {
        alert('Les mots de passe ne correspondent pas !');
    }
})