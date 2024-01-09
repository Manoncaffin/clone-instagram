// code pour créer une page style popup sans créer une nouvelle page
const imgspost = document.querySelectorAll(".imgpost");

// OUVRIR MODAL
imgspost.forEach((img) => {
  img.addEventListener("click", openModal);
});

function openModal(event){

  let modal = document.querySelector("#myModal");
  modal.classList.remove('d-none');
  modal.classList.add('d-flex');

  //afficher la bonne image
  let imgModal = document.querySelector('#imgModal');
  imgModal.src = event.target.src;
}

// FERMER MODAL
let btn_close = document.querySelector("#btn_close");
btn_close.addEventListener("click", closeModal);

function closeModal() {
  let modal = document.querySelector("#myModal");
  modal.classList.remove('d-flex');
  modal.classList.add('d-none');
}

// Trouver un profil dans la BDD
    function searchProfile() {
    const pseudo = document.getElementsByName('pseudo').value;
    window.location.href = 'profil.php?pseudo=${pseudo}';
     }

// Trouver un profil dans la BDD / ne fonctionne pas 
    function searchProfile() {
    const pseudo = document.getElementsByName('pseudo').value;
    window.location.href = 'profil.php?pseudo=${pseudo}';
     }

// Pour que le coeur affiche un like
const coeur = document.querySelector("#coeur");
coeur.addEventListener('click', () => {

  coeur.classList.add('red');
});
// document.addEventListener('DOMContentLoaded', function() {
//   const coeur = document.getElementById('coeur');

//   coeur.addEventListener('click', function() {
//     coeur.classList.add('red');
//   });
// });