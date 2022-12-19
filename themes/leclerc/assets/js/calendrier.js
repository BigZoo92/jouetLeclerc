const cadeau = document.querySelectorAll('.cadeau')

cadeau.forEach((e) => {
e.addEventListener('click', () => {
    e.style.position = "absolute"
    console.log(e.style.position);
    e.style.left = "50%";
    e.style.top = "50%";
    e.style.transform = "transform(-50%, -50%)"
    e.style.setProperty("--tailleCadeau", "30vw")
    document.querySelectorAll('.cadeau').forEach((item) => {
        item.style.opacity = "0"
        item.pointerEvents = "none"
    })
    e.style.opacity = "1"
    })
})