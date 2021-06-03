<?php get_header(); ?>
<main class="l-main">
    <section class="p-top__archive p-top">
        <h1>Menu:</h1>
        <h3>
            <?php echo get_queried_object(); ?>
        </h3>
    </section>
    <article class="p-article__archive p-article">
        <h2>小見出しが入ります</h2>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
                <article class="c-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="c-card__img"><?php the_post_thumbnail(); ?></div>
                    <section class="c-card__outline">
                        <div class="c-card__contents">
                            <h3><?php the_title(); ?></h3>
                            <h4>小見出しが入ります</h4>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="c-button c-button--archive">
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>
                    </section>
                </article>
            <?php endwhile;
        else :
            ?><p>表示する記事がありません</p><?php
                                endif;
                                    ?>
        <div class="p-pagenation">
            <?php
            the_posts_pagination(array(
                'type' => 'list',
                'mid_size' => 2,
                'show_all' => true,
                'prev_text' => '<<',
                'next_text' => '>>'
            ));
            ?>
        </div>
</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>