<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
    <div class="mv-sub__inner">
        <div class="mv-sub__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/facility/facility.jpg" alt="共有スペース/アメニティ/注意事項のメインビュー画像">
            <div class="mv-sub__background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
            </div>
            <h2 class="mv-sub__title-ja">共有スペース/アメニティ/注意事項</h2>
            <p class="mv-sub__title-en">facility</p>
        </div>
    </div>
</section>

<?php get_template_part('template/breadcrumb'); ?>



<section class="facility__gallery layout-sub-facility">
    <?php get_template_part('template/gallery'); ?>
</section>

<section class="sub-gallery layout-sub-gallery">
    <?php get_template_part('template/inquiry'); ?>
</section>

<?php get_footer(); ?>