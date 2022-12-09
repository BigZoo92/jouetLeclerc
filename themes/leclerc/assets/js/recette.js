  // Modal recette

  var recette = document.getElementById("modal_recette");

  var btnR = document.getElementById("btnAfficher");

  var fermerRecette = document.getElementsByClassName("btnFermerRecette")[0];

  btnR.onclick = function () {
    recette.style.display = "block";
  };

  fermerRecette.onclick = function () {
    recette.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == recette) {
      recette.style.display = "none";
    }
  };
