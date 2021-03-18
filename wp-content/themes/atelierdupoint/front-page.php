<?php get_header('front-page') ?>
<section class="banner">
    <h2 class="banner__title">Tatouages</h2>
    <p class="banner__p">Cliquer pour agrandir</p>
</section>
<main class="gallery">
    <?= wp_get_attachment_image(10, 'thumbnail') ?>
    <div class="gallery__container">
        <div class="gallery__container__item item-1">
            <img class="gallery__container__item__image" src="./wp-content/themes/atelierdupoint/assets/images/unNamedTattoo.jpg" alt="tatouage ornemental sur le dos" id="myImg1">
        </div>

        <div class="modal" id="myModal">
            <span class="close" id="span">&times;</span>
            <img class="modal-content" id="img01">
        </div>
    </div>
</main>
<?php get_footer() ?>