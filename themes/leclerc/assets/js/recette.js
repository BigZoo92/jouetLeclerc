
const btnRecette = document.querySelectorAll('.btn_recette')
 
btnRecette.forEach((e) => {
  e.addEventListener('click', () => {
    document.querySelector('.cd_modale_recette').style.display = "flex"
    document.querySelector('.cd_modale_recette').style.opacity = "1"
    document.querySelector('.cd-recettes').style.display = "none"
    document.querySelector('.cd-recettes').style.opacity = "0"
    document.querySelector('.cd_modale_recette iframe').src = e.getAttribute('data-value')
    if (e.getAttribute('data-value') === 'http://localhost:10004/wp-content/uploads/2023/01/rct_buche_1.pdf#toolbar=0') {
      document.querySelector('.cd_modale_recette iframe').style.paddingBottom = "45%"
      console.log('wesh1');
    }else{
      if (e.getAttribute('data-value') === 'http://localhost:10004/wp-content/uploads/2023/01/rct_chocolat-chaud.pdf#toolbar=0') {
        document.querySelector('.cd_modale_recette iframe').style.paddingBottom = "25%"
        console.log('wesh2');
      }else{
        document.querySelector('.cd_modale_recette iframe').style.paddingBottom = "0"
        console.log('wesh3');
      }
    }
  })
})


const btnRecetteModale = document.querySelectorAll('.btn_modale_recette')
 
btnRecetteModale.forEach((e) => {
  e.addEventListener('click', () => {
    document.querySelector('.cd_modale_recette').style.display = "none"
    document.querySelector('.cd_modale_recette').style.opacity = "0"
    document.querySelector('.cd-recettes').style.display = "flex"
    document.querySelector('.cd-recettes').style.opacity = "1"
  })
})
