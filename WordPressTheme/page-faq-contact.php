<?php
$hospitalization = esc_url(home_url('/hospitalization/'));
$visit = esc_url(home_url('/hospitalization/#visit'));
?>
<?php get_header(); ?>

<?php get_template_part('parts/header-bg') ?>


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
            <div class="p-faq__schedule">
              <div class="p-faq__schedule-block">
                <span class="p-faq__schedule-label">受付時間</span>
                <div class="p-faq__schedule-content">
                  <p class="p-faq__schedule-row"><span class="p-faq__schedule-day">月〜金曜日：</span><span class="p-faq__schedule-time">午前 8:45〜11:45 ／ 午後13:45〜16:45</span></p>
                  <p class="p-faq__schedule-row"><span class="p-faq__schedule-day">土曜日：</span><span class="p-faq__schedule-time">午前 8:45〜11:45</span></p>
                </div>
              </div>
              <div class="p-faq__schedule-block">
                <span class="p-faq__schedule-label">診療時間</span>
                <div class="p-faq__schedule-content">
                  <p class="p-faq__schedule-row"><span class="p-faq__schedule-day">月〜金曜日：</span><span class="p-faq__schedule-time">午前 9:00〜12:00 ／ 午後14:00〜17:00</span></p>
                  <p class="p-faq__schedule-row"><span class="p-faq__schedule-day">土曜日：</span><span class="p-faq__schedule-time">午前 9:00〜12:00</span></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            初診時には紹介状は必要ですか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">
              「当院は紹介状がなくても受診いただけます。<br>
              ただし、より的確な診療を進めるため、これまでの治療経過や処方内容がとても重要な情報となります。他の医療機関へ通院されている方は、現在の治療内容が分かるもの（おくすり手帳や検査結果）をお持ちください。<br>
              なお、当院への通院に変更をご希望される場合には、以前の通院先からの診療情報提供書をお持ちいただくようにお願いいたします。」
            </p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            診断書等の文書依頼・申し込みはどうしたら良いのでしょうか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">受付窓口で文書申し込みをおこなってください（受付時間　9時00分～17時00分）。</p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            ⼊院する時に必要なものは何ですか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">
              健康保険証・老人医療受給証・印鑑<br>
              入院証書（患者さま本人・保証人・連帯保証人それぞれが自署、捺印したもの）<br>
              入院保証金（50,000円）<br>
              ※入院保証金と引き換えに保証金預り証をお渡ししますので、退院時まで大切に保管してください。<br>
              過去３ヶ月以内に他の病院に入院していたことがある場合には、前医の証明書をお持ち下さい。
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
            <p class="p-faq__item-answer-text">
              月〜金・土曜日：14:00〜19:00／15分間<br>
              日曜日・祝日： 14:00〜18:00／15分間<br>
              ※上記時間以外は、許可を得た場合を除いて面会はできません。
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
            <p class="p-faq__item-answer-text">ATMは設置しておりません。お近くの銀行、コンビニエンスストアをご利用ください。</p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            駐車場はありますか？
          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">3台分の駐車スペースを設けており、そのうち障害者向けの駐車スペースも1台ございます。</p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            車いすは借りられますか？

          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">
              ご用意しております。<br>
              入口や駐車場までお持ちしますので、必要な方は受付へお申し出ください。
            </p>
          </div>
        </li>
        <li class="p-faq__item">
          <p class="p-faq__item-question">
            <span class="p-faq__item-dot"></span>
            クレジットカードは使えますか？

          </p>
          <div class="p-faq__item-answer">
            <p class="p-faq__item-answer-text">
              現金およびクレジットカードでの決済が可能です。<br>
              会計時にお申し付けください。
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>