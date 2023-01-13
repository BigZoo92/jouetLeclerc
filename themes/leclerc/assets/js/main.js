
// HEADER

let toggle = true;
document.querySelector('.sapin_toggle').addEventListener('click', toggleSapin);
let tlToggleSapin = gsap.timeline({ paused: true, duration: 0.1, ease: "expo" })
  .to(".menu_sapin", { y: -33 }, "<0.1")
  .to(".overlay_header", { "display": "flex" }, "<")
  .to('.branches', { 'clip-path': 'inset(0 0 100% 0)' }, "<")
  .to('.menu_sapin p:nth-of-type(2)', { 'clip-path': 'inset(0 0 0 0)' }, "<0.1")
  .to('.overlay_header', { 'top': '0' }, "<0.1")
  .to('.overlay_header nav ul li', { 'clip-path': 'inset(0 0 0 0)', stagger: 0.05 }, "<0.1")
function toggleSapin() {
  toggle ? toggleSapinOpen() : toggleSapinClose()
}
function toggleSapinOpen() {
  tlToggleSapin.play()
  document.querySelector('.menu_sapin p:nth-of-type(2)').style.backgroundColor = '#efdebe'
  toggle = false;
}
function toggleSapinClose() {
  tlToggleSapin.reverse()
  document.querySelector('.menu_sapin p:nth-of-type(2)').style.backgroundColor = '#A3DEF4'
  toggle = true;
}

// Modal recette accueil

var modal = document.getElementById("modal_recette_front");

var btn = document.getElementById("maison");

var fermer = document.getElementsByClassName("btnRecetteAfter")[0];

btn.onclick = function () {
  modal.style.display = "block";
};

fermer.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";

  }
};

// Modal catalogue

var modal2 = document.getElementById("modal_catalogue");

var btn2 = document.getElementById("sapin");

var fermer2 = document.getElementsByClassName("btnCatalogueAfter")[0];

btn2.onclick = function () {
  modal2.style.display = "block";
};

fermer2.onclick = function () {
  modal2.style.display = "none";
};

// Modal Lettre

var modal3 = document.getElementById("modal_lettre");

var btn3 = document.getElementById("boite_lettre");

var fermer3 = document.getElementsByClassName("btnLettreAfter")[0];

btn3.onclick = function () {
  modal3.style.display = "block";
};

fermer3.onclick = function () {
  modal3.style.display = "none";
};

// Modal Serie

var modal4 = document.getElementById("modal_serie");

var btn4 = document.getElementById("serie");

var fermer4 = document.getElementsByClassName("btnSerieAfter")[0];

btn4.onclick = function () {
  modal4.style.display = "block";
};

fermer4.onclick = function () {
  modal4.style.display = "none";
};

// Récupération de la date

let d = new Date();

let dateLocale = d.toLocaleString("fr-FR", {
  year: "numeric",
  month: "long",
  day: "numeric",
});

document.getElementById("btnCalendrier").innerHTML = dateLocale;
