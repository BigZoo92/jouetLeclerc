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

        <div id="modal_lettre" class="modal">
            <div class="box_modal_lettre">
                <img id="lutin_lettre" src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Lettre.png" alt="Lutin Lettre">
                <img id="lettre_timbre" src="<?= get_template_directory_uri() ?>./assets/images/svg/Lettre_Timbre.svg" alt="Lettre Timbre">
                <div class="corps_modal">
                    <h1>Bienvenue à la Poste du Père Noël !</h1>
                    <p>C'est encore moi Lutintin !</p>
                    <p>Je suis entrain d'écrire une lettre, devine c'est pour qui hihihi !</p>
                    <p>Moi aussi j'écris une lettre au Père Noël, parce que c'est mon Papa adoré !</p>
                    <p>Écris avec moi une lettre pour le Père Noël, je t'aide à lui transmettre !</p>
                    <p>Il sera hyper content de recevoir ta lettre !</p>
                    <h2>Es-tu prêt ?</h2>
                </div>
                <div class="divModalLettre">
                    <button class="btnLettreAfter">Fermer</button>
                    <a href="formulaire" class="btnLettreRedir">Allons-y !</a>
                </div>
            </div>
        </div>

        <div class="info_sapin">
            <img id="sapin" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_Sapin.png" alt="Sapin">
            <span><i class="bi bi-book-fill"></i> Voir le catalogue</span>
        </div>

        <div id="modal_catalogue" class="modal">
            <div class="box_modal_catalogue">
                <img id="lutin_catalogue" src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Catalogue.png" alt="Lutin Catalogue">
                <img id="couronne_catalogue" src="<?= get_template_directory_uri() ?>./assets/images/svg/CouronneNoel.svg" alt="Couronne Catalogue">
                <img id="pin" src="<?= get_template_directory_uri() ?>./assets/images/svg/Pin.svg" alt="Pomme de pin">
                <img id="pin2" src="<?= get_template_directory_uri() ?>./assets/images/svg/Pin.svg" alt="Pomme de pin">
                <img id="pin3" src="<?= get_template_directory_uri() ?>./assets/images/svg/Pin.svg" alt="Pomme de pin">
                <div class="corps_modal">
                    <h1>Bienvenue dans la maison des Jouets Nöel Leclerc !</h1>
                    <p>C'est encore moi Lutintin, le lutin ! Viens découvrir nos fabrications !</p>
                    <p>Je t'amène visiter nos rayons, nous les avons préparés avec plein d'attention et d'amour. </p>
                    <p>Viens trouver ce que le Père Noël a préparé pour toi !</p>
                    <h2>Es-tu prêt ?</h2>
                </div>
                <div class="divModalCatalogue">
                    <button class="btnCatalogueAfter">Fermer</button>
                    <a href="catalogue" class="btnCatalogueRedir">Allons-y !</a>
                </div>
            </div>
        </div>

        <div class="info_lutin">
            <img id="serie" src="<?= get_template_directory_uri() ?>./assets/images/png/serie.png" alt="Lutin">
            <img id="lutin_serie" src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Serie.png" alt="Lutin Serie">
            <span><i class="bi bi-youtube"></i> Voir les vidéos</span>
        </div>

        <div id="modal_serie" class="modal">
            <div class="box_modal_serie">
                <img id="lutin_catalogue" src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Catalogue.png" alt="Lutin Catalogue">
                <div class="corps_modal">
                    <h1>Bienvenue dans la maison des Jouets Nöel Leclerc !</h1>
                    <p>C'est encore moi Lutintin, le lutin ! Viens découvrir nos fabrications !</p>
                    <p>Je t'amène visiter nos rayons, nous les avons préparés avec plein d'attention et d'amour. </p>
                    <p>Viens trouver ce que le Père Noël a préparé pour toi !</p>
                    <h2>Es-tu prêt ?</h2>
                </div>
                <div class="divModalSerie">
                    <button class="btnSerieAfter">Fermer</button>
                    <a href="serie" class="btnSerieRedir">Allons-y !</a>
                </div>
            </div>
        </div>

        <div class="info_maison">
            <img id="maison" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_MaisonRecette.png"
                alt="Maison">
            <span>Recette de nöel <i class="bi bi-book-fill"></i></span>
        </div>

            <div id="modal_recette_front" class="modal">
                <div class="box_modal_recette">
                    <img id="lutin_recette"
                        src="<?= get_template_directory_uri() ?>./assets/images/png/Lutin_Recette.png" title="Afficher"
                        alt="Lutin Recette">
                    <img id="modal_chocolat"
                        src="<?= get_template_directory_uri() ?>./assets/images/png/RecetteChocolat.png"
                        alt="ModalChocolat">
                    <div class="corps_modal">
                        <h1>Bienvenue dans la maison des recettes de nöel !</h1>
                        <p>C'est encore moi <b>Lutintin</b> ! Toi aussi tu aimes les recettes
                            de Nöel ?</p>
                        <p>Alors prépare tes meilleures recettes de Nöel avec moi !</p>
                        <p>Invite tes amis à les préparer avec toi, et régalez-vous ensemble !</p>
                        <p>N'oublie pas d'inviter ta maman et ton papounet !</p>
                    </div>
                    <div class="divModalRecette">
                        <button class="btnRecetteAfter">Fermer</button>
                        <a href="recette" class="btnRecetteRedir">Allons-y !</a>
                    </div>
                </div>
            </div>

        <img id="bonhomme" src="<?= get_template_directory_uri() ?>./assets/images/png/bonhomme.png"
            alt="Bonhomme de neige">
    </section>
</main>

<?php get_footer(); ?>