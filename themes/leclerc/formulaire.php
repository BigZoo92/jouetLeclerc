<?php
/**
 * Template Name: Formulaire
 */
get_header()
?>

<main id="bg_formulaire">
    <section class="formulaire">
        <form action="">
            <img id="houx" src="<?= get_template_directory_uri() ?>./assets/images/png/holly-g5e5b9bd79_1280.png"
                title="Afficher" alt="Sapin">
            <div class="form_header">
                <h1>Envoie ta lettre au père noël</h1>
            </div>
            <div class="rendered-form">
                <div class="">
                    <label for="undefined" class="formbuilder-text-label">Prénom<span
                            class="formbuilder-required">*</span></label>
                    <input type="text" placeholder="Santa" access="false" id="control-6014731" required="required"
                        aria-required="true" name="undefined">
                </div>
                <div class="">
                    <label for="undefined" class="formbuilder-text-label">Nom<span
                            class="formbuilder-required">*</span></label>
                    <input type="text" placeholder="Claus" access="false" id="control-4477413" required="required"
                        aria-required="true" name="undefined">
                </div>
                <div class="">
                    <label for="undefined" class="formbuilder-text-label">Adresse email<span
                            class="formbuilder-required">*</span></label>
                    <input type="email" placeholder="santaclaus@mail.fr" access="false" id="control-9129671"
                        name="undefined">
                </div>
                <div class="">
                    <label for="undefined" class="formbuilder-radio-group-label">Est-ce que tu as été sage<span
                            class="formbuilder-required">*</span></label>
                    <div class="radio-group">
                        <div class="formbuilder-radio-inline">
                            <input access="false" id="control-5717688-0" required="required" aria-required="true"
                                value="option-1" type="checkbox">
                            <label for="control-5717688-0">Oui</label>
                        </div>
                        <div class="formbuilder-radio-inline">
                            <input access="false" id="control-5717688-1" required="required" aria-required="true"
                                value="option-2" type="checkbox">
                            <label for="control-5717688-1">Non</label>
                        </div>
                        <div class="formbuilder-radio-inline">
                            <input access="false" id="control-5717688-2" required="required" aria-required="true"
                                value="option-3" type="checkbox">
                            <label for="control-5717688-2">Je ne sais pas</label>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Valider">
            </div>
        </form>
    </section>
</main>


<?php get_footer() ?>