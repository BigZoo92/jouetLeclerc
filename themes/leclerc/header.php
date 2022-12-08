<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_template_directory_uri()?>./assets/images/ico/favicon.ico"
        type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body>
    <!-- <?php //wp_nav_menu([
                    //'menu' => 'Menu 1',
                    //'theme_location' => 'header',
                    //'container' => "nav",
                //]);
                ?> -->
    <header>
        <div class="overlay_header">
            <nav>
                <ul>
                    <li><a href="#">jeu </a></li>
                    <li><a href="#">recette nöel</a></li>
                    <li><a href="#">série lutintin</a></li>
                    <li><a href="#">catalogue jouets</a></li>
                    <li><a href="#">lettre au père noël</a></li>
                </ul>
            </nav>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#226f54" fill-opacity="1"
                    d="M0,192L60,181.3C120,171,240,149,360,122.7C480,96,600,64,720,53.3C840,43,960,53,1080,48C1200,43,1320,21,1380,10.7L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                </path>
            </svg>
        </div>
        <div class="sapin_toggle">
            <img src="<?= get_template_directory_uri()?>./assets/images/svg/star.svg" alt="Etoile sapin">
            <div class="branches">
                <div class="branche arm1"></div>
                <div class="branche arm2"></div>
                <div class="branche arm3"></div>
                <div class="branche arm4"></div>
            </div>
            <div class="menu_sapin">
                <p>menu</p>
                <p>fermer</p>
            </div>
        </div>

        <!-- <div class="logo_leclerc">
            <img src="<?= get_template_directory_uri()?>./assets/images/png/leclerc.png" alt="Logo Leclerc">
        </div> -->

        <div class="modal_container">
            <nav>
                <ul>
                    <li><a id="btnAccueil" href="https://jouetsleclerc.local">Accueil</a></li>
                    <li><button id="btnRecette">Recette de nöel</button></li>
                    <li><button id="btnLettre">Lettre au père nöel</button></li>
                    <li><button id="btnCalendrier"></button></li>
                </ul>
            </nav>

            <div id="modal_lettre" class="modal">
                <div class="box_modal">
                    <img id="lutin_recette" src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Recette.png" title="Afficher"alt="Sapin">
                    <div class="header_modal">
                        <span class="btnFermer">&times;</span>
                        <h1>Bienvenue dans la maison des recettes de nöel !</h1>
                    </div>
                    <div class="corps_modal">
                        <p>C'est encore moi <b style="font-weight: bold">Lutintin</b> ! Toi aussi tu aimes les recettes de Nöel ?</p>
                        <p>Alors prépare tes meilleures recettes de Nöel avec moi !</p>
                        <p>Invite tes amis à les préparer avec toi, et régalez-vous ensemble !</p>
                        <p>N'oublie pas d'inviter ta maman et ton papounet !</p>
                    </div>
                    <div class="btnModalLettre">
                        <a href="recette" class="btnLettre">Allons-y !</a>
                    </div>
                </div>
            </div>

        </div>
    </header>