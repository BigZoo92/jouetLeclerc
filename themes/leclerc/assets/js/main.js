window.onload = function () {

  // Modal recette

  var modal = document.getElementById("modal_lettre");

  var btn = document.getElementById("btnRecette");

  var fermer = document.getElementsByClassName("btnFermer")[0];

  btn.onclick = function () {
    modal.style.display = "block";
  };

  fermer.onclick = function () {
    modal.style.display = "none";
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

  // Modal recette

  var recette = document.getElementById("modal_recette");

  var btnRecette = document.getElementById("btnAfficher");

  var fermerRecette = document.getElementsByClassName("btnFermerRecette")[0];

  btnRecette.onclick = function () {
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

  // Récupération de la date

  let d = new Date();

  let dateLocale = d.toLocaleString("fr-FR", {
    year: "numeric",
    month: "long",
    day: "numeric",
  });

  document.getElementById("btnCalendrier").innerHTML = dateLocale;
};
