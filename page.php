<?php get_header(); ?>
<main class="l-main">
    <section class="p-top__page p-top p-top__post">
        <?php the_post_thumbnail("full", array("alt" => get_the_title(), "class" => "p-top p-top__single p-top__post")); ?>
        <h1><?php the_title(); ?></h1>
    </section>
    <article class="p-article__single p-article">
        <div class="p-detail">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="p-detail__tag"><?php the_tags(""," ",) ?></div>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    <?php comments_template(); ?>
                <?php endwhile;
            else : ?><P>表示する記事がありません</p><?php endif; ?>
        </div>
       
    </article>
</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>