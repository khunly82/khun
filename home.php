<?php 
    get_header();
    $search_link = get_bloginfo('url') . get_locale() === 'fr_FR' ? '/articles' : '/en/news';
    
    // récupérer la page courante
    $currentPage = get_query_var('paged') === 0 ? 1 : get_query_var('paged');
    
    global $wp_query;
    
    // $wp_query->found_posts -> le nombre d'article trouvés
    // var_dump($wp_query->found_posts);die;

    // $posts_per_page => récupérer le nombre d'articles par page
    // var_dump($posts_per_page);die;

    $total = ceil($wp_query->found_posts / $posts_per_page);
?>

<section class="search">
    <div class="search-content">
        <h1><?= __('news', 'khun') ?></h1>
        <form action="<?= $search_link ?>">
            <!-- get_query_var() fonctionne comme $_GET[] en verifiant si la valeur  -->
            <input name="s" 
                   value="<?= get_query_var('s') ?>"
                   placeholder="<?= __('find_news_placeholder', 'khun') ?>">
            <button>
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
</section>

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

<section class="pagination">
    <div>
        <?php if(get_previous_posts_link()) {
            previous_posts_link('<i class="fa fa-chevron-left"></i> ' . __('previous_page', 'khun'));
        } ?>
    </div>
    <div>
        <!-- récupérer la page courante -->
        <?php if($wp_query->found_posts > $posts_per_page) { ?>
            <span><?= $currentPage ?></span>/<span><?= $total ?></span>
        <?php } ?>
    </div>
    <div>
    <?php if(get_next_posts_link()) {
            next_posts_link(__('next_page', 'khun') . ' <i class="fa fa-chevron-right"></i>' );
        } ?>
    </div>
</section>

<?php get_footer() ?>