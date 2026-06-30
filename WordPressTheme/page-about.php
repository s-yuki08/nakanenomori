<?php
/* Template Name: 当院について */
get_header();
get_template_part('parts/header-bg');
?>
<section id="about" class="p-about l-about js-header-height">
  <div class="p-about__inner l-inner">
    <div class="p-about__wrapper">
      <div class="p-about__left">
        <div class="p-about__headline">
          <h1 class="p-about__title">当院について</h1>
        </div>
        <nav class="p-about__nav">
          <ul class="p-about__list">
            <li class="p-about__item">
              <a href="#chairman">
                <span>理事長・院長あいさつ</span>
                <span class="p-about__arr"></span>
              </a>
            </li>
            <li class="p-about__item">
              <a href="#mission">
                <span>私たちの使命</span>
                <span class="p-about__arr"></span>
              </a>
            </li>
            <li class="p-about__item">
              <a href="#basicPolicy">
                <span>基本方針</span>
                <span class="p-about__arr"></span>
              </a>
            </li>
            <li class="p-about__item">
              <a href="#facility">
                <span>院内・施設のご紹介</span>
                <span class="p-about__arr"></span>
              </a>
            </li>
            <li class="p-about__item">
              <a href="#staff">
                <span>診療科・部門紹介</span>
                <span class="p-about__arr"></span>
              </a>
            </li>
            <li class="p-about__item">
              <a href="#access">
                <span>交通アクセス</span>
                <span class="p-about__arr"></span>
              </a>
            </li>
            <li class="p-about__item">
              <a href="#affiliation">
                <span>関連病院</span>
                <span class="p-about__arr"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="p-about__right">
        <div class="p-about__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about_image.webp" alt="当院について">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="chairman" class="p-director l-director">
  <div class="p-director__inner l-inner">
    <h2 class="p-director__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      理事長あいさつ
    </h2>
    <div class="p-director__wrapper">
      <div class="p-director__body">
        <p class="p-director__text">
          このたびは、医療法人社団爽玄会 なかねの森病院のホームページをご覧いただき、ありがとうございます。<br>
          理事長の奈良 大と申します。
        </p>
        <p class="p-director__text">&emsp;当院は2024年3月22日の開院以来、その名のとおり「森」のように、地域の皆さまにとって心とからだがそっと癒される存在でありたいと願い、スタッフ一同歩みを進めてまいりました。木々が季節ごとに姿を変えながらも、そこに集う人や生き物を静かに受けとめるように、私たちもまた、どのような不安や悩みも安心して託していただける場所でありたいと考えています。</p>
        <p class="p-director__text">&emsp;医療は、検査や治療だけで完結するものではありません。病気の背景には、生活環境やお仕事、ご家族の状況など、さまざまな要素が複雑に絡み合っています。当院では、患者さんお一人おひとりの人生の物語に耳を傾けながら、医師・看護師・リハビリスタッフ・地域連携担当・事務職員がチームとなって支える「顔の見える医療」を大切にしています。</p>
        <p class="p-director__text">&emsp;また、いつでも気軽に相談できる「かかりつけ医」「かかりつけ病院」としての役割を果たすことが、なかねの森病院の重要な使命です。体調がすぐれないときだけでなく、持病の管理や健康維持、介護や在宅療養に関するご相談など、日々の暮らしの中で気になることがあれば、まずは当院にご相談ください。必要に応じて、専門医療機関や地域の介護・福祉サービスとも連携しながら、切れ目のないサポートを行ってまいります。</p>
      </div>
    </div>
    <div class="p-director__wrapper p-director__wrapper--bottom">
      <div class="p-director__body">
        <p class="p-director__text">&emsp;今後は、病気の「治療」にとどまらず、「予防」や「未病」の段階から健康づくりを支える活動にも、いっそう力を入れてまいります。地域の皆さまに向けた健康教室や勉強会の開催、多職種による相談窓口の充実などを通じて、病院に来られる方だけでなく、そのご家族や支えておられる方々も含めて支援できる体制を整えてまいります。</p>
        <p class="p-director__text">&emsp;「ここに来るとほっとする」「この病院が地域にあってよかった」と思っていただけるよう、私たちは、患者さんとご家族の尊厳とお気持ちに寄り添いながら、安全で質の高い医療の提供に努めてまいります。そして、開院の原点である“癒しの森”という思いを大切に、地域に根差した病院として、一歩一歩着実に成長を続けていく所存です。</p>
        <p class="p-director__text">&emsp;今後とも、なかねの森病院をどうぞよろしくお願い申し上げます。</p>
      </div>
      <div class="p-director__image-wrapper">
        <div class="p-director__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about_chairman.webp" alt="理事長あいさつ">
        </div>
        <div class="p-director__cap">
          <p class="p-director__cap-text">医療法人社団爽玄会 なかねの森病院</p>
          <p class="p-director__name">奈良　大 <span class="p-director__kana">（なら だい）</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="director" class="p-director l-director">
  <div class="p-director__inner l-inner">
    <h2 class="p-director__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      院長あいさつ
    </h2>
    <div class="p-director__wrapper">
      <div class="p-director__body">
        <p class="p-director__text">
          私たちは、これまで目黒区内で地域住民に愛される医療を<br class="u-desktop">長年行ってきました。<br>
          そこで得た想いを新たに、<br class="u-desktop">「中根の森に根ざすやさしさを、心と体に。<br class="u-desktop">
          笑顔が育つ、地域の“かかりつけの森” 」をめざして、<br class="u-desktop">
          “なかねの森病院”を創設しました。<br>
          すべてを包み込み、見守る“森”となれるよう、<br class="u-desktop">
          最善そして最新の医療と看護を目指します。<br>
          温かさとやる気あふれるすべての医療スタッフが、<br class="u-desktop">
          “なかねの森”となってチーム医療を行います。
        </p>
      </div>
      <div class="p-director__image-wrapper">
        <div class="p-director__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about_doctor.webp" alt="院長あいさつ">
        </div>
        <div class="p-director__cap">
          <p>なかねの森病院　病院長</p>
          <p class="p-director__name">
            奈良　圭之輔 <span class="p-director__kana">（なら けいのすけ）</span>
          </p>
        </div>
      </div>
    </div>
    <div id="vision" class="p-director__content">
      <h3 class="p-director__pill">理念</h3>
      <p class="p-director__pill-text">
        こころとからだに寄り添い、笑顔あふれる毎日をともに育む。<br class="u-desktop">
        私たちは、地域の皆さまの安心と健康を大切にし、あたたかな医療を提供します。
      </p>
    </div>
  </div>
</section>

<section id="mission" class="p-mission l-mission">
  <div class="p-mission__inner l-inner">
    <h2 class="p-mission__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      私たちの使命
    </h2>
    <div class="p-mission__content">
      <p class="p-mission__text">
        私たちは、内科・整形外科・心療内科が力を合わせて、子どもからご高齢の方まで、<br class="u-desktop">
        幅広い年代の方のさまざまな症状や悩みに寄り添う医療をめざします。<br>
        からだのことはもちろん、こころの不安にも丁寧に向き合い、<br class="u-desktop">
        地域の皆さまが毎日を安心して過ごせるようお手伝いしてまいります。
      </p>
    </div>
  </div>
</section>

<section id="basicPolicy" class="p-basicPolicy l-basicPolicy">
  <div class="p-basicPolicy__inner l-inner">
    <h2 class="p-basicPolicy__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      基本方針
    </h2>
    <div class="p-basicPolicy__content">
      <ol class="p-basicPolicy__list">
        <li class="p-basicPolicy__item">
          <div class="p-basicPolicy__box">
            <h3 class="p-basicPolicy__head">やさしく、わかりやすい医療を</h3>
            <p class="p-basicPolicy__desc">患者さまの気持ちに寄り添い、
              丁寧であたたかい説明と対応を大切にします。</p>
          </div>
        </li>
        <li class="p-basicPolicy__item">
          <div class="p-basicPolicy__box">
            <h3 class="p-basicPolicy__head">力を合わせたチーム医療</h3>
            <p class="p-basicPolicy__desc">内科・整形外科・心療内科が連携し、こころとからだを一緒に支える診療を行います。</p>
          </div>
        </li>
        <li class="p-basicPolicy__item">
          <div class="p-basicPolicy__num"></div>
          <div class="p-basicPolicy__box">
            <h3 class="p-basicPolicy__head">地域とともに歩む医療</h3>
            <p class="p-basicPolicy__desc">病気の予防から治療、リハビリ、心のケアまで、地域の健康づくりをお手伝いします。</p>
          </div>
        </li>

        <li class="p-basicPolicy__item">
          <div class="p-basicPolicy__num"></div>
          <div class="p-basicPolicy__box">
            <h3 class="p-basicPolicy__head">高齢の方にも安心を</h3>
            <p class="p-basicPolicy__desc">年齢に合わせたきめ細やかな対応で、いつまでも自分らしく過ごせるようサポートします。</p>
          </div>
        </li>

        <li class="p-basicPolicy__item">
          <div class="p-basicPolicy__num"></div>
          <div class="p-basicPolicy__box">
            <h3 class="p-basicPolicy__head">こころの不安にもそっと寄り添う</h3>
            <p class="p-basicPolicy__desc">ちょっとした不安や悩みごとも大切に受けとめ、必要に応じて専門的なサポートを行います。</p>
          </div>
        </li>
      </ol>
    </div>
  </div>
</section>

<section id="facility" class="p-facility l-facility">
  <div class="p-facility__inner l-inner">
    <h2 class="p-facility__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      <span class="p-facility__dot"></span>
      院内・施設のご紹介
    </h2>

    <?php
    // 固定ページID取得（確実にそのページのACFを読みに行く）
    $post_id = get_queried_object_id();

    // ACFで登録された画像を配列化（最大9枚、未入力はスキップ）
    $images = [];
    for ($i = 1; $i <= 12; $i++) {
      $img = get_field('facility_img_' . $i, $post_id);
      if (empty($img)) continue;

      // 返り値の型（ID/配列/URL）に対応
      if (is_numeric($img)) {
        $img_id = $img;
      } elseif (is_array($img) && isset($img['ID'])) {
        $img_id = $img['ID'];
      } else {
        $img_id = attachment_url_to_postid($img);
      }

      if ($img_id) {
        $alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
        if ($alt === '' || $alt === null) $alt = get_the_title($img_id);
        $src = wp_get_attachment_image_url($img_id, 'large');
        $images[] = [
          'src' => $src,
          'alt' => $alt,
        ];
      }
    }
    ?>

    <?php if (!empty($images)) : ?>
      <div class="p-facility__gallery">
        <ul class="p-facility__list">
          <?php foreach ($images as $image) : ?>
            <li class="p-facility__item">
              <img src="<?php echo esc_url($image['src']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <p class="p-facility__item-text"><?php echo esc_html($image['alt']); ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</section>


<section id="staff" class="p-staff l-staff">
  <div class="p-staff__inner l-inner">
    <h2 class="p-staff__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      診療科・部門紹介
    </h2>

    <div class="p-department-link__inner l-single-department-inner">
      <!-- 診療科セクション -->
      <div class="p-department__nav p-department__nav--blue">
        <div class="p-department__section-title p-department__section-title--blue">＜診療科＞</div>
        <div class="p-department__nav-inner">
          <ul class="p-department__list">
            <?php
            // 診療科の一覧
            $departments = [
              ['slug' => 'general-medicine', 'label' => '内科・総合診療科'],
              ['slug' => 'orthopedics', 'label' => '整形外科'],
              ['slug' => 'psychosomatic', 'label' => '心療内科'],
              ['slug' => 'surgery', 'label' => '外科'],
              ['slug' => 'nephrology', 'label' => '腎臓内科/透析'],
            ];

            foreach ($departments as $item) {
              $post = get_page_by_path($item['slug'], OBJECT, 'department');
              $url = $post ? get_permalink($post) : '#';
              $title = ($post ? get_the_title($post) : '') ?: $item['label'];

              echo '<li class="p-department__item">
                <a href="' . esc_url($url) . '">' .
                esc_html($title) .
                '<span class="p-department__arr"></span>
                </a>
              </li>';
            }
            ?>
          </ul>
        </div>
      </div>

      <!-- 各部門セクション -->
      <div class="p-department__nav p-department__nav--blue">
        <div class="p-department__section-title p-department__section-title--blue">＜各部門＞</div>
        <div class="p-department__nav-inner">
          <ul class="p-department__list">
            <?php
            // 各部門の一覧（each-departmentページへのアンカーリンク）
            $each_department_url = home_url('/each-department');
            $divisions = [
              ['id' => 'nursing', 'label' => '看護部'],
              ['id' => 'rehabilitation', 'label' => 'リハビリテーション科'],
              ['id' => 'clinical-engineering', 'label' => '臨床工学部'],
              ['id' => 'radiology', 'label' => '放射線部'],
              ['id' => 'pharmacy', 'label' => '薬剤科'],
              ['id' => 'nutrition', 'label' => '栄養科'],
              ['id' => 'medical-affairs', 'label' => '医事課'],
            ];

            foreach ($divisions as $item) {
              echo '<li class="p-department__item">
                <a href="' . esc_url($each_department_url . '#' . $item['id']) . '">' .
                esc_html($item['label']) .
                '<span class="p-department__arr"></span>
                </a>
              </li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="access" class="p-access l-access">
  <div class="p-access__inner l-inner">
    <h2 class="p-access__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      交通アクセス
    </h2>
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
              <span><strong>電車でお越しの方</strong><br>東急東横線「都立大学駅」より徒歩5分</span>
            </li>
            <li class="p-access__item">
              <span class="p-access__bullet"></span>
              <span><strong>バスでお越しの方</strong><br>東急バス&nbsp;多摩01系統<br>「中根二丁目」バス停より徒歩2分</span>
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

<section id="affiliation" class="p-affiliation l-affiliation">
  <div class="p-affiliation__inner l-inner">
    <h2 class="p-affiliation__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      関連病院
    </h2>
    <div class="p-partner__wrapper">
      <ul class="p-partner__list">
        <!-- 1段目 -->
        <li class="p-partner__item">
          <a href="https://www.showa-u.ac.jp/SUH/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_01.webp" alt="昭和医科大学病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://tkh.kkr.or.jp/index.html" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_02.webp" alt="東京共済病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://hospinfo.tokyo-med.ac.jp/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_03.webp" alt="東京医科大学病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://hosp.juntendo.ac.jp/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_04.webp" alt="順天堂大学病院"></a>
        </li>
        <!-- 2段目 -->
        <li class="p-partner__item">
          <a href="https://himonya-hosp.com/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_05.webp" alt="碑文谷病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://www.tmhp.jp/ebara/index.html" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_06.webp" alt="東京都立荏原病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://www.tmhp.jp/hiroo/index.html" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_07.webp" alt="東京都立広尾病院"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://ike-naka.com/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_08.webp"
              alt="池田仲通りクリニック"></a>
        </li>
        <li class="p-partner__item p-partner__item--small">
          <a href="https://www.beni-dental.com/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_09.webp"
              alt="BENI DENTAL CLINIC"></a>
        </li>
        <li class="p-partner__item">
          <a href="https://www.kyorin-u.ac.jp/hospital/suginami/" target="_blank"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/common/partner_10.webp"
              alt=""></a>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>