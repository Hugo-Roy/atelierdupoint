<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= bloginfo('name') ?></title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <img class="logo__image1" src="<?= get_theme_file_uri('/assets/images/skull-logo.svg') ?>" alt="logo atelier du point tatouage">
            <h1 class="logo__title">L'Atelier Du Point</h1>
            <img class="logo__image2" src="<?= get_theme_file_uri('/assets/images/skull-logo.svg') ?>" alt="logo atelier du point tatouage">
        </div>
        <?php get_template_part('template-parts/header/main-menu'); ?>
    </header>