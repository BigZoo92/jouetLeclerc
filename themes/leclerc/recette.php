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
            <div class="box_recette">
                <div class="image_recette">
                </div>
                <div class="corps_recette">
                    <h1 class="titre_recette">
                        Verrine mousse de jambon
                    </h1>

                    <div class="difficulte_recette">
                        <i class="bi bi-clock"> 15 minutes</i>
                        <li>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </li>
                    </div>
                    <p class="desc_recette">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, temporibus.
                    </p>
                </div>
                <div class="btn_recette">
                    <button class="bouton_recette" id="btnAfficher">Recette de nöel</button>
                </div>
            </div>

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
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
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

            <div class="box_recette">
                <div class="image_recette">
                </div>
                <div class="corps_recette">
                    <h1 class="titre_recette">
                        Titre Recette
                    </h1>
                    <div class="difficulte_recette">
                        <i class="bi bi-clock"> 15 minutes</i>
                        <li>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </li>
                    </div>
                    <p class="desc_recette">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, temporibus.
                    </p>
                </div>
                <div class="btn_recette">
                    <a href="#" class="bouton_recette">Cuisinez !</a>
                </div>
            </div>

            <div class="box_recette">
                <div class="image_recette">
                </div>
                <div class="corps_recette">
                    <h1 class="titre_recette">
                        Titre Recette
                    </h1>
                    <div class="difficulte_recette">
                        <i class="bi bi-clock"> 15 minutes</i>
                        <li>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </li>
                    </div>
                    <p class="desc_recette">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, temporibus.
                    </p>
                </div>
                <div class="btn_recette">
                    <a href="#" class="bouton_recette">Cuisinez !</a>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer() ?>