<!DOCTYPE html>
<!-- inclure la langue de wordpress -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crisp - Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- inclure les feuilles de styles de wordpress -->
    <?php wp_head() ?>
    <!-- <link rel="stylesheet" href="<?= THEME_URI ?>/assets/css/home.css"> -->
</head>
<body>
    <header>
        <div class="left">
            <!-- permet d'afficher le logo choisi par l'admninistrateur -->
            <?php the_custom_logo() ?>
            <!-- <img src="<?= THEME_URI ?>/assets/images/logo.png" alt=""> -->
            <div>
                <span><?= __('slogan_line_1', 'khun') ?></span>
                <span><?= __('slogan_line_2', 'khun') ?></span>
                <span><?= __('slogan_line_3', 'khun') ?></span>
            </div>
        </div>

        <div class="right">
            <div>
                <div></div>
                <div></div>
                <div></div>
                <?php wp_nav_menu([
                    'theme_location' => 'primary-menu',
                    'container' => 'nav'
                ]) ?>
                <!-- la nav sera remplacée par une fonction worpress plus tard -->
                <!-- <nav>
                    <ul>
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Articles</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Glossaire</a></li>
                    </ul>
                </nav> -->
            </div>

            <div class="lang-selection">
                <!-- get_locale affiche la langue courante (fr_FR)  -->
                <span><?= get_locale()[0] . get_locale()[1] ?> <i class="fa fa-caret-down"></i></span>
                <!-- <span><?= explode('_', get_locale())[0] ?></span>
                <span><?= preg_replace('/_.+/', '', get_locale()) ?></span> -->
                <!-- <span><?= substr(get_locale(),0,2) ?></span> --> -->
                <nav>
                    <ul>
                        <!-- afficher les liens vers les différentes langues -->
                        <?php pll_the_languages(['show_flags' => true]) ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>