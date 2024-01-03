<!DOCTYPE html>
<!-- inclure la langue de wordpress -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crisp - Accueil</title>
    <!-- inclure les feuilles de styles de wordpress -->
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?= THEME_URI ?>/assets/css/home.css">
</head>
<body>
    <header>
        <div class="left">
            <img src="<?= THEME_URI ?>/assets/images/logo.png" alt="">
            <div>
                <span>L'actionnariat</span>
                <span>des entreprises</span>
                <span>wallones</span>
            </div>
        </div>

        <div class="right">
            <div>
                <div></div>
                <div></div>
                <div></div>
                <!-- la nav sera remplacée par une fonction worpress plus tard -->
                <nav>
                    <ul>
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Articles</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Glossaire</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<!-- inclure les scripts js de wordpress  -->
<?php wp_footer() ?>
</body>
</html>