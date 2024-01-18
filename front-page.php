<!-- include('header.php') -->
<?php get_header() ?>

<main>
    <section class="actu">
        <div class="top">
            <h1>Nos dernières actualités</h1>
            <a href="/articles"><span class="fa fa-chevron-right"></span> Voir toutes les actualités</a>
        </div>
        <!--  -->
        <?php $loop = getLastNews() ?>
        <?php while($loop->have_posts()) {
            $loop->the_post();
            get_template_part('template-parts/card');  
        } ?>

    </section>
</main>

<!-- include('footer.php') -->
<?php get_footer() ?>