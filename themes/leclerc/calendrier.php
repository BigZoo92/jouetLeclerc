<?php

/**
 * Template Name: Calendrier
 */
get_header();

$current_user = wp_get_current_user();
if ($current_user->ID === 0) {
    echo '<script>', 'window.location.href = "http://localhost:10004/wp-login.php/"', '</script>';
}
?>

<main>

    <section class="wrap_sapin_calendrier">
        <h1>Calendrier</h1>
        <div class="sapin_calendrier">
            <div class="cadeau c1">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c2">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c3">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c4">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c5">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c6">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c7">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c7">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c8">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c9">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c10">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c11">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c12">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c13">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c14">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c15">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c16">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c17">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c18">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c19">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c20">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c21">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c22">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c23">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
            <div class="cadeau c24">
                <div class="couvercle"></div>
                <div class="num"></div>
            </div>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/pCFxMf5J-6s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </section>
    <section class="cd-jouets">
        <div class="wrap_jouets">
        <div>
            <h3>title</h3>
            <p class="prix_jouet">33.90</p>
            <p>Avec la carte leclerc : <i>29.90</i></p>
            <button>En savoir plus</button>
        </div>
            <div>
                <img src="">
            </div>
        </div>
        
    </section>
</main>


<?php 
get_footer(); 
?>