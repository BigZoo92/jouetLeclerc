const cadeau = document.querySelectorAll('.cadeau')

cadeau.forEach((e) => {
e.addEventListener('click', () => {
    e.style.position = "absolute"
    e.style.left = "50%";
    e.style.top = "50%";
    e.style.transform = "translate(-50%, -50%)"
    e.style.setProperty("--tailleCadeau", "30vw")
    document.querySelectorAll('.cadeau').forEach((item) => {
        item.style.opacity = "0"
        item.pointerEvents = "none"
    })
    e.style.opacity = "1"
    const couvercle = e.childNodes[1];
    setTimeout(() => {
        couvercle.style.top = "-27.5vh";
        
        setTimeout(() => {
            couvercle.style.transform = "rotate(-90deg)";
            couvercle.style.left = "-10vh";
            setTimeout(() => {
                couvercle.style.opacity = "0";
                e.style.opacity = "0";
                setTimeout(() => {
                    couvercle.style.display = "none";
                    e.style.display = "none";
                }, 1000);
            }, 100);
        }, 100);
    }, 1500);
    
    })
})