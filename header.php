<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/5ab7618b37.js" crossorigin="anonymous"></script>
    <?php if(is_singular()) wp_enqueue_script("comment-reply"); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="l-base">
        <header class="l-header p-header">
            <input type="radio" name="c-menu" id="c-menu__open">
            <label for="c-menu__open" class="c-menu__open">Menu</label>
            <h1 class="l-header__title p-header__title">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php get_search_form(); ?>
        </header>