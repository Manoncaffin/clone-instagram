const modal = document.querySelector('.modalImg');
console.log(modal);
const imgpost = document.querySelectorAll('.imgpost');
imgpost.forEach(img => {
  img.addEventListener('click',function () {
    modal.style.display = 'block';  
  });
});