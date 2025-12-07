let parentid = null;
const infos = document.querySelector('.informations');
const closeinfos = document.querySelector(".closeinfos");
const closemess = document.querySelector(".closemess");
const messages = document.querySelector(".messages");
const boutons = document.querySelectorAll(".message");
const details = document.querySelector(".details");
const suppr = document.querySelector('.suppr');

document.querySelectorAll('.inscrit').forEach(inscrit => {
        inscrit.addEventListener('click', () =>{
            infos.style.transform = "scale(1)";
            details.style.transform = "scale(1)";
            parentid =inscrit.dataset.id;
        document.getElementById('nom').textContent = inscrit.dataset.nom;
        document.getElementById('prenom').textContent = inscrit.dataset.prenom;
        document.getElementById('adresse').textContent = inscrit.dataset.adresse;
        document.getElementById('fixe').textContent = inscrit.dataset.telfixe;
        document.getElementById('mobile').textContent = inscrit.dataset.telmobile;
        document.getElementById('email').textContent = inscrit.dataset.email;
        document.getElementById('statut').textContent = inscrit.dataset.statut;
        document.getElementById('profession').textContent = inscrit.dataset.profession;
        document.getElementById('eleve').textContent = inscrit.dataset.eleve;
        document.getElementById('classe').textContent = inscrit.dataset.classe;
        document.getElementById('filiere').textContent = inscrit.dataset.filiere;
        })
    })

boutons.forEach(bouton => {
    bouton.addEventListener('click', () => {
        messages.style.opacity = "1";
    })
})

closeinfos.addEventListener('click', () => {
    infos.style.transform = "scale(0)";
    details.style.transform = "scale(0)";
})

closemess.addEventListener('click', () => {
    messages.style.opacity = "0";
})

suppr.addEventListener('click', ()=>{
    if (confirm("Êtes-vous sûre de vouloir supprimer cette inscription ?")) {
        console.log("ID à supprimer", parentid);
        fetch('parentdelete.php',{
            method: 'POST',
            headers: {
                'content-Type':'application/x-www-form-urlencoded'
            },
            body: 'id=' + encodeURIComponent(parentid)
        })
        .then(response => response.text())
        .then(result => {
            if (result === 'ok') {
                alert("inscription supprimée avec succès !");
                document.querySelector(`.inscrit[data-id="${parentid}"]`).remove();
                details.style.transform = "scale(0)";
            } else {
                alert("Erreur lors de la suppression : " + result);
            }
        })
    }
})
