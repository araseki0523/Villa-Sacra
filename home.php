<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
    <div class="mv-sub__inner">
        <div class="mv-sub__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-top.jpg" alt="ブログ画像">
            <div class="mv-sub__background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
            </div>
            <h2 class="mv-sub__title-ja">ブログ</h2>
            <p class="mv-sub__title-en">Blog</p>
        </div>
    </div>
</section>

<?php breadcrumb(); ?>

<section class="blog-page layout-blog-page">
    <div class="blog-page__inner">
        <div class="blog-page__items cards">

            <!-- 記事のループ処理開始 -->
            <?php
            if (wp_is_mobile()) {
                $num = 3; // スマホの表示数(全件は-1)
            } else {
                $num = 9; // PCの表示数(全件は-1)
            }
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = [
                'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
                'paged' => $paged, // ページネーションがある場合に必要
                'posts_per_page' => $num, // 表示件数
            ];
            $wp_query = new WP_Query($args);
            if (have_posts()) : while (have_posts()) : the_post();
            ?>

                    <a href="<?php the_permalink(); ?>" class="blog-page__item card">
                        <div class="card__img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                            <?php else : ?>
                                <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="card__info">
                            <time class="card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <h3 class="card__title">
                                <?php the_title(); ?>
                            </h3>
                            <p class="card__text"><?php the_excerpt(); ?></p>
                        </div>

                    <?php endwhile;
                                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
                <!-- 記事のループ処理終了 -->
                    </a>
        </div>
        <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
        ?>
            <!-- pagenation -->
            <div class="pagenation">
                <?php
                the_posts_pagination(array(
                        'mid_size' => 1,
                        'prev_next' => true,
                        'prev_text' => '<',
                        'next_text' => '>',
                    )
                );
                ?>
            </div><!-- /pagenation -->
        <?php endif; ?>
        
    </div>
</section>


<section class="facility__gallery layout-sub-facility">
    <?php get_template_part('template/gallery'); ?>
</section>


<?php get_footer(); ?>