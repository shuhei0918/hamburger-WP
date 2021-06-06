<?php
    add_theme_support("title-tag");
    add_theme_support('post-thumbnails');

    function register_my_menus()
    {
        register_nav_menus(array(
            'main' => 'Main Menu',
            'side' => 'Side Menu',
            'foot' => 'Footer Menu'
        ));
    }
    add_action('after_setup_theme', 'register_my_menus');

    function hamburger_title($title)
    {
        if (is_front_page() && is_home()) {
            $title = get_bloginfo('name', 'display');
        } elseif (is_singular()) {
            $title = single_post_title('', false);
        }
        return $title;
    }
    add_filter('pre_get_document_title', 'hamburger_title');

    function hamburger_script()
    {
        wp_enqueue_script('jquery', get_template_directory_uri() . '/Foundation/jquery-3.6.0.min.js', array());
        wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Roboto:wght@400;500&display=swap', array(),);
        wp_register_style('ress', get_template_directory_uri() . '/Foundation/ress.css', array(),);
        wp_enqueue_style('app', get_template_directory_uri() . '/app.css', array('ress'),);
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(),);
        wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array());
    }
    add_action('wp_enqueue_scripts', 'hamburger_script');

    add_filter('get_the_archive_title', function ($title) {
        if (is_category()) {
            $title = single_cat_title('', false);
        } elseif (is_tag()) {
            $title = single_tag_title('', false);
        } elseif (is_tax()) {
            $title = single_term_title('', false);
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title('', false);
        } elseif (is_date()) {
            $title = get_the_time('Y年n月');
        } elseif (is_search()) {
            $title = esc_html(get_search_query(false));
        } elseif (is_404()) {
            $title = '404';
        } else {
        }
        return $title;
    });

    function custom_excerpt_length($length)
    {
        return 50;
    }
    add_filter('excerpt_length', 'custom_excerpt_length', 999);

    function new_excerpt_more($more)
    {
        return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    function default_thumbnail($post_id)
    {
        $post_thumbnail = get_post_meta($post_id, $key = '_thumbnail_id', $single = true);
        $default_thumbnail_id = '1';
        if (!wp_is_post_revision($post_id)) {
            if (empty($post_thumbnail)) {
                update_post_meta($post_id, $meta_key = '_tjumbnail_id', $meta_value = $default_thumbnail_id);
            }
        }
    }
    add_action('save_post', 'default_thumbnail');

    function show_page_number(){
        global $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $max_page = $wp_query -> max_num_pages;
    }
    function max_show_page_number(){
        global $wp_query;
        $max_page = $wp_query -> $max_num_pages;
        echo $max_page;        
    }

?>