// code pour créer une page style popup sans créer une nouvelle page 
const modal = document.querySelector('.modalImg');
console.log(modal);
const imgpost = document.querySelectorAll('.imgpost');
imgpost.forEach(img => {
  img.addEventListener('click',function () {
    modal.style.display = 'block';  
  });
});

// code pour trouver un profil dans la BDD 
document.addEventListener('DOMContentLoaded', function () {
  // Récupérer le pseudo de l'URL
  const urlParams = new URLSearchParams(window.location.search);
  const pseudo = urlParams.get('pseudo');

  // Mettre à jour le contenu de la page avec le pseudo
  document.getElementById('pseudo').textContent = `pseudo: ${pseudo}`;
  document.getElementById('photo').textContent = `photo: ${photo}`;
  document.getElementById('created_at').textContent = `created_at: ${created_at}`;
  // Ajoutez le code pour charger et afficher d'autres détails du profil
});

