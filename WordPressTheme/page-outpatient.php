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
      はじめて受診される方へ
    </h3>

    <div class="p-initialVisit__body">
      <p class="p-initialVisit__text">
        ご自身で「このくらい大丈夫」と思えるようなことでも、放っておくと大きな病気につながってしまう場合もあります。<br>
        「こんなことで病院に行ってもいいのかな？」と思わず、気になることがあれば、お気軽にご相談ください。
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
            <p class="p-flow-list__item-title">電話での予約</p>
            <p class="p-flow-list__item-text">
              来院される日時が定まっている場合には、お電話で受診予約を承ります。
              <br>
              初診の方も、予約外の再診も随時お受付いたします。受付時間内にお越し下さい。
              <br>
              緊急の場合など、ご不明な点がある時には、お電話でお問い合わせください。
            </p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">受 付</p>
            <p class="p-flow-list__item-text">外来窓口にて受付いたします。</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">診察・検査</p>
            <p class="p-flow-list__item-text">
              各診療科の外来担当医が診察させていただきます。
              <br>
              診察が終わりましたら、外来待合でお待ちください。
            </p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">お薬の受け取り</p>
            <p class="p-flow-list__item-text">院内処方の場合、当院の薬剤師が調剤したお薬をお持ちいたします。この際に、お薬の内容についても説明させていただきます。院外処方の場合には、会計時に処方箋をお渡しします。</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">会 計</p>
            <p class="p-flow-list__item-text">お会計が済みましたら、外来窓口からお呼びいたします。</p>
          </div>
        </li>
        <li class="p-flow-list__item">
          <div class="p-flow-list__item-wrap">
            <p class="p-flow-list__item-title">ご帰宅</p>
            <p class="p-flow-list__item-text">気をつけてお帰りください。</p>
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

      <p class="p-contact__desc">
        電話受付時間　午前 9:00～12:00 ／ 午後14:00～17:00
      </p>
    </div>
  </div>
</section>


<?php get_footer(); ?>