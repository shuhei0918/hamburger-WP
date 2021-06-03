<?php
    add_theme_support( "menus");
    add_theme_support( "title-tag");
    add_theme_support('post-thumbnails');

    function hamburger_title($title){
        if(is_front_page(  ) && is_home( )){
            $title = get_bloginfo( 'name', 'display');
        } elseif (is_singular(  )){
        $title = single_post_title( '',false);
        }
        return $title;
    }
    add_filter( 'pre_get_document_title','hamburger_title');

    function hamburger_script(){
        wp_enqueue_script( 'jquery',get_template_directory_uri().'/Foundation/jquery-3.6.0.min.js', array());
        wp_enqueue_style( 'fonts','https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Roboto:wght@400;500&display=swap', array(),);
        wp_register_style( 'ress',get_template_directory_uri().'/Foundation/ress.css', array(),);
        wp_enqueue_style( 'app',get_template_directory_uri().'/app.css', array('ress'),);
        wp_enqueue_style( 'style',get_template_directory_uri().'/style.css', array(),);
        wp_enqueue_script( 'script',get_template_directory_uri().'/script.js', array());
    }
    add_action('wp_enqueue_scripts','hamburger_script');

    function widgets_init(){
        register_sidebar(
            array(
                'name'          =>'カテゴリーウィジェット',
                'id'            =>'category_widget',
                'description'   =>'カテゴリー用ウィジェット',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>'
            )
        );
    }
    add_action('widgets_init','widgets_init');
     ?>