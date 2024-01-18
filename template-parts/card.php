<div class="card">
    <div class="card-img">
        <!-- afficher l'image de l'article -->
        <?php the_post_thumbnail('medium') ?>
    </div>
    <div class="card-date">
        <!-- récupérer la date de l'article -->
        <!-- rem the_date ne fonctionne pas très bien  -->
        <!-- on préferera utilser get_the_date() -->
        <?= get_the_date() ?>
    </div>
    <div class="card-title">
        <!-- afficher le titre de l'article -->
        <?php the_title() ?>
    </div>
    <div class="card-content">
        <!-- afficher le résumé de l'article -->
        <!-- utiliser the_content() pour afficher tout le contenu  -->
        <?php the_excerpt() ?>
    </div>
    <div class="card-link">
        <!-- afficher le lien de l'article -->
        <a href="<?php the_permalink() ?>">
            <?= __('read_more', 'khun') ?> <i class="fa fa-chevron-right"></i>
        </a>
    </div>
    <!-- afficher les categories -->
    <!-- <?php the_category() ?> -->
    <!-- afficher les tags -->
    <!-- <?php the_tags() ?> -->
</div>