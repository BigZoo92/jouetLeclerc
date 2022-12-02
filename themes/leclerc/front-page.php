<?php get_header(); ?>

<main id="bg_hero">
    <div class="cd_cometes">
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
    </div>

    <section class="hero">
        <img id="boite_lettre" src="<?= get_template_directory_uri() ?>./assets/images/svg/boite_aux_lettres.svg" title="Envoyer une lettre au père noël" alt="Boite aux lettres">
        <img id="sapin" src="<?= get_template_directory_uri() ?>./assets/images/svg/sapin.svg" title="Afficher" alt="Sapin">
        <img id="lutin" src="<?= get_template_directory_uri() ?>./assets/images/png/lutin.png" title="Accéder au lutin" alt="Lutin">
        <img id="lutin2" src="<?= get_template_directory_uri() ?>./assets/images/png/lutin.png" title="Afficher" alt="Lutin n2">
    </section>
</main>

<?php get_footer(); ?>