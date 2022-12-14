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
    <p class="contact__text">お手数ですが、以下の必要事項を該当のフォームにご記入の上、「送信内容を確認する」ボタンを押してください。</p>
    <div class="contact7__contents">
      <?php /*echo do_shortcode('[contact-form-7 id="98" title="お問合せフォーム"]');*/ ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<p class="contact__inquiry"><a href="">宿泊に関するお問合せ</a></p>
<p class="contact__inquiry"><a href="">フリアコに関するお問合せ</a></p>
<p class="contact__inquiry"><a href="">ボランティアに関するお問合せ</a></p>
<p class="contact__inquiry"><a href="">求人に関するお問合せ</a></p>
<p class="contact__inquiry"><a href="">マスコミ・取材その他
</a></p>
  </div>
</section>

<section class="gallery-contact layout-gallery-contact">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>