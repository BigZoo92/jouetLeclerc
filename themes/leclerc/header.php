<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_template_directory_uri()?>./assets/images/ico/favicon.ico"
        type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body>
    <!-- <?php //wp_nav_menu([
                    //'menu' => 'Menu 1',
                    //'theme_location' => 'header',
                    //'container' => "nav",
                //]);
                ?> -->
    <header>
        <div class="overlay_header">
            <nav>
                <ul>
                    <li><a href="#">jeu </a></li>
                    <li><a href="#">recette noel</a></li>
                    <li><a href="#">série lutintin</a></li>
                    <li><a href="#">catalogue jouets</a></li>
                    <li><a href="#">lettre au père noël</a></li>
                </ul>
            </nav>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#226f54" fill-opacity="1"
                    d="M0,224L8.3,218.7C16.6,213,33,203,50,186.7C66.2,171,83,149,99,138.7C115.9,128,132,128,149,149.3C165.5,171,182,213,199,202.7C215.2,192,232,128,248,122.7C264.8,117,281,171,298,202.7C314.5,235,331,245,348,245.3C364.1,245,381,235,397,213.3C413.8,192,430,160,447,170.7C463.4,181,480,235,497,256C513.1,277,530,267,546,240C562.8,213,579,171,596,170.7C612.4,171,629,213,646,213.3C662.1,213,679,171,695,149.3C711.7,128,728,128,745,154.7C761.4,181,778,235,794,256C811,277,828,267,844,224C860.7,181,877,107,894,85.3C910.3,64,927,96,943,128C960,160,977,192,993,176C1009.7,160,1026,96,1043,69.3C1059.3,43,1076,53,1092,80C1109,107,1126,149,1142,144C1158.6,139,1175,85,1192,101.3C1208.3,117,1225,203,1241,208C1257.9,213,1274,139,1291,117.3C1307.6,96,1324,128,1341,160C1357.2,192,1374,224,1390,245.3C1406.9,267,1423,277,1432,282.7L1440,288L1440,320L1431.7,320C1423.4,320,1407,320,1390,320C1373.8,320,1357,320,1341,320C1324.1,320,1308,320,1291,320C1274.5,320,1258,320,1241,320C1224.8,320,1208,320,1192,320C1175.2,320,1159,320,1142,320C1125.5,320,1109,320,1092,320C1075.9,320,1059,320,1043,320C1026.2,320,1010,320,993,320C976.6,320,960,320,943,320C926.9,320,910,320,894,320C877.2,320,861,320,844,320C827.6,320,811,320,794,320C777.9,320,761,320,745,320C728.3,320,712,320,695,320C678.6,320,662,320,646,320C629,320,612,320,596,320C579.3,320,563,320,546,320C529.7,320,513,320,497,320C480,320,463,320,447,320C430.3,320,414,320,397,320C380.7,320,364,320,348,320C331,320,314,320,298,320C281.4,320,265,320,248,320C231.7,320,215,320,199,320C182.1,320,166,320,149,320C132.4,320,116,320,99,320C82.8,320,66,320,50,320C33.1,320,17,320,8,320L0,320Z">
                </path>
            </svg>
        </div>
        <div class="sapin_toggle">
            <img src="<?= get_template_directory_uri()?>./assets/images/svg/star.svg" alt="etoile sapin">
            <div class="branches">
                <div class="branche arm1"></div>
                <div class="branche arm2"></div>
                <div class="branche arm3"></div>
                <div class="branche arm4"></div>
            </div>
            <div class="menu_sapin">
                <p>menu</p>
                <p>fermer</p>
            </div>
        </div>

        <div class="modal">
            <nav>
                <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Lettre au père nöel</a></li>
                    <li><a href="">Calendrier de l'avent</a></li>
                </ul>
            </nav>
        </div>
    </header>