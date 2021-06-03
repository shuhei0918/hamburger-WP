<?php get_header(); ?>
        <main class="l-main">
            <section class="p-top__index p-top">
                <h2>ダミーサイト</h2>
            </section>
            <article class="p-article__index p-article">
                <article class="c-content-index c-content-index__takeout">
                    <?php
                        $category_id = get_cat_ID('Take Out');
                        $category_link = get_category_link($category_id);
                    ?>
                    <h2><a href="<?php echo esc_url($category_link); ?>"title="Take Out">Take Out</a></h2>
                    <div class="c-content-index__selectinfo">
                        <section class="c-content-index__infobox">
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります</p>
                        </section>
                        <section class="c-content-index__infobox">
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります</p>
                        </section>
                    </div>
                </article>
                <article class="c-content-index c-content-index__eatin">
                <?php
                        $category_id = get_cat_ID('Eat In');
                        $category_link = get_category_link($category_id);
                    ?>
                    <h2><a href="<?php echo esc_url($category_link); ?>"title="Eat In">Eat In</a></h2>
                    <div class="c-content-index__selectinfo">
                        <section class="c-content-index__infobox">
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります</p>
                        </section>
                        <section class="c-content-index__infobox">
                            <h3>小見出しが入ります</h3>
                            <p>テキストが入ります</p>
                        </section>
                    </div>
                </article>
            </article>
            <section class=p-map>
                <div class="p-map__screen">
                    <h2>見出しが入ります</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
            </section>

        </main>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>