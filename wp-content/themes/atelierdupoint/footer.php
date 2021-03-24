<footer class="footer">
    <?php get_template_part('template-parts/footer/disclaimer');
    get_template_part('template-parts/footer/social-links') ?>
</footer>
<script src="<?php
                if (is_singular()) {
                    echo get_theme_file_uri('/assets/js/imageZoom.js');
                } else {
                    echo "";
                }
                ?>"></script>
<?php wp_footer() ?>
</body>

</html>