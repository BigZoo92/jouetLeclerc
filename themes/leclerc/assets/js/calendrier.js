const today = new Date()
const day = today.getDate()
let gift;
fetch('../calendrier-url',{
    headers: {
        Accept: 'application/json'
    }
})
.then(r => {
    if (r.ok) {
        return r.json()
    } else {
        throw new Error('Erreur serveur', {cause: r})
    }
})
.then(creditData => {
    for (let i = 1; i < parseInt(creditData[0].credit)+1; i++) {
        gift = '.c'+i
        document.querySelector(gift).style.webkitFilter = 'grayscale(0)'
        document.querySelector(gift).style.pointerEvents = 'all';
    }
    if(parseInt(creditData[0].credit) === 24){
        alert('MERCI GRÂCE A TOI NOËL EST SAUVE')
    }
});


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
                    fetch('../cadeaux-url',{
                        headers: {
                            Accept: 'application/json'
                        }
                    })
                    .then(r => {
                        if (r.ok) {
                            return r.json()
                        } else {
                            throw new Error('Erreur serveur', {cause: r})
                        }
                    })
                    .then(posts => {
                        console.log(posts)
                        let numeroPost = parseInt(e.className.split(' ')[1].split('c')[1]);
                        if (numeroPost === 1 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = 'https://www.youtube.com/embed/pCFxMf5J-6s';   
                        }
                        if (numeroPost === 2 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[0].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[0].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[0].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[0].image.replace('-150x150', '') 
                        }
                        if (numeroPost === 3 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = 'https://youtube.com/embed/qAAsfA7uWKo';
                        }
                        if (numeroPost === 4 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[1].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[1].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[1].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[1].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 5 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = 'https://youtube.com/embed/taprfab-_wI';
                        }
                        if (numeroPost === 6 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[2].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[2].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[2].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[2].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 7 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = 'https://youtube.com/embed/djlwKXUa1VQ';
                        }
                        if (numeroPost === 8 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[3].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[3].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[3].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[3].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 9 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = '';
                        }
                        if (numeroPost === 10 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[4].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[4].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[4].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[4].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 11 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = '';
                        }
                        if (numeroPost === 12 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[5].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[5].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[5].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[5].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 13 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = '';
                        }
                        if (numeroPost === 14 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[6].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[6].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[6].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[6].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 15 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = '';
                        }
                        if (numeroPost === 16 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[7].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[7].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[7].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[7].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 17 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = '';
                        }
                        if (numeroPost === 18 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[8].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[8].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[8].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[8].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 19 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = '';
                        }
                        if (numeroPost === 20 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[9].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[9].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[9].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[9].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 21 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = '';
                        }
                        if (numeroPost === 22 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[10].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[10].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[10].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[10].image.replace('-150x150', '')  
                        }
                        if (numeroPost === 23 ) {
                            document.querySelector('iframe').style.display = 'block';
                            document.querySelector('iframe').style.opacity = '1';
                            document.querySelector('iframe').src = '';
                        }
                        if (numeroPost === 24 ) {
                            document.querySelector('.wrap_sapin_calendrier').style.display = "none"
                            document.querySelector('.cd-jouets').style.display = 'flex';
                            document.querySelector('.cd-jouets').style.opacity = '1';
                            document.querySelector('.wrap_jouets div h3').innerHTML = posts[11].titre
                            document.querySelector('.prix_jouet').innerHTML = posts[11].prix + ' €'
                            document.querySelector('.wrap_jouets div p i').innerHTML = posts[11].reduction + ' €'
                            document.querySelector('.wrap_jouets div img').src = posts[11].image.replace('-150x150', '')  
                        }
                    })
                    .catch(e => {
                        console.error('Une erreur est survenue', e)
                    })
                }, 1000);
            }, 100);
        }, 100);
    }, 1500);
    
    })
})