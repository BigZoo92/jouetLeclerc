
let dateTab = new Date()
let date = dateTab.getDate()
let heure = dateTab.getHours()
// let heure = 23;
if (heure>17 || heure<9){
    console.log('wesh');
    document.querySelector('.sun').style.background = "white"
    document.querySelector('.sun').style.width = "20vh"
    document.querySelector('body').style.background = "black"
    document.querySelector('.menu_sapin p').style.color = "#efdebe"
    document.querySelectorAll('.nuages').forEach((item) => {
        item.src += "./assets/images/png/soir_nuages.png"
    })
    heure = heure - 17
    if (heure<0){
        heure = heure * (-1)
    }
}
else{
    document.querySelector('.sun').style.background = "#fff3c9"
    document.querySelector('.sun').style.width = "25vh"
    document.querySelector('body').style.background = "rgb(140, 209, 243)"
    document.querySelector('.comets').style.display = "none"
    document.querySelectorAll('.nuages').forEach((item) => {
        item.src += "./assets/images/png/matin_nuages.png"
    })

}

document.querySelector('.sun').style.bottom = heure * 1.5 + "vw"
