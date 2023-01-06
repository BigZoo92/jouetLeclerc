<?php get_header(); ?>
<main id="bg_hero">
    <div class="cd_cometes">
        <img src="<?= get_template_directory_uri() ?>" alt="nuages" class="nuages">
        <div class="comets">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
        </div>
        <div class="sun"></div>
        <img src="<?= get_template_directory_uri() ?>" alt="nuages" class="nuages">
    </div>

    <section class="hero">
        <div class="info_boite">
            <img id="boite_lettre" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_BoiteLettre.png"
                alt="Boite aux lettres">
            <span><i class="bi bi-envelope-fill"></i> Envoyer une lettre au père nöel</span>
        </div>

        <div class="info_sapin">
            <img id="sapin" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_Sapin.png" alt="Sapin">
            <span><i class="bi bi-gift-fill"></i> Accéder aux cadeaux de nöel</span>
        </div>

        <div id="modal_catalogue" class="modal">
            <div class="box_modal">
                <img id="lutin_catalogue" src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Catalogue.png" alt="Lutin Catalogue">
                <img id="couronne_catalogue" src="<?= get_template_directory_uri() ?>./assets/images/svg/CouronneNoel.svg" alt="Couronne Catalogue">
                <img id="pin" src="<?= get_template_directory_uri() ?>./assets/images/svg/Pin.svg" alt="Pomme de pin">
                <img id="pin2" src="<?= get_template_directory_uri() ?>./assets/images/svg/Pin.svg" alt="Pomme de pin">
                <img id="pin3" src="<?= get_template_directory_uri() ?>./assets/images/svg/Pin.svg" alt="Pomme de pin">
                <div class="corps_modal">
                    <!-- <span class="btnFermerCatalogue">Fermer</span> -->
                    <h1>Bienvenue dans la maison des Jouets Nöel Leclerc !</h1>
                    <p>C'est encore moi Lutintin, le lutin ! Viens découvrir nos fabrications !</p>
                    <p>Je t'amène visiter nos rayons, nous les avons préparés avec plein d'attention et d'amour. </p>
                    <p>Viens trouver ce que le Père Noël a préparé pour toi !</p>
                    <h2>Es-tu prêt ?</h2>
                </div>
                <div class="divModalCatalogue">
                    <a href="catalogue" class="btnCatalogueAfter">Plus Tard</a>
                    <a href="catalogue" class="btnCatalogueRedir">Allons-y !</a>
                </div>
            </div>
        </div>

        <div class="info_lutin">
            <img id="lutin" src="<?= get_template_directory_uri() ?>./assets/images/png/lutin.png" alt="Lutin">
            <span><i class="bi bi-youtube"></i> Voir les vidéos</span>
        </div>

        <div class="info_maison">
            <img id="maison" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_MaisonRecette.png"
                alt="Maison">
            <span>Recette de nöel <i class="bi bi-book-fill"></i></span>
        </div>

        <img id="bonhomme" src="<?= get_template_directory_uri() ?>./assets/images/png/bonhomme.png"
            alt="Bonhomme de neige">
    </section>
</main>

<?php get_footer(); ?>