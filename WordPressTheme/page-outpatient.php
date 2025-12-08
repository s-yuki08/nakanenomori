<?php get_header(); ?>

<?php get_template_part('parts/header-bg'); ?>
<section class="p-outpatient l-outpatient js-header-height">
  <div class="p-outpatient__inner l-inner">
    <div class="p-outpatient__wrapper">
      <div class="p-outpatient__left">
        <div class="p-outpatient__headline">
          <h2 class="p-outpatient__title">外来受診される方へ</h2>
        </div>
        <nav class="p-outpatient__nav">
          <ul class="p-outpatient__list">
            <li class="p-outpatient__item">
              <a href="#initial-visit">
                <span>はじめて受診される方へ</span>
                <span class="p-outpatient__arr"></span>
              </a>
            </li>
            <li class="p-outpatient__item">
              <a href="#consultation-hours">
                <span>外来診療受付時間</span>
                <span class="p-outpatient__arr"></span>
              </a>
            </li>
            <li class="p-outpatient__item">
              <a href="#bring">
                <span>お持ちいただくもの</span>
                <span class="p-outpatient__arr"></span>
              </a>
            </li>
            <li class="p-outpatient__item">
              <a href="#flow">
                <span>診療科の診察の流れ</span>
                <span class="p-outpatient__arr"></span>
              </a>
            </li>
            <li class="p-outpatient__item">
              <a href="#contact">
                <span>お問い合わせ</span>
                <span class="p-outpatient__arr"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="p-outpatient__right">
        <div class="p-outpatient__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sub_top.png" alt="外来診療受付時間">
        </div>
      </div>
    </div>
</section>

<section id="initial-visit" class="p-initialVisit l-initialVisit">
  <div class="p-initialVisit__inner l-inner">
    <h3 class="p-initialVisit__title c-section-title">
      <span class="c-section-title__dot"></span>
      初診について
    </h3>

    <div class="p-initialVisit__body">
      <p class="p-initialVisit__text">“ちょっと気になる症状”でも、私たちにご相談ください。<br>
        診療科は同じであっても、あらわれる症状には人それぞれに違いがあります。<br>
        ご自身で「このくらい大丈夫」と思っていても、いずれ大きな病気につながることも少なくありません。
        <br>
        この程度で病院に行ってもいいのかな？などと思わず、できるだけ早めにご相談ください。
        <br>
        診療科で悩むときは、「総合診療科」をご予約いただければ、診察後に適切な診療科をご案内いたします。
      </p>
    </div>
  </div>
</section>

<section id="consultation-hours" class="p-consultation-hours l-consultation-hours">
  <div class="p-consultation-hours__inner l-inner">
    <h3 class="p-consultation-hours__title c-section-title">
      <span class="c-section-title__dot"></span>
      外来診療受付時間
    </h3>
    <div class="p-consultation-hours__wrapper">
      <div class="p-consultation-hours__contents">
        <div class="p-consultation-hours__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/eigyoujikenn.png" alt="外来診療受付時間">
        </div>
        <div class="p-consultation-hours__aside">
          <dl class="p-consultation-hourst__info">
            <div class="p-consultation-hours__info-item">
              <dt>受付時間</dt>
              <dd>午前 8:45〜11:45<br>午後 13:45〜16:45</dd>
            </div>
            <div class="p-consultation-hours__info-item">
              <dt>診療時間</dt>
              <dd>午前 9:00〜12:00<br>午後 14:00〜17:00</dd>
            </div>
          </dl>
          <p class="p-consultation-hours__urgent">※急患は随時受け付けています。</p>
          <div class="p-consultation-hours__note-wrapper">
            <p class="p-consultation-hours__note">上記以外でもご対応可能ですのでご相談ください。</p>
            <p class="p-consultation-hours__tel">TEL:03-6421-3724</p>
            <p class="p-consultation-hours__fex">FAX:03-6421-3725</p>
          </div>
        </div>
      </div>
    </div>
</section>

<section id="bring" class="p-bring l-bring">
  <div class="p-bring__inner l-inner">
    <h3 class="p-bring__title c-section-title">
      <span class="c-section-title__dot"></span>
      お持ちいただくもの
    </h3>
    <div class="p-bring__box">
      <div class="p-bring__list-wrapper">
        <ul class="p-bring__list-left">
          <li class="p-bring__item">・マイナンバーカード（または健康保険証）</li>
          <li class="p-bring__item">・後期高齢者医療被保険者証</li>
        </ul>
        <ul class="p-bring__list-center">
          <li class="p-bring__item">・各種医療証</li>
          <li class="p-bring__item">・他病院の紹介状</li>
        </ul>
        <ul class="p-bring__list-right">
          <li class="p-bring__item">・おくすり手帳</li>
        </ul>
      </div>
    </div>

    <div class="p-bring__desc">
      <p class="p-bring__desc-text">
        他の医療機関へ通院されている方は、現在の治療内容が分かるもの（おくすり手帳や検査結果）をお持ちください。<br>
        より的確な診療を進めるため、これまでの治療経過や処方内容がとても重要な情報となります。
      </p>
    </div>
  </div>
</section>


<section id="flow" class="p-flow l-flow">
  <div class="p-flow__inner l-inner">
    <h3 class="p-flow__title c-section-title">
      <span class="c-section-title__dot"></span>
      診療科の診察の流れ
    </h3>
    <div class="p-flow__body">
      <ol class="p-flow__list p-flow-list">
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">電話で予約</p>
            <p class="p-flow-list__item-text">電話で予約のテキストが入ります</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">受付</p>
            <p class="p-flow-list__item-text">テキストテキストテキストテキストテキスト</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">診療科受付</p>
            <p class="p-flow-list__item-text">テキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">診察・検査</p>
            <p class="p-flow-list__item-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">会計</p>
            <p class="p-flow-list__item-text">テキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">お薬の受け取り</p>
            <p class="p-flow-list__item-text">テキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">ご帰宅</p>
            <p class="p-flow-list__item-text">テキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </li>
      </ol>
    </div>
</section>

<section id="contact" class="p-contact l-contact">
  <div class="p-contact__inner l-inner">
    <h3 class="p-contact__title c-section-title">
      <span class="c-section-title__dot"></span>
      お問い合わせ
    </h3>

    <div class="p-contact__box">
      <p class="p-contact__text">
        代表電話<br class="u-mobile">
        <a href="tel:0364213724" class="p-contact__tel">03-6421-3724</a>
      </p>

      <p class="p-contact__desc u-desktop">
        電話受付時間／平日9:00〜17:00・土曜日9:00〜13:00<br>
      </p>
      <p class="p-contact__desc u-desktop">※救急センターへの問い合わせは24時間対応</p>
      <p class="p-contact__desc u-mobile">
        電話受付時間<br>平日9:00〜17:00・土曜日9:00〜13:00<br>
      </p>
      <p class="p-contact__desc u-mobile">※救急センターへの問い合わせは24時間対応</p>
    </div>
  </div>
</section>


<?php get_footer(); ?>