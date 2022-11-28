<?php
$home = esc_url(home_url('/'));
?>


<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
    <div class="mv-sub__inner">
        <div class="mv-sub__image">
            <div class="mv-sub__background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
            </div>
            <h2 class="mv-sub__title-ja">404エラー</h2>
            <p class="mv-sub__title-en">Error</p>
        </div>
    </div>
</section>

<?php breadcrumb(); ?>

<section class="error-404 layout-error-404">
    <div class="error-404__inner">
        <p class="error-404__message">
            お探しのページが見つかりません
        </p>
        <div class="error-404__button-area">
            <a href="<?php echo $home ?>" class="error-404__button button">HOMEへ戻る</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>