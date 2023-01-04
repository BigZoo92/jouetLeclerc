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
        <img id="boite_lettre" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_BoiteLettre.png" title="Envoyer une lettre au père noël" alt="Boite aux lettres">
        <img id="sapin" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_Sapin.png" title="Afficher" alt="Sapin">
        <img id="lutin" src="<?= get_template_directory_uri() ?>./assets/images/png/lutin.png" title="Accéder au lutin" alt="Lutin">
        <img id="maison" src="<?= get_template_directory_uri() ?>./assets/images/png/Home_MaisonRecette.png" title="Accéder aux recettes" alt="Maison">
    </section>
</main>

<?php get_footer(); ?>

