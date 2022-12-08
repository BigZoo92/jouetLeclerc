window.onload = function () {

  // Modal recette accueil

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

  // Récupération de la date

  let d = new Date();

  let dateLocale = d.toLocaleString("fr-FR", {
    year: "numeric",
    month: "long",
    day: "numeric",
  });

  document.getElementById("btnCalendrier").innerHTML = dateLocale;
};
