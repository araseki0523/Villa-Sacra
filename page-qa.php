<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
    <div class="mv-sub__inner">
        <div class="mv-sub__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/qa/mv-sub-qa.jpg" alt="qandaのメインビュー画像">
            <div class="mv-sub__background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
            </div>
            <h2 class="mv-sub__title-ja">q&amp;a</h2>
            <p class="mv-sub__title-en">question</p>
        </div>
    </div>
</section>

<?php breadcrumb(); ?>

<section id="qa" class="qa">
      <div class="qa__inner">
        <div class="qa__contents animation">
          <ul class="qa__content">
            <li>
              <div class="qa__label qa__label1">
                <p>ダウンタイムはどのくらいですか？</p>
                <div class="icon-wrap"><span class="icon"></span></div>
              </div>
              <div class="qa__answer">
                <p>個人差はございますが、1週間くらいで徐々に落ち着いていき、約1ヶ月後に完成するイメージです。</p>
              </div>
            </li>
          </ul>
          <ul class="qa__content">
            <li>
              <div class="qa__label">
                <p>明記されている料金の他にかかる費用はありますか？</p>
                <div class="icon-wrap"><span class="icon"></span></div>
              </div>
              <div class="qa__answer">
                <p>痛みが不安な場合は笑気麻酔2,500円(税込)を付けて頂くことは可能ですが、その他は全て料金に含まれております。　(カウンセリング代・局所麻酔代・針代・処方薬代)</p>
              </div>
            </li>
          </ul>
          <ul class="qa__content">
            <li>
              <div class="qa__label">
                <p>何歳から施術は可能ですか？</p>
                <div class="icon-wrap"><span class="icon"></span></div>
              </div>
              <div class="qa__answer">
                <p>15歳から可能です。また、18歳未満の方は同意書のご持参と保護者の方の同伴が必要です。</p>
              </div>
            </li>
          </ul>
          <ul class="qa__content">
            <li>
              <div class="qa__label">
                <p>施術当日に気を付けることは何ですか？</p>
                <div class="icon-wrap"><span class="icon"></span></div>
              </div>
              <div class="qa__answer">
                <p>個施術当日は、入浴・サウナ・アルコールの摂取・激しい運動・車の運転・施術部位を触ることはお控え下さい。</p>
              </div>
            </li>
          </ul>
          <ul class="qa__content">
            <li>
              <div class="qa__label">
                <p>シャワーはいつから可能ですか？</p>
                <div class="icon-wrap"><span class="icon"></span></div>
              </div>
              <div class="qa__answer">
                <p>当日から可能です。</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

<section class="sub-gallery layout-sub-gallery">
   <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>