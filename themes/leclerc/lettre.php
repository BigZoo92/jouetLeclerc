<?php

/**
 * Template Name: Lettre
 */

get_header();

?>
<main>
    <section class="lettre">
        <div class="form">
            <h1>Cher père noel</h1>
            <img id="lettre_timbre" src="<?= get_template_directory_uri() ?>/assets/images/svg/Lettre_Timbre.svg"
            alt="Lettre Timbre">
            <?php echo do_shortcode('[wpforms id="132" title="false"]'); ?>
        </div>
    </section>

</main>

<?php get_footer() ?>