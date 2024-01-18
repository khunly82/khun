<footer>
        <?php wp_nav_menu([
            'theme_location' => 'footer-menu'
        ]) ?>

        <?php the_custom_logo() ?>
    </footer>
<!-- inclure les scripts js de wordpress  -->
<?php wp_footer() ?>
</body>
</html>