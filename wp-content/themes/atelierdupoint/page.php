<?php get_header('front-page') ?>
<section class="banner">
    <h2 class="banner__title"><?= the_title() ?></h2>
    <p class="banner__p">cliquer pour agrandir</p>
</section>
<main class="gallery">
    <div class="gallery__container">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $attachments = get_posts([
                    'post_type'   => 'attachment',
                    'numberposts' => -1,
                    'post_status' => null,
                    'post_parent' => $post->ID
                ]);
                if ($attachments) {
                    foreach ($attachments as $index => $attachment) {
        ?>
                        <div class="gallery__container__item item-<?= $index ?>">
                            <img src="<?= wp_get_attachment_image($attachment->ID, 'full', false, [
                                            'class' => 'gallery__container__item__image'
                                        ]) ?>">
                        </div>
        <?php
                    }
                }
            }
        }
        ?>
        <div class="modal" id="myModal">
            <span class="close" id="span">&times;</span>
            <img class="modal-content" id="img01">
        </div>
    </div>
</main>
<?php get_footer() ?>