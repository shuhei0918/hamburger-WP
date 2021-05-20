<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Foundation/ress.css">
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <script src="Foundation/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/5ab7618b37.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body <?php body_class( $class ); ?>>
    <div class="l-base">
        <header class="l-header p-header">
            <input type="radio" name="c-menu" id="c-menu__open">
            <label for="c-menu__open" class="c-menu__open">Menu</label>
            <h1 class="l-header__title p-header__title">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php get_search_form(); ?>
        </header>