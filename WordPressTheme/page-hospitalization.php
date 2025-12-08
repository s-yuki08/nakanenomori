<?php get_header(); ?>
<?php get_template_part('parts/header-bg') ?>
<section class="p-hospitalization l-hospitalization js-header-height">
  <div class="p-hospitalization__inner l-inner">
    <div class="p-hospitalization__wrapper">
      <div class="p-hospitalization__left">
        <div class="p-hospitalization__headline">
          <h2 class="p-hospitalization__title">入院のご案内</h2>
        </div>
        <nav class="p-hospitalization__nav">
          <ul class="p-hospitalization__list">
            <li class="p-hospitalization__item">
              <a href="#hospital-flow">
                <span>入院までの流れ</span>
                <span class="p-hospitalization__arr"></span>
              </a>
            </li>
            <li class="p-hospitalization__item">
              <a href="#hospital-caution">
                <span>入院中の注意事項</span>
                <span class="p-hospitalization__arr"></span>
              </a>
            </li>
            <li class="p-hospitalization__item">
              <a href="#hospital-cost">
                <span>入院費用
                </span>
                <span class="p-hospitalization__arr"></span>
              </a>
            </li>
            <li class="p-hospitalization__item">
              <a href="#hospital-discharge">
                <span>退院手続</span>
                <span class="p-hospitalization__arr"></span>
              </a>
            </li>
            <li class="p-hospitalization__item p-hospitalization__item--orange">
              <a href="#visit">
                <span>面会案内</span>
                <span class="p-hospitalization__arr p-hospitalization__arr--orange"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="p-hospitalization__right">
        <div class="p-hospitalization__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/hospital_fv.png" alt="外来診療受付時間">
        </div>
      </div>
    </div>
</section>

<section id="hospital-flow" class="p-hospitalFlow l-hospitalFlow">
  <div class="p-hospitalFlow__inner l-inner">
    <h3 class="p-hospitalFlow__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--pink"></span>
      入院までの流れ
    </h3>
    <div class="p-hospitalFlow__step">
      <ol class="p-hospitalFlow__list">
        <li class="p-hospitalFlow__item">
          <div class="p-hospitalFlow__item-wrap">
            <p class="p-hospitalFlow__item-title">外来で診察</p>
            <div class="p-hospitalFlow__item-text-body">
              <p class="p-hospitalFlow__item-text">まず外来で診察を受けていただき、必要に応じて検査を受けていただきます。<br>お薬手帳は、診察の度にお持ちください。</p>
            </div>
          </div>
        </li>
        <li class="p-hospitalFlow__item">
          <div class="p-hospitalFlow__item-wrap">
            <p class="p-hospitalFlow__item-title">入院の決定</p>
            <div class="p-hospitalFlow__item-text-body">
              <p class="p-hospitalFlow__item-text">検査の結果を見て、診察があります。<br>医師から入院の必要性について説明があります。</p>
            </div>
          </div>
        </li>
        <li class="p-hospitalFlow__item">
          <div class="p-hospitalFlow__item-wrap p-hospitalFlow__item-wrap--long">
            <p class="p-hospitalFlow__item-title">入院支援</p>
            <div class="p-hospitalFlow__item-text-body">
              <p class="p-hospitalFlow__item-text p-hospitalFlow__item-text--list">・入退院支援センターで入院に関する説明があります。
              <p class="p-hospitalFlow__item-text p-hospitalFlow__item-text--list">・入院のための検査などを行うため、複数回来院していただく場合があります。
              <p class="p-hospitalFlow__item-text p-hospitalFlow__item-text--list">・入院前から医療費や介護の相談を受けることもできます。
              </p>
            </div>
          </div>
        </li>
        <li class="p-hospitalFlow__item">
          <div class="p-hospitalFlow__item-wrap">
            <p class="p-hospitalFlow__item-title p-hospitalFlow__item-title--long">入院日・来院時間のお知らせ</p>
            <div class="p-hospitalFlow__item-text-body">
              <p class="p-hospitalFlow__item-text">入院日時の変更や取り消しをされる場合は<span
                  class="p-hospitalFlow__item-text-pink">お早めに診療科まで電話で</span>ご連絡ください。</p>
            </div>
          </div>
        </li>
        <li class="p-hospitalFlow__item">
          <div class="p-hospitalFlow__item-wrap p-hospitalFlow__item-wrap--long">
            <p class="p-hospitalFlow__item-title">入院の準備</p>
            <div class="p-hospitalFlow__item-text-body">
              <p class="p-hospitalFlow__item-text">入院される方は、入院当日までに<span
                  class="p-hospitalFlow__item-text-pink">必要書類</span>と<span
                  class="p-hospitalFlow__item-text-pink">入院生活で必要なもの</span>をご用意ください。</p>
              <p class="p-hospitalFlow__item-text">＜入院生活で必要なもの＞
              </p>
              <p class="p-hospitalFlow__item-text">洗面・入浴用品／食事用品（コップ、ふきんなど）／日用品／お薬・飲み物／パジャマ、<br>
                下着など、履物（すべりにくい安全で音の静かなもの）</p>
            </div>
          </div>
        </li>
        <li class="p-hospitalFlow__item">
          <div class="p-hospitalFlow__item-wrap p-hospitalFlow__item-wrap--last">
            <p class="p-hospitalFlow__item-title">入院当日</p>
            <div class="p-hospitalFlow__item-text-body">
              <p class="p-hospitalFlow__item-text">入院時には原則患者さまのご家族が同行してください。手続きには下記のものをご用意ください。</p>
              <div class="p-hospitalFlow__item-text-contents">
                <p class="p-hospitalFlow__item-text p-hospitalFlow__item-text--list">・健康保険証・老人医療受給証・印鑑
                <p class="p-hospitalFlow__item-text p-hospitalFlow__item-text--list">
                  ・入院証書(患者さま本人・保証人・連帯保証人それぞれが自署、捺印したもの)

                <p class="p-hospitalFlow__item-text p-hospitalFlow__item-text--list"> ・入院保証金(50,000円)

                </p>
                <p class="p-hospitalFlow__item-text p-hospitalFlow__item-text--last">
                  ※入院保証金と引き換えに保証金預り証をお渡ししますので、退院時まで大切に保管してください。</p>
              </div>
            </div>
          </div>
        </li>
      </ol>
    </div>
  </div>
</section>


<section id="hospital-caution" class="p-hospital-caution l-hospital-caution">
  <div class="p-hospital-caution__inner l-inner">
    <h3 class="p-hospital-caution__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--pink"></span>
      入院中の注意事項
    </h3>
    <div class="p-hospital-caution__content">
      <ul class="p-hospital-caution__list">
        <li class="p-hospital-caution__item">
          <p class="p-hospital-caution__text p-hospital-caution__text--list">・診断書・証明書等が必要な場合は1階窓口にお申し出ください。
          </p>
        </li>
        <li class="p-hospital-caution__item">
          <p class="p-hospital-caution__text p-hospital-caution__text--list">
            ・ラジオ／テレビの音は他の患者さまの迷惑にならないように注意してください。<br>消灯(午後9:00)以降の視聴はできません。
          </p>
        </li>
        <li class="p-hospital-caution__item">
          <p class="p-hospital-caution__text p-hospital-caution__text--list">
            ・当院は全館禁煙です。万一、火災、地震などの非常事態が発生した医師、看護師、職員の指示に従ってください。
          </p>
        </li>
        <li class="p-hospital-caution__item">
          <p class="p-hospital-caution__text p-hospital-caution__text--list">・諸費用につきましては、会計窓口にてご確認ください。
          </p>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="p-hospital-cost l-hospital-cost">
  <div class="p-hospital-cost__inner l-inner">
    <h3 class="p-hospital-cost__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--pink"></span>
      入院費用
    </h3>
    <div class="p-hospital-cost__content">
      <ul class="p-hospital-cost__list">
        <li class="p-hospital-cost__item">
          <p class="p-hospital-cost__text p-hospital-cost__text--list">
            ・入院費は月末締めで、<span class="p-hospitalFlow__item-text-pink">翌月10日</span>に請求書が発行されますので、<span
              class="p-hospitalFlow__item-text-pink">会計窓口</span>または<span
              class="p-hospitalFlow__item-text-pink">口座振り込み</span>にてお支払いください。
          </p>
        </li>
      </ul>
    </div>
  </div>
</section>

<section id="hospital-discharge" class="p-hospital-discharge l-hospital-discharge">
  <div class="p-hospital-discharge__inner l-inner">
    <h3 class="p-hospital-discharge__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--pink"></span>
      退院手続
    </h3>

    <div class="p-hospital-discharge__content">
      <ul class="p-hospital-discharge__list">
        <li class="p-hospital-discharge__item">
          <p class="p-hospital-discharge__text p-hospital-discharge__text--list">・退院時期は医師が決定します。

          </p>
        </li>
        <li class="p-hospital-discharge__item">
          <p class="p-hospital-discharge__text p-hospital-discharge__text--list">　退院時には保証金預り証をお持ちの上、1階会計窓口で精算してください。

          </p>
        </li>
        <li class="p-hospital-discharge__item">
          <p class="p-hospital-discharge__text p-hospital-discharge__text--list">・日曜・祝日は、原則として退院の手続きはおこなっておりません。
          </p>
        </li>
      </ul>
    </div>
  </div>
</section>


<section id="visit" class="p-visit l-visit">
  <div class="p-visit__inner l-inner">
    <h3 class="p-visit__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--orange"></span>
      面会案内
    </h3>

    <!-- 面会時間テーブル -->
    <div class="p-visit__tableWrap">
      <div class="p-visit__table-inner">
        <table class="p-visit__table">
          <thead>
            <tr>
              <th colspan="2" class="p-visit__thead">ご面会時間</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="p-visit__label">月〜金・土曜日</th>
              <td class="p-visit__time">14:00〜16:00の間／10分間</td>
            </tr>
            <tr>
              <th scope="row" class="p-visit__label">日曜日・祝日</th>
              <td class="p-visit__time">14:00〜16:00の間／10分間</td>
            </tr>
          </tbody>
        </table>
        <p class="p-visit__note">
          ※上記時間以外は許可を得た場合を除いて面会はできません。
        </p>
      </div>
    </div>
    <div class="p-visit__card">
      <div class="p-visit__card-wrapper">
        <div class="p-visit__card-content">
          <p class="p-visit__lead">
            ご面会の際は受付にて、<br class="u-mobile">面会のお手続きをお願いいたします。
          </p>
          <div class="p-visit__text">
            <p>
              ご面会できる方は1親等もしくは兄弟姉妹かつ、<br class="u-desktop">
              12歳以上の方（1回につき2名まで）に限定させていただきます。<br>
              多人数および、お子さま（12歳以下）での面会はご遠慮ください。<br>
              入院患者さまの安全をお守りするため、ご協力をお願いいたします。
            </p>

            <p class="p-visit__lead p-visit__lead--center">
              入院中は原則、付き添いはできません。
            </p>

            <p class="p-visit__text-last">
              ただし、患者さまの症状やご家族のご希望により、<br class="u-desktop">
              医師が必要と認めた場合にかぎりご家族の付き添いが認められます。
            </p>
          </div>
        </div>
      </div>
      <div class="p-visit__caution">
        <div class="p-visit__caution-wrapper">
          <div class="p-visit__caution-content">
            <h4 id="visit-caution-ttl" class="p-visit__cautionTtl">＜面会時のご注意事項＞</h4>
            <ul class="p-visit__list">
              <li>・面会をされる患者さま、または同室の患者さまの状態によっては面会をお断りさせていただくことがございます。<br>
                また、国内及び当院の感染状況やルールをお守りいただけない等の場合も面会を中止させていただく場合がございます。</li>
              <li>・感染防止のため、咳（せき）や発熱など風邪の症状や体調の悪い症状のある方は、感染予防のため面会はご遠慮ください。</li>
              <li>・敷地内／施設内は全面禁煙としております。</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>