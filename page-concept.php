<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
  <div class="mv-sub__inner">
    <div class="mv-sub__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/concept/mv-sub-concept.jpg" alt="コンセプトのメインビュー画像">
      <div class="mv-sub__background">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
      </div>
      <h2 class="mv-sub__title-ja">コンセプト</h2>
      <p class="mv-sub__title-en">concept</p>
    </div>
  </div>
</section>

<?php breadcrumb(); ?>

<?php get_template_part('template/reservation'); ?>

<section class="concept layout-concept">
  <div class="concept__background-image">
    <div class="concept__inner">
      <div class="concept__container">
        <p class="concept__text1">
          Villa Sacra（ヴィラ・サクラ）は、鎌倉を中心に湘南の暮らしを楽しくするモノと場を提供する生活ブランド・WanderKitchen projectによって、鎌倉駅西口から３分ほどのところにつくられたゲストハウスです。
          <br class="u-mobile">
          ちょうどソンベカフェやYMCAの真裏、刀鍛冶の綱広さんの横の木戸を入った突き当たり。絶好の立地です。
        </p>
        <!-- /.concept__text1 -->
        <p class="concept__text2">
          築８０年以上といわれる古民家を改装し、現代美術家・滝沢達史/消しゴムはんこ作家・津久井智子/日本画家・石田紫織/写真家・湯沢英治という４人の気鋭アーティストにも参加していただき、国内では珍しいアーティストホテルという出で立ちになりました。
          <br class="u-mobile">
          和のテイストですが、いわゆる侘び寂びの世界ではなく、外国から見た和のイメージ、艶と彩りのある和、凛としたというよりはワクワクするような、なおかつ懐かしい昭和の薫りも満載の楽しい宿です。
        </p>
        <!-- /.concept__text2 -->
        <p class="concept__text3">
          友好関係にある当地でも人気の飲食店WanderKitchenや系列店のBAHATI COFFEEと提携し、Meal Ticket（食事券）を発行する形で朝食を提供するB&Bスタイルも鎌倉ならではの新しい形。
          <br class="u-mobile">
          ぜひ、食事付きプランも体験してください。夕食も可です。
        </p>
        <!-- /.concept__text3 -->
        <p class="concept__text4">
          名前のサクラは日本を連想させるけれど、あの「桜」ではありません。英語でいえばSacred。聖なるという宗教的意味合いの強い言葉ですが、ここでは周囲から隔絶され庇護された、俗から守られ対極に位置する、などというニュアンスで使っています。
          <br class="u-mobile">
          周囲に今も住まわれている大家さんの一族がずうっと大切にしてこられたPrivate Propertyとそののどかで平和な空気に敬意を表してのことです。
        </p>
        <!-- /.concept__text4 -->
        <p class="concept__text5">
          SANCTUARYという言葉のニュアンスに近いかもしれません。
        </p>
        <!-- /.concept__text5 -->
        <p class="concept__text6">
          テレビもPCもない、ゆっくりと流れる時間に身を委ね、
          <br>
          穏やかに深呼吸をする、という贅沢、味わってみませんか？
        </p>
        <!-- /.concept__text6 -->
        <div class="concept__text7">
          Villa Sacra&nbsp;&nbsp;Owner
          <br>
          <div class="concept__sign">
            <img src="<?php echo get_template_directory_uri(); ?>/images/concept/villasacra-owner.svg" alt="villasacraオーナーサイン">
          </div>
        </div>
        <!-- /.concept__text7 -->
      </div>
      <!--concept__container-->
    </div><!-- /.concept__inner -->
  </div><!-- /.concept__background-image -->
</section>

<section class="gallery-concept layout-gallery-concept">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>