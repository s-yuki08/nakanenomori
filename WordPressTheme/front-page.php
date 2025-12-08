<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$department = esc_url(home_url('/department/'));
$outpatient = esc_url(home_url('/outpatient/'));
$faq_contact = esc_url(home_url('/faq-contact/'));
$hospitalization = esc_url(home_url('/hospitalization/'));
$recruit = esc_url(home_url('/recruit/'));
$about = esc_url(home_url('/about/'));
$staff = esc_url(home_url('/staff/'));
$checkup = esc_url(home_url('/checkup/'));
$news = esc_url(home_url('/news/'));
$visit = esc_url(home_url('/hospitalization/#visit'));
?>
<!-- mv -->
<div class="p-mv js-header-height">
  <div class="p-mv__inner">
    <div class="p-mv__swiper swiper js-mv-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="swiper-img">
            <picture>
              <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/fv_pc.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fv_sp.png" alt="メインビジュアル" />
            </picture>
            <div class="p-mv__heading">
              <h2 class="p-mv__title">何科を受診すればいい？<br>迷ったり困ったりしたときは、<br>まず、「総合診療科」を<br>ご予約ください。</h2>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-img">
            <picture>
              <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/fv_pc_01.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fv_sp_01.png" alt="メインビジュアル" />
            </picture>
            <div class="p-mv__heading p-mv__heading--sp">
              <h2 class="p-mv__title">小さな悩みから<br>大きな不安まで<br>あなたに寄り添う医療を<br>届けます。</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-mv__btn u-desktop">
      <div class="p-mv__btn-inner l-inner">
        <ul class="p-mv__btn-list">
          <li class="p-mv__btn-item">
            <a href="<?php echo $outpatient; ?>" class="p-mv__btn-link">
              <span class="p-mv__btn-text">外来のご案内</span>
              <span class="p-mv__btn-arrow">
              </span>
            </a>
          </li>
          <li class="p-mv__btn-item">
            <a href="<?php echo $department; ?>" class="p-mv__btn-link p-mv__btn-link--green">
              <span class="p-mv__btn-text p-mv__btn-text--green">診療科・部門紹介</span>
              <span class="p-mv__btn-arrow p-mv__btn-arrow--green">
              </span>
            </a>
          </li>
          <li class="p-mv__btn-item">
            <a href="<?php echo $recruit; ?>" class="p-mv__btn-link p-mv__btn-link--blue">
              <span class="p-mv__btn-text p-mv__btn-text--blue">検診のご案内</span>
              <span class="p-mv__btn-arrow p-mv__btn-arrow--blue">
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- lead -->
<section class="p-lead l-lead">
  <div class="p-lead__inner l-inner">
    <!-- accordion -->
    <div class="p-accordion-sp l-accordion-sp u-mobile">
      <div class="p-accordion-sp-inner">
        <div class="p-accordion-sp-heading" id="guide" role="navigation" aria-label="各種ご案内">
          <button class="p-accordion-sp__trigger" id="guide-trigger" aria-expanded="false" aria-controls="guide-panel">
            <span class="p-accordion-sp__title">各種ご案内</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow_top.svg" alt="アイコン"
              class="p-accordion-sp__chev">
          </button>

          <div class="p-accordion-sp__panel" id="guide-panel" role="region" aria-labelledby="guide-trigger">
            <ul class="p-accordion-sp__list" role="list">
              <li class="p-accordion-sp__item">
                <a href="<?php echo $outpatient; ?>" class="p-accordion-sp__link">
                  <span class="p-accordion-sp__text">はじめて来院される方へ</span>
                </a>
              </li>
              <li class="p-accordion-sp__item">
                <a href="<?php echo $department; ?>" class="p-accordion-sp__link p-accordion-sp__link--green">
                  <span class="p-accordion-sp__text p-accordion-sp__text--green">診療科のご案内</span>
                </a>
              </li>
              <li class="p-accordion-sp__item">
                <a href="<?php echo $recruit; ?>" class="p-accordion-sp__link p-accordion-sp__link--blue">
                  <span class="p-accordion-sp__text p-accordion-sp__text--blue">求人情報</span>
                </a>
              </li>
              <li class="p-accordion-sp__item">
                <a href="<?php echo $hospitalization; ?>" class="p-accordion-sp__link p-accordion-sp__link--pink">
                  <span class="p-accordion-sp__text p-accordion-sp__text--pink">入院の方</span>
                </a>
              </li>
              <li class="p-accordion-sp__item">
                <a href="<?php echo $visit; ?>" class="p-accordion-sp__link p-accordion-sp__link--orange">
                  <span class="p-accordion-sp__text p-accordion-sp__text--orange">面会の方</span>
                </a>
              </li>
              <li class="p-accordion-sp__item">
                <a href="<?php echo $checkup; ?>" class="p-accordion-sp__link p-accordion-sp__link--navy">
                  <span class="p-accordion-sp__text p-accordion-sp__text--navy">検診のご案内</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="p-lead__wrapper">
      <p class="p-lead__text">
        こころとからだに寄り添い、笑顔あふれる毎日をともに育む。<br>
        私たちは、地域の皆さまの安心と健康を大切にし、あたたかな医療を提供します。<br>
        何科を受診すればいい？迷ったり困ったりしたときは、<br class="u-desktop">
        お気軽に内科・総合診療科へご相談ください。
      </p>
    </div>
  </div>
  <div class="p-news l-news">
    <div class="p-news__inner l-inner">
      <div class="p-news__wrapper">
        <div class="p-news__heading">
          <h2 class="p-news__title">お知らせ</h2>
        </div>
        <div class="p-news__list">
          <?php
          // 最新投稿を1件取得
          $latest_news = new WP_Query([
            'post_type'      => 'post',     // カスタム投稿なら 'news'
            'posts_per_page' => 1,
            'no_found_rows'  => true
          ]);
          if ($latest_news->have_posts()) :
            while ($latest_news->have_posts()) : $latest_news->the_post();
          ?>
              <a href="<?php the_permalink(); ?>" class="p-news__item">
                <div class="p-news__meta">
                  <time class="p-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                  </time>
                  <p class="p-news__list-title"><?php the_title(); ?></p>
                </div>
              </a>
            <?php
            endwhile;
            wp_reset_postdata();
          else :
            ?>
            <p class="p-news__none">現在、お知らせはありません。</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="p-menu-link l-menu-link u-desktop">
    <div class="p-menu-link__inner l-inner">
      <div class="p-menu-link__box">
        <ul class="p-menu-link__items">
          <li class="p-menu-link__item">
            <a href="<?php echo $outpatient; ?>" class="p-menu-link__btn">
              <span class="p-menu-link__btn-text">はじめて<br>来院される方へ</span>
              <span class="p-menu-link__btn-arrow"></span>
            </a>
          </li>
          <li class="p-menu-link__item">
            <a href="<?php echo $department; ?>" class="p-menu-link__btn p-menu-link__btn--green">
              <span class="p-menu-link__btn-text p-menu-link__btn-text--green">診療科のご案内</span>
              <span class="p-menu-link__btn-arrow p-menu-link__btn-arrow--green">
              </span>
            </a>
          </li>
          <li class="p-menu-link__item">
            <a href="<?php echo $recruit; ?>" class="p-menu-link__btn p-menu-link__btn--blue">
              <span class="p-menu-link__btn-text p-menu-link__btn-text--blue">求人情報</span>
              <span class="p-menu-link__btn-arrow p-menu-link__btn-arrow--blue">
              </span>
            </a>
          </li>
          <li class="p-menu-link__item">
            <a href="<?php echo $hospitalization; ?>" class="p-menu-link__btn p-menu-link__btn--pink">
              <span class="p-menu-link__btn-text p-menu-link__btn-text--pink">入院の方</span>
              <span class="p-menu-link__btn-arrow p-menu-link__btn-arrow--pink"></span>
            </a>
          </li>
          <li class="p-menu-link__item">
            <a href="<?php echo $visit; ?>" class="p-menu-link__btn p-menu-link__btn--orange">
              <span class="p-menu-link__btn-text p-menu-link__btn-text--orange">面会の方</span>
              <span class="p-menu-link__btn-arrow p-menu-link__btn-arrow--orange">
              </span>
            </a>
          </li>
          <li class="p-menu-link__item">
            <a href="<?php echo $checkup; ?>" class="p-menu-link__btn p-menu-link__btn--navy">
              <span class="p-menu-link__btn-text p-menu-link__btn-text--navy">検診のご案内</span>
              <span class="p-menu-link__btn-arrow p-menu-link__btn-arrow--navy">
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="p-greeting l-greeting">
    <div class="p-greeting__inner l-inner">
      <div class="p-greeting__wrapper">
        <div class="p-greeting__contents">
          <h2 class="p-greeting__title">ごあいさつ</h2>
          <p class="p-greeting__text">
            私たちは、これまで目黒区内で地域住民に<br class="u-mobile">愛される<br class="u-desktop">医療を長年行ってきました。<br>そこで得た想いを新たに、<br
              class="u-mobile">「中根の森に根ざすやさしさを、心と体に。<br class="u-desktop">笑顔が育つ、地域の“かかりつけの森”」をめざして、<br
              class="u-desktop">“なかねの森病院”を創設しました。<br>すべてを包み込み、見守る“森”となれるよう、<br
              class="u-desktop">最善そして最新の医療と看護を目指します。<br>温かさとやる気あふれる<br
              class="u-mobile">国内トップクラスの先端医療を担う<br>医師と看護師と理学療法士が、<br>“なかねの森”となってチーム医療を行います。
          </p>
        </div>
        <div class="p-greeting__image-contents">
          <div class="p-greeting__image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/about_doctor.png" alt="院長先生">
          </div>
          <p class="p-greeting__director">なかねの森病院 病院長
          </p>
          <p class="p-greeting__name">奈良 圭之輔(なら けいのすけ)
          </p>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- hours -->
<section class="p-hours l-hours">
  <div class="p-hours__inner">
    <div class="p-hours__heading">
      <h2 class="p-hours__title">診療時間</h2>
    </div>
    <div class="p-hours__wrapper">
      <div class="p-hours__box">
        <table class="p-hours__table p-hours__table--pc">
          <thead class="p-hours__head">
            <tr>
              <th class="p-hours__label p-hours__label--blank"></th>
              <th class="p-hours__headCell">月</th>
              <th class="p-hours__headCell">火</th>
              <th class="p-hours__headCell">水</th>
              <th class="p-hours__headCell">木</th>
              <th class="p-hours__headCell">金</th>
              <th class="p-hours__headCell">土</th>
            </tr>
          </thead>
          <tbody class="p-hours__body">
            <tr>
              <th scope="row" class="p-hours__label">午前&nbsp;9:00〜12:00</th>
              <td class="p-hours__cell"><span class="p-hours__dot" aria-label="診療あり"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot" aria-label="診療あり"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot" aria-label="診療あり"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot" aria-label="診療あり"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot" aria-label="診療あり"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot" aria-label="診療あり"></span></td>
            </tr>
            <tr>
              <th scope="row" class="p-hours__label p-hours__label--last">午後&nbsp;14:00〜17:00</th>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dash" aria-hidden="true">—</span></td>
            </tr>
          </tbody>
        </table>

        <table class="p-hours__table p-hours__table--sp" aria-describedby="hours-ttl">
          <thead>
            <tr>
              <th class="p-hours__headBlank"></th>
              <th class="p-hours__head p-hours__head--am">
                <span class="p-hours__headLine1">午前</span>
                <span class="p-hours__headLine2">9:00〜12:00</span>
              </th>
              <th class="p-hours__head p-hours__head--pm">
                <span class="p-hours__headLine1">午後</span>
                <span class="p-hours__headLine2">14:00〜17:00</span>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="p-hours__day">月</th>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
            </tr>
            <tr>
              <th scope="row" class="p-hours__day">火</th>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
            </tr>
            <tr>
              <th scope="row" class="p-hours__day">水</th>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
            </tr>
            <tr>
              <th scope="row" class="p-hours__day">木</th>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
            </tr>
            <tr>
              <th scope="row" class="p-hours__day">金</th>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
            </tr>
            <tr>
              <th scope="row" class="p-hours__day">土</th>
              <td class="p-hours__cell"><span class="p-hours__dot"></span></td>
              <td class="p-hours__cell"><span class="p-hours__dash" aria-hidden="true">—</span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="p-hours__note-wrapper">
        <p class="p-hours__note">
          ※受付時間・診療時間は診療科によって異なります
        </p>
      </div>
    </div>
</section>

<!-- access -->
<section class="p-access l-access">
  <div class="p-access__inner l-inner">
    <h2 class="p-access__title">交通 アクセス</h2>
    <div class="p-access__wrapper">
      <div class="p-access__contents">
        <div class="p-access__map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.5566910992543!2d139.6743256755667!3d35.61400037260896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f5cf48a47681%3A0x37f3ff243398a9b4!2z44Gq44GL44Gt44Gu5qOu55eF6Zmi!5e0!3m2!1sja!2sjp!4v1760053480236!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="p-access__text">
          <address class="p-access__addr">
            〒152-0031<br>
            東京都目黒区中根2-7-20<br>
            中根公園すぐ
          </address>

          <ul class="p-access__list">
            <li class="p-access__item">
              <span class="p-access__bullet"></span>
              <span>電車でお越しの方<br>東急東横線「都立大学駅」より徒歩5分</span>
            </li>
            <li class="p-access__item">
              <span class="p-access__bullet"></span>
              <span>バスでお越しの方<br>東急バス&nbsp;多摩01系統<br>「中根二丁目」バス停より徒歩2分</span>
            </li>
          </ul>
          <div class="p-access__tel-wrapper">
            <p class="p-access__telLabel">お電話でのお問い合わせ</p>
            <p class="p-access__tel"><a href="tel:0364213724">03-6421-3724</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- partner -->
<section class="p-partner l-partner">
  <div class="p-partner__inner l-inner">
    <h2 class="p-partner__title">関連リンク</h2>
    <div class="p-partner__wrapper">
      <ul class="p-partner__list">
        <!-- 1段目 -->
        <li class="p-partner__item">
          <a href="https://www.showa-u.ac.jp/SUH/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_01.png" alt="昭和医科大学病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://tkh.kkr.or.jp/index.html" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_02.png" alt="東京共済病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://hospinfo.tokyo-med.ac.jp/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_03.png" alt="東京医科大学病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://hosp.juntendo.ac.jp/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_04.png" alt="順天堂大学病院"></a>
        </li>
        <!-- 2段目 -->
        <li class="p-partner__item">
          <a href="https://himonya-hosp.com/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_05.png" alt="碑文谷病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://www.tmhp.jp/ebara/index.html" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_06.png" alt="東京都立荏原病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://www.tmhp.jp/hiroo/index.html" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_07.png" alt="東京都立広尾病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://ike-naka.com/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_08.png"
              alt="池田仲通りクリニック"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://www.beni-dental.com/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_09.png"
              alt="BENI DENTAL CLINIC"></a>
        </li>
      </ul>
    </div>
  </div>
</section>


<?php get_footer(); ?>