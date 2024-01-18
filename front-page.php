<!-- include('header.php') -->
<?php get_header() ?>

<main>
    <section class="actu">
        <div class="top">
            <h1>Nos dernières actualités</h1>
            <a href="/articles"><span class="fa fa-chevron-right"></span> Voir toutes les actualités</a>
        </div>
        <div class="articles">
            <!-- faire une requète pour chercher des articles (v. functions.php)-->
            <?php $loop = getLastNews() ?>
            <!-- parcourir les articles -->
            <?php while($loop->have_posts()) {
                // passer à l'article suivant
                $loop->the_post();
                // afficher le fichier card.php
                get_template_part('template-parts/card');  
            } ?>
        </div>
    </section>
</main>

<!-- include('footer.php') -->
<?php get_footer() ?>