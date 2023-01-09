<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>./assets/images/ico/favicon.ico"
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
                    <a href="mentions-legales">Mentions Légales</a>
                    <p>Copyright © <script>document.write(new Date().getFullYear())</script> Jouets Leclerc</p>
                </div>
            </div>
        </div>
        <div class="sapin_toggle">
            <img src="<?= get_template_directory_uri() ?>./assets/images/svg/star.svg" alt="Etoile sapin">
            <div class="branches">
                <div class="branche arm1"></div>
                <div class="branche arm2"></div>
                <div class="branche arm3"></div>
                <div class="branche arm4"></div>
            </div>
            <div class="menu_sapin">
                <p>Menu</p>
                <p>Fermer</p>
            </div>
        </div>

        <!-- <div class="logo_leclerc">
            <img src="<?= get_template_directory_uri() ?>./assets/images/png/leclerc.png" alt="Logo Leclerc">
        </div> -->
        <a href="<?= get_home_url() ?>" class="leclerc_link"><img
                src="<?= get_template_directory_uri()?>./assets/images/png/Logo.png" alt="Logo Leclerc"></a>
        <img id="flocon_header" src="<?= get_template_directory_uri() ?>./assets/images/png/flocon4.png" alt="Flocon Header">

        <img id="flocon_header_2" src="<?= get_template_directory_uri() ?>./assets/images/png/flocon1.png" alt="Flocon Header 2">
        <div class="modal_container">
            <nav>
                <ul>
                    <li><a href="ou-nous-trouver"><img id="pdv" src="<?= get_template_directory_uri() ?>./assets/images/svg/Point-de-Vente.svg" alt="Point de vente" title="Point de vente Leclerc"></a></li>
                    <li><a href="http://jouets-leclerc.local/wp-login.php"><img id="connexion" src="<?= get_template_directory_uri() ?>./assets/images/svg/Connexion.svg" alt="Connexion"></a></li>
                </ul>
            </nav>

            <!-- <div id="modal_recette" class="modal">
                <div class="box_modal">
                    <img id="lutin_recette"
                        src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Recette.png" title="Afficher"
                        alt="Lutin Recette">
                    <img id="modal_chocolat"
                        src="<?= get_template_directory_uri() ?>./assets/images/png/RecetteChocolat.png"
                        alt="ModalChocolat">
                    <div class="corps_modal">
                        <span class="btnFermerRecette">Fermer</span>
                        <h1>Bienvenue dans la maison des recettes de nöel !</h1>
                        <p>C'est encore moi <b>Lutintin</b> ! Toi aussi tu aimes les recettes
                            de Nöel ?</p>
                        <p>Alors prépare tes meilleures recettes de Nöel avec moi !</p>
                        <p>Invite tes amis à les préparer avec toi, et régalez-vous ensemble !</p>
                        <p>N'oublie pas d'inviter ta maman et ton papounet !</p>
                    </div>
                    <div class="divModalRecette">
                        <a href="recette" class="btnRecetteRedir">Allons-y !</a>
                    </div>
                </div>
            </div> -->

        </div>
    </header>
    <!-- <div class="custom-shape-divider-top-1670883178">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div> -->
    <div class="overlay_portrait">
        <h1>Tourne ton écran</h1>
        <i class="bi bi-phone-vibrate"></i>
    </div>