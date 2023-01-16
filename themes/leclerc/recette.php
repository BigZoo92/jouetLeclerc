<?php
/**
 * Template Name: Recette
 */
get_header()
?>

<main id="bg_recette">
    <section class="recette">
        <h1 class="titre_page">Les recettes du père noël</h1>
        <a href="https://www.e.leclerc/e/recettes-eleclerc" target="_blank">Retrouvez toutes nos recettes</a>
            <div class="cd-recettes">
        <?php
    $args = array(
        'post_type' => 'recettes',
    );
    $custom_query = new WP_Query($args);
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            $modal = get_field('modele'); 
            $recette = get_field('recette'); 
            ?>
            <div class="wrap_recette">
                <iframe src="<?= $modal ?>#toolbar=0"  frameBorder="0" allowtransparency = "true" ></iframe>
                <button class="btn_recette" data-value="<?= $recette ?>#toolbar=0">Voir la recette</button>
            </div>
            <?php
        endwhile;
    endif;
    ?>
    </div>
    <div class="cd_modale_recette">
        <div>
            <iframe src=""  frameBorder="0" allowtransparency = "true"></iframe>
            <button class="btn_modale_recette">Revenir aux recettes</button>
        </div>
    </div>
    </section>

</main>


<?php get_footer() ?>