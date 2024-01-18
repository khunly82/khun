<footer>
        <?php wp_nav_menu([
            'theme_location' => 'footer-menu'
        ]) ?>

        <img src="<?= THEME_URI ?>/assets/images/bstorm.png" alt="bstorm-logo">
    </footer>
<!-- inclure les scripts js de wordpress  -->
<?php wp_footer() ?>
</body>
</html>