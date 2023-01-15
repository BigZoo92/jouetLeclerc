const templateUrl = object_name.templateUrl;
const today = new Date()
const day = today.getDate()
const lvl = document.querySelectorAll('.lvl')
let index = 0;

 
lvl.forEach((e) => {
    index += 1
    if (index >= day+1){
        e.style.webkitFilter = 'grayscale(1)'
        e.style.pointerEvents = 'none'
    }
  e.addEventListener('click', () => {
    const lvlData = e.getAttribute('data-lvl')
    lvlCredit = parseInt(e.childNodes[3].innerHTML.split(" ")[1]);
    const urlMap = templateUrl+'/assets/jeu_assets/map/map'+lvlData+'.json'
    document.querySelector('.cd-lvl').style.opacity = 0;
    document.getElementById('container_jeu').style.opacity = '1'
    setTimeout(() => {
        document.querySelector('.cd-lvl').style.display = 'none';
        document.getElementById('container_jeu').style.display = 'block'
        setTimeout(() => {
            console.log(urlMap);
            game(urlMap)
        }, 600);
    }, 500);
  })
})

function game(urlMap) {
    if (!(document.getElementById('container_jeu').style.display === 'none')){
        const config = {
            width: 900,
            height: 450,
            type: Phaser.AUTO,
            parent: 'container_jeu',
            physics: {
                default: 'arcade',
                arcade: {
                    gravity: {
                        y: 450,
                    },
                }
            },
            scene: {
                preload: preload,
                create: create,
                update: update,
            }
        }
        
        let lutin;
        let map;
        let layer;
        let mur1;
        let mur2;
        let velocityX = 150;
        let jump = true;
        let game = new Phaser.Game(config)
        
        function preload(){
            this.load.image('background', templateUrl+'/assets/jeu_assets/perso/background.jpg')
            this.load.image('palette', templateUrl+'/assets/jeu_assets/perso/palette.png')
            this.load.image('lutin_saut1', templateUrl+'/assets/jeu_assets/perso/lutin_saut.png')
            this.load.image('lutin_saut2', templateUrl+'/assets/jeu_assets/perso/lutin_saut2.png')
            this.load.image('lutin_glisse1', templateUrl+'/assets/jeu_assets/perso/lutin_glisse.png')
            this.load.image('lutin_glisse2', templateUrl+'/assets/jeu_assets/perso/lutin_glisse2.png')
            this.load.image('tiles', templateUrl+'/assets/jeu_assets/tiles/tile.png')  
            this.load.tilemapTiledJSON('map', urlMap);
        }
        function create() {
            background = this.add.image(600, 750, 'background');
            lutin = this.physics.add.image(70, 100, 'lutin_saut1');
            palette = this.physics.add.image(70, 1425, 'palette');
            const map = this.make.tilemap({key: "map", tileWidth: 30, tileHeight: 30});
            const tileset = map.addTilesetImage("tiles", "tiles");
            const layer = map.createLayer("Calque de Tuiles 1", tileset, 0, 0);
            layer.debug = true;
            this.physics.add.collider(lutin, layer)
            this.physics.add.collider(palette, layer)
            this.physics.add.collider(palette, lutin)
            layer.setCollisionBetween(0, 200)
                this.cameras.main.startFollow(lutin, true, 0.08, 0.08);
                this.cameras.main.setZoom(1.5);
        }
        function update() {
            if (lutin.x < palette.x + palette.width &&
                lutin.x + lutin.width > palette.x &&
                lutin.y < palette.y + palette.height &&
                lutin.height + lutin.y > palette.y) {
                    this.scene.stop()  
                    endGame()                     
                
             }
            if (lutin.body.blocked.right){
                if (lutin.body.blocked.right){
                    if (lutin.body.blocked.down){
                        lutin.setTexture('lutin_glisse2')
                    }
                    if (this.input.activePointer.isDown){
                        lutin.setTexture('lutin_saut2')
                    }
                }
                if (lutin.body.blocked.down){
                    lutin.setTexture('lutin_glisse2')
                    velocityX = -150
                }
                else{
                    if (this.input.activePointer.isDown){
                        velocityX = -150
                    }else{
                        lutin.setVelocityY(150)
                    }
                }
            }
            if (lutin.body.blocked.left){
                if (lutin.body.blocked.down){
                    lutin.setTexture('lutin_glisse1')
                    velocityX = 150
                }
                else{
                    if (this.input.activePointer.isDown){
                        lutin.setTexture('lutin_saut1')
                        velocityX = 150
                    }else{
                        lutin.setVelocityY(150)
                    }
                }
            }
            lutin.setVelocityX(velocityX)
                this.input.on('pointerdown', function (pointer) {
                    
                    lutin.setVelocity(100, -200)
                }, this);
        }
    }
}




function endGame() {
    document.getElementById('container_jeu').style.display = "none"
    document.querySelector('.modal_jeu').style.display = 'flex';
    document.querySelector('.modal_jeu').style.opacity = '1';
    document.getElementById('credit').value = lvlCredit;
}