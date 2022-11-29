<?php
$home = esc_url(home_url('/'));
$privacypolicy = esc_url(home_url('/privacypolicy/'));
?>


<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
  <div class="mv-sub__inner">
    <div class="mv-sub__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/access-sub/mv-sub-access.jpg" alt="アクセスのメインビュー画像">
      <div class="mv-sub__background">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
      </div>
      <h2 class="mv-sub__title-ja">お問い合わせ</h2>
      <p class="mv-sub__title-en">contact</p>
    </div>
  </div>
</section>

<?php breadcrumb(); ?>

<section class="contact layout-contact">
  <div class="contact__inner">
    <div class="contact7__contents">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
  </div>
</section>

<section class="gallery-contact layout-gallery-contact">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>


<!-- contact7__contentsの中身 -->
<div class="contact7__content">
  <div class="contact7__head-wrapper">
    <div class="contact7__head">
      <span class="contact7__required">必須</span>
      <p class="contact7__title">お名前</p>
    </div>
  </div>
  <div class="contact7__input-text-area">
    [text* text-410 class:contact7__item]
  </div>
</div>
<div class="contact7__content">
  <div class="contact7__head-wrapper">
    <div class="contact7__head">
      <span class="contact7__required">必須</span>
      <p class="contact7__title">メールアドレス</p>
    </div>
  </div>
  <div class="contact7__input-text-area">
   [email* email-374 class:contact7__item]
  </div>
</div>
<div class="contact7__content">
  <div class="contact7__head-wrapper">
    <div class="contact7__head">
      <span class="contact7__any">任意</span>
      <p class="contact7__title">件名</p>
    </div>
  </div>
  <div class="contact7__input-text-area">
   [text* text-410 class:contact7__item]
  </div>
</div>
<div class="contact7__content">
  <div class="contact7__head-wrapper">
    <div class="contact7__head">
      <span class="contact7__required">必須</span>
      <p class="contact7__title">メッセージ</p>
    </div>
  </div>
  <div　class="contact7__input-textarea-area">
    [textarea* textarea-172 class:contact7__item]
  </div>
</div>
<div class="contact7__check-area">
  [checkbox* checkbox-187 class:contact7__check use_label_element "プライバシーポリシーに同意する"]
</div>
<div class="contact7__button-area">
  [multistep multistep-667 first_step "/contact-confirm"]
  [submit class:contact7__button "送信内容を確認する"]
</div>