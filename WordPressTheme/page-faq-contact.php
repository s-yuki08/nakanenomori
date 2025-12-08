<?php
$hospitalization = esc_url( home_url( '/hospitalization/' ) );
$visit = esc_url( home_url( '/hospitalization/#visit' ) );
?>
<?php get_header(); ?>

<?php get_template_part('parts/header-bg') ?>


<section id="contact-top" class="p-faqContact  l-faqContact js-header-height">
  <div class="p-faqContact__inner l-inner">
    <h2 class="p-faqContact__title">お問い合わせ</h2>

    <div class="p-faqContact__box">
      <div class=" p-faqContact__row">
        <span class="p-faqContact__label">代表電話</span>
        <a class="p-faqContact__tel" href="tel:0364213724">03-6421-3724</a>
      </div>

      <p class="p-faqContact__note u-desktop">
        電話受付時間／平日 9:00〜17:00・土曜日 9:00〜13:00
      </p>
      <p class="p-faqContact__note u-desktop">
        ※救急センターへのお問い合わせは24時間対応
      </p>
      <p class="p-faqContact__note u-mobile">
        電話受付時間<br>平日9:00〜17:00・土曜日9:00〜13:00<br>
      </p>
      <p class="p-faqContact__note u-mobile">※救急センターへの問い合わせは24時間対応</p>
    </div>
  </div>
</section>

<section id="faq" class="p-faq l-faq">
  <div class="p-faq__inner l-inner">
    <h2 class="p-faq__title">よくある質問</h2>

    <div class="p-faq__wrapper">
      <ul class="p-faq__list">
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            診療受付時間および診療時間は？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">診療受付時間<br>
              月〜金曜日：午前9時から昼12時<br class="u-mobile">（受付時間／午前8時45分から11時45分）<br>
              午後2時から午後5時<br class="u-mobile">（午後1時45分から4時45分）<br>
              土曜日：午前9時から昼12時<br class="u-mobile">（受付時間／午前8時45分から11時45分）<br>
              急患はいつでも診療いたします。
            </p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            初診時には紹介状は必要ですか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">当院は紹介状がなくても診察可能です。
            </p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            診断書等の文書依頼・申し込みはどうしたら良いのでしょうか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">受付窓口で文書申し込みをおこなってください（受付時間　9時00分～17時00分）。
            </p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            ⼊院する時に必要なものは何ですか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">健康保険証・老人医療受給証・印鑑<br>
              入院証書（患者さま本人・保証人・連帯保証人それぞれが自署、捺印したもの）<br>
              入院保証金（50,000円）<br>
              ※入院保証金と引き換えに保証金預り証をお渡ししますので、退院時まで大切に保管してください。<br>
              過去３ヶ月以内に他の病院に入院していたことがある場合には、前医の証明書をお持ち下さい。<br>
            </p>
            <div class="p-faq__btn">
              <a href="<?php echo home_url('/hospitalization'); ?>">
                入院についてはこちら
                <span class="p-faq__arr"></span>
              </a>
            </div>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            面会の時間は何時から何時までですか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">月〜金・土曜日： 14:00〜16:00の内、10分間<br>
              日曜日・祝日： 14:00〜16:00の内、10分間<br>
              14:00〜16:00の内、10分間<br>※上記時間以外は、許可を得た場合を除いて面会はできません。
            </p>
            <div class="p-faq__btn">
              <a href="<?php echo $visit; ?>">
                面会についてはこちら
                <span class="p-faq__arr"></span>
              </a>
            </div>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            ATMはありますか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">ATMは設置しておりません。お近くの銀行、コンビニエンスストアをご利用ください。
            </p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            駐車場はありますか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">3台分の駐車スペースを設けており、そのうち障害者向けの駐車スペースも1台ございます。
            </p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            車いすは借りられますか？

          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">ご用意しております。院内でご自由にご利用ください。
            </p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            クレジットカードは使えますか？

          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">クレジットカードをご利用いただけます。
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>