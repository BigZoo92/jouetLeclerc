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
            <div class="custom-shape-divider-bottom-1670590214">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                        class="shape-fill"></path>
                </svg>
                <div class="copyright_footer">
                    <a href="mentions">Mentions Légales</a>
                    <p>Copyright © 2022 Jouets Leclerc</p>
                </div>
            </div>
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
                    <img id="lutin_recette"
                        src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Recette.png" title="Afficher"
                        alt="Sapin">
                    <div class="header_modal">
                        <span class="btnFermer">&times;</span>
                        <h1>Bienvenue dans la maison des recettes de nöel !</h1>
                    </div>
                    <div class="corps_modal">
                        <p>C'est encore moi <b style="font-weight: bold">Lutintin</b> ! Toi aussi tu aimes les recettes
                            de Nöel ?</p>
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

    <div class="overlay_portrait">
        <h1>Tourne ton écran</h1>
        <i class="bi bi-phone-vibrate"></i>
    </div>