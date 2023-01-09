<?php
/**
 * Template Name: Mentions
 */
get_header()
?>

<main id="bg_formulaire">
    <section class="formulaire">
        <form action="">
            <img id="houx" src="<?= get_template_directory_uri() ?>./assets/images/png/holly-g5e5b9bd79_1280.png"
                title="Afficher" alt="Sapin">
            <div class="header_form">
                <h1>Envoie ta lettre au père noël</h1>
            </div>
            <small>* champs obligatoires</small>
            <div class="corps_form">

                <!-- Formulaire prenom -->

                <label for="id_prenom"><i class="bi bi-person-circle"></i>Prénom *</label>
                <input type="text" placeholder="Santa" id="id_prenom" required="required"aria-required="true" name="">
                
                <!-- Formulaire nom -->
                
                <label for="id_nom"><i class="bi bi-person-circle"></i>Nom *</label>
                <input type="text" placeholder="Claus" id="id_nom" required="required"aria-required="true" name="">
                
                <!-- Formulaire adresse email -->
                
                <label for="id_email"><i class="bi bi-envelope-at-fill"></i>Adresse email *</label>
                <input type="email" placeholder="santaclaus@mail.fr" id="id_email"name="">
                
                <!-- Formulaire checkbox -->
                
                <label for="titre_checkbox"><i class="bi bi-emoji-smile-fill"></i>Est-ce que tu as été sage *</label>
                
                <div class="checkbox_form">

                    <input id="id_option1" required="required" aria-required="true"value="option-1" type="checkbox">
                    <label for="id_option1">Oui</label>

                    <input id="id_option2" required="required" aria-required="true" value="option-2" type="checkbox">
                    <label for="id_option2">Non</label>

                    <input id="id_option3" required="required" aria-required="true" value="option-3" type="checkbox">
                    <label for="id_option3">Je ne sais pas</label>
                    
                </div>

            </div>

            <!-- Formulaire bouton submit -->

            <input type="submit" value="Envoyer la lettre">
            </div>
        </form>
    </section>
</main>


<?php get_footer() ?>