window.addEventListener("load", function (event) {
  document.getElementById("zoneTexte").addEventListener("keyup", function () {
    document.getElementById("compteur").innerHTML =
      "Caractères : " + zoneTexte.value.length + " " + "/ 500";
  });
});
