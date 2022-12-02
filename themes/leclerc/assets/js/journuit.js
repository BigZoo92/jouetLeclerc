let dateTab = new Date()
let date = dateTab.getDate()
// let heure = dateTab.getHours()
let heure = 19;
if (heure>19 || heure<9){
    console.log('wesh');
    document.querySelector('.sun').style.background = "white"
    document.querySelector('.sun').style.width = "20vh"
    document.querySelector('body').style.background = "black"
    heure = heure - 19
    if (heure<0){
        heure = heure * (-1)
    }
}
else{
    console.log('wesh');
    document.querySelector('.sun').style.background = "#fff3c9"
    document.querySelector('.sun').style.width = "25vh"
    document.querySelector('body').style.background = "rgb(140, 209, 243)"

}

document.querySelector('.sun').style.bottom = heure * 1.5 + "vw"
console.log(heure);
