<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= get_template_directory_uri()?>./assets/images/ico/favicon.ico"
        type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <img src="<?= get_template_directory_uri()?>./assets/images/png/leclerc.png" alt="Logo Leclerc">
        <?php wp_nav_menu([
                    'menu' => 'Menu 1',
                    'theme_location' => 'header',
                    'container' => "nav",
                ]);
                ?>
    </header>