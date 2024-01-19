<?php /* Template Name: Page avec infos contact sur la droite */ ?>
<!-- pour créer un template de page ajout un commentaire comme ci dessus -->

<?php get_header() ?>

<main>
    <div class="content">
        <?php the_post() ?>
        <?php the_content() ?>
    </div>
    <div class="contact-info">
        <p><?= str_replace('Rue', 'street',  get_field('street')) ?></p>
        <p><?php the_field('city') ?></p>
        <p><?php the_field('country') ?></p>
    </div>
</main>

<?php get_footer() ?>