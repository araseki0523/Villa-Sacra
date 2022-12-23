<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
  <div class="mv-sub__inner">
    <div class="mv-sub__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/qa/mv-sub-qa.jpg" alt="qandaのメインビュー画像">
      <div class="mv-sub__background">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
      </div>
      <h2 class="mv-sub__title-ja">求人募集</h2>
      <p class="mv-sub__title-en">recruit</p>
    </div>
  </div>
</section>

<?php breadcrumb(); ?>

<section id="recruit" class="recruit  layout-recruit">
  <div class="recruit__inner">
    <div class="recruit__contents animation">
      <div class="freeAccommodation__title"></div><!-- /.freeAccommodation__title -->
    
    <table class="tb01">
  <tr>
    <th>項目01(th)</th>
    <td>AAA</td>
  </tr>
  <tr>
    <th>項目02(th)</th>
    <td>AAA</td>
  </tr>
  <tr>
    <th>項目03(th)</th>
    <td>AAA</td>
  </tr>
</table>
    
    </div>
  </div>
</section>


<section class="gallery-qa layout-gallery-qa">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>