
const box = document.querySelectorAll('.box_recette')

box.forEach((item) => {
  item.addEventListener('click', () => {
    const temps = '.' + item.className.split(" ")[1] + ' .difficulte_recette i';
    const difficulte = '.' + item.className.split(" ")[1] + ' .difficulte_recette';
    const description = '.' + item.className.split(" ")[1] + ' .desc_recette';
    document.getElementById('modal_recette').style.display = "block";
    document.querySelector('#modal_recette .column_droite i').innerHTML = document.querySelector(temps).innerHTML;
    document.querySelector('#modal_recette .column_droite p').innerHTML = document.querySelector(description).innerHTML;
    const diffStar = parseInt(document.querySelector(difficulte).getAttribute('data-difficulte'))
    console.log(diffStar);
    for (let i = 0; i < diffStar; i++) {
      const star = document.createElement('i');
      console.log(star);
      star.className = "bi bi-star-fill";
      document.querySelector('.modal_difficulte').appendChild(star);
    }
  })
})
