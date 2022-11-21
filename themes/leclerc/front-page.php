<?php get_header(); ?>

<main>
    <section class="hero">
        <h1>Jouets<i style="color: #ff6633">.</i>Leclerc</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores sequi ex ullam atque in similique quasi
            dicta consectetur reprehenderit tempora neque, saepe incidunt natus labore eveniet perferendis, corrupti,
            doloribus ut.</p>
        <!-- <div class="row">
            <div class="column">
                <div class="box">

                </div>
            </div>
            <div class="column">
                <div class="box">

                </div>
            </div>
        </div> -->

        <section class="divider">
            <h1>Surprise</h1>
        </section>

        <h2>Comment déverouiller une surprise ?</h2>
        <p>Il existe différentes façons pour vous et votre enfant de déverrouiller les surprises dans l'application,
            alors suivez les étapes suivantes de la notice accompagnant le produit :</p>

        <div class="video">
            <video src="<?= get_template_directory_uri()?>./assets/videos/Lighted Christmas Tree.mp4" autoplay></video>
            <button type="button" class="play"><i class="bi bi-play"></i></button>
        </div>

        <section class="divider">
            <h1>Calendrier de l'avent</h1>
        </section>

        <section class="calendrier">
            <article class="present">
                <div class="present__pane">
                    <h2 class="present__date">1</h2>
                </div>
                <div class="present__content">
                    <div class="present__bauble">🎁</div>
                </div>
            </article>
            <article class="present">
                <div class="present__pane">
                    <h2 class="present__date">2</h2>
                </div>
                <div class="present__content">
                    <div class="present__bauble">❤️</div>
                </div>
            </article>
            <article class="present">
                <div class="present__pane">
                    <h2 class="present__date">3</h2>
                </div>
                <div class="present__content">
                    <div class="present__bauble">💩</div>
                </div>
            </article><br>
            <article class="present">
                <div class="present__pane">
                    <h2 class="present__date">4</h2>
                </div>
                <div class="present__content">
                    <div class="present__bauble">🎅</div>
                </div>
            </article>
            <article class="present">
                <div class="present__pane">
                    <h2 class="present__date">5</h2>
                </div>
                <div class="present__content">
                    <div class="present__bauble">☠️</div>
                </div>
            </article>
            <article class="present">
                <div class="present__pane">
                    <h2 class="present__date">6</h2>
                </div>
                <div class="present__content">
                    <div class="present__bauble">🦉</div>
                </div>
            </article>
        </section>

        <section class="divider">
            <h1>Formulaire</h1>
        </section>

        <form action="#">
            <div class="row">
                <div class="column formDivGauche">
                    <label for="nom">Nom :</label><br>
                    <input type="text" id="nom" name="nom">
                    <label for="prenom">Adresse email :</label>
                    <input type="mail" id="email" name="email">
                </div>


                <div class="column formDivDroite">
                    <label for="nom">Nom de ton ami :</label><br>
                    <input type="text" id="nomAmi" name="nomAmi">
                    <label for="prenom">Adresse email de ton ami :</label>
                    <input type="mail" id="emailAmi" name="emailAmi">
                </div>
            </div>

            <label for="texte">Écris ton message :</label>
            <textarea id="texte" name="texte"></textarea>

            <div class="checkbox">
                <label for="checkbox">En cochant cette case, J'autorise ce site à conserver mes données transmises via
                    ce formulaire.</label>
                <input type="checkbox" id="rgpd" name="rgpd">
            </div>


            <input type="submit" value="Envoyer au père nöel">
        </form>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#226f54" fill-opacity="1"
            d="M0,160L18.5,176C36.9,192,74,224,111,218.7C147.7,213,185,171,222,176C258.5,181,295,235,332,261.3C369.2,288,406,288,443,261.3C480,235,517,181,554,170.7C590.8,160,628,192,665,197.3C701.5,203,738,181,775,176C812.3,171,849,181,886,197.3C923.1,213,960,235,997,213.3C1033.8,192,1071,128,1108,101.3C1144.6,75,1182,85,1218,128C1255.4,171,1292,245,1329,245.3C1366.2,245,1403,171,1422,133.3L1440,96L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z">
        </path>
    </svg>
</main>

<?php get_footer(); ?>