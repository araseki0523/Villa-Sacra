<?php
$home = esc_url(home_url('/'));
?>


<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
  <div class="mv-sub__inner">
    <div class="mv-sub__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/access-sub/mv-sub-access.jpg" alt="アクセスのメインビュー画像">
      <div class="mv-sub__background">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
      </div>
      <h2 class="mv-sub__title-ja">お問い合わせ完了</h2>
      <p class="mv-sub__title-en">thank you</p>
    </div>
  </div>
</section>

<?php breadcrumb(); ?>

<section class="contact layout-contact">
  <div class="contact__inner">
    <p class="contact__thanks">
      お問い合わせが完了しました。ありがとうございました。<br>
      担当者から折り返しご連絡いたします。<br>
      今しばらくお待ち下さい。
    </p>
    <div class="contact__button-area">
      <a href="<?php $home = esc_url(home_url('/'));?>" class="contact__button button">HOMEへ戻る</a>
    </div>
  </div>
</section>


<section class="gallery-contact layout-gallery-contact">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>