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
      <?php echo do_shortcode('[contact-form-7 id="56" title="お問合せフォーム"]'); ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
  </div>
</section>

<!-- サンプル -->
<label class="ECM_CheckboxInput">
  <input class="ECM_CheckboxInput-Input" type="checkbox">
  <span class="ECM_CheckboxInput-DummyInput"></span>
  <span class="ECM_CheckboxInput-LabelText">利用規約に同意する</span>
</label>


<section class="gallery-contact layout-gallery-contact">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>