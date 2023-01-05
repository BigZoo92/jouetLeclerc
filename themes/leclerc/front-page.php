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
        <img id="boite_lettre" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_BoiteLettre.png" alt="Boite aux lettres">
        <span><i class="bi bi-envelope-fill"></i> Envoyer une lettre au père nöel</span>
    </div>

    <div class="info_sapin">
        <img id="sapin" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_Sapin.png" alt="Sapin">
        <span><i class="bi bi-gift-fill"></i> Accéder aux cadeaux de nöel</span>
    </div>

    <div class="info_lutin">
        <img id="lutin" src="<?= get_template_directory_uri() ?>./assets/images/png/lutin.png" alt="Lutin">
        <span><i class="bi bi-youtube"></i> Voir les vidéos</span>    
    </div>

    <div class="info_maison">
        <img id="maison" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_MaisonRecette.png" alt="Maison">
        <span>Accéder à la maison <i class="bi bi-house-fill"></i></span>
    </div>
    </section>
</main>

<?php get_footer(); ?>

