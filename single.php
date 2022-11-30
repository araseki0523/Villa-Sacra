<?php
$home = esc_url(home_url('/'));
$archive = esc_url(home_url('/news-archive/'));
?>


<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
    <div class="mv-sub__inner">
        <div class="mv-sub__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog.jpg" alt="ブログ画像">
            <div class="mv-sub__background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
            </div>
            <h2 class="mv-sub__title-ja">ブログ</h2>
            <p class="mv-sub__title-en">Blog</p>
        </div>
    </div>
</section>

<?php breadcrumb(); ?>

<section class="blog-page-detail layout-blog-page-detail">
    <div class="blog-page-detail__inner">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="blog-page-detail__title"><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-page-detail__image">
                        <img src="<?php the_post_thumbnail_url('medium'); ?>">
                    </div>
                <?php endif; ?>

                <div class="blog-page-detail__body">
                    <div class="blog-page-detail__content">
                        <?php echo the_content(); ?>
                    </div>
                </div>

        <?php endwhile;
        endif; ?>

        <div class="blog-page-detail__button-area">
            <a href="<?php echo $archive ?>" class="blog-page-detail__button button">一覧へ戻る</a>
        </div>

    </div>
</section>




<section class="gallery-single layout-gallery-single">
    <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>