<?php wp_footer(); ?>

<footer class="footer layout-footer">
  <div class="footer__inner">
    <div class="footer__container">
      <div class="footer__left">
        <div class="footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="メインビュータイトル下の背景画像">
        </div>
      </div>
      <!--footer__left-->
      <div class="footer__right">
        <ul class="footer__nav">
            <li class="footer__list-item">住所：鎌倉市御成町13-29</li>
            <li class="footer__list-item">電話：0467-40-4070<br>
              <span>​※繁忙時、留守番電話になります。折TELしますので、メッセージをお残し下さい。</span>
            </li>
            <li class="footer__list-item">Email：info@villa-sacra.com</li>
        </ul>
      </div><!-- /.footer__right -->
    </div>
    <!--footer__container-->
    <!-- SNSアイコン部分 -->
    <div class="footer__sns">
      <ul class="footer__lists">
        <li class="footer__list">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-instagram.png" alt="インスタグラムのアイコン画像">
          </a>
        </li>
        <li class="footer__list">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-facebook.png" alt="フェイスブックのアイコン画像">
          </a>
        </li>
        <li class="footer__list footer__list-big">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-tiktok.png" alt="ティックトックのアイコン画像">
          </a>
        </li>
        <li class="footer__list footer__list-big">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-blog.png" alt="ブログのアイコン画像">
          </a>
        </li>
      </ul>
    </div>
    <!--footer__sns-->
    <!-- コピーライト -->
    <div class="footer__copy-box">
      <p class="footer__cancel-policy">ホテル規約・キャンセルポリシー</p>
      <p class="footer__copyright">© 2021 コピーライトが入ります</p>
    </div><!-- /.footer__copy -->
  </div>
</footer>


</body>

</html>