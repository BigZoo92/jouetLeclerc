<?php
/**
 * Template Name: Recette
 */
get_header()
?>

<main id="bg_recette">
    <section class="recette">
        <h1 class="titre_page">Les recettes du père noël</h1>
        <div class="box_grid">
        <?php
    $args = array(
        'post_type' => 'recettes',
    );
    $custom_query = new WP_Query($args);
    if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
    $ingredients = get_field('ingredients'); 
    $temps = get_field('temps_preparation'); 
    $difficulte = get_field('difficulte'); 
    $description = get_field('description'); 
    ?>
    <div class="box_recette <?= "box".$post->ID ?>">
                <?php the_post_thumbnail() ?>
                </img>
                <div class="corps_recette">
                    <h1 class="titre_recette">
                        <?php the_title() ?>
                    </h1>
                    <div class="difficulte_recette" data-difficulte="<?= $difficulte ?>">
                        <i class="bi bi-clock"> <?= $temps ?> minutes</i>
                        <li>
                            <?php
                            for ($i=0; $i < $difficulte; $i++) { 
                                ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php
                            }
                            ?>
                        </li>
                    </div>
                    <p class="desc_recette" data-ingredient="<?= $ingredients ?>"><?= $description ?></p>
                </div>
                    <button class="bouton_recette <?= "box".$post->ID ?>">Cuisinez !</button>
            </div>
            <?php
    endwhile;
endif;
?>

            <div id="modal_recette" class="modal">
                <div class="box_modal">
                    <div class="header_modal">
                        <span class="btnFermerRecette">&times;</span>
                        <h1>Verrine mousse de jambon</h1>
                    </div>
                    <div class="corps_modal">
                        <img id="image_plat" src="<?= get_template_directory_uri() ?>./assets/images/jpg/pexels-tim-douglas-6210864.jpg" alt="Image plat">
                        <hr>
                        <div class="row">
                            <div class="column_gauche">
                                <h2>Ingrédients</h2>
                                <ul>
                                    <li>Salade</li>
                                    <li>Tomate</li>
                                    <li>Oignon</li>
                                </ul>
                            </div>
                            <div class="column_droite">
                                <h2>Temps de préparation</h2>
                                <i class="bi bi-clock"> 15 minutes</i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column_gauche">
                                <h2>Difficulté</h2>
                                <div class="modal_difficulte">

                                </div>
                            </div>
                            <div class="column_droite">
                                <h2>Description</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php get_footer() ?>