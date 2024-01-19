<?php get_header() ?>

<main>
    <section class="actu">
        <div class="articles">
            <!-- parcourir les articles -->
            <?php while(have_posts()) {
                // passer à l'article suivant
                the_post();
                // afficher le fichier card.php
                get_template_part('template-parts/card');  
            } ?>
        </div>
    </section>
</main>

<?php get_footer() ?>