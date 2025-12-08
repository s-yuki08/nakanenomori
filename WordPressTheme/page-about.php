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
          <h2 class="p-about__title">当院について</h2>
        </div>
        <nav class="p-about__nav">
          <ul class="p-about__list">
            <li class="p-about__item">
              <a href="#director">
                <span>院長あいさつと理念</span>
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
                <span>スタッフ紹介</span>
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about_image.png" alt="当院について">
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
          私たちは、これまで目黒区内で地域住民に愛される医療を長年行ってきました。<br>
          そこで得た想いを新たに、「中根の森に根ざすやさしさを、心と体に。<br>
          笑顔が育つ、地域の“かかりつけの森”」をめざして、<br class="u-desktop">
          “なかねの森病院”を創設しました。<br>
          すべてを包み込み、癒す“森”であるよう、<br>
          最新そして最善の医療と看護を目指します。<br>
          温かさとやる気あふれる国内トップクラスの先端医療を担う<br class="u-desktop">医師と看護師と理学療法士が、<br class="u-desktop">“なかねの森”となってチーム医療を行います。
        </p>
      </div>
      <div class="p-director__image-wrapper">
        <div class="p-director__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about_doctor.png" alt="院長あいさつ">
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
      $img = get_field('facility_img_' . $i, $post_id); // フィールド名は同じ形式で登録
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
    <?php else : ?>
    <!-- 未入力時のフォールバック表示 -->
    <div class="p-facility__gallery">
      <ul class="p-facility__list">
        <li class="p-facility__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy_01.png" alt="受付・待合室">
        </li>
        <li class="p-facility__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy_02.png" alt="受付・待合室">
        </li>
        <li class="p-facility__item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy_03.png" alt="受付・待合室">
        </li>
      </ul>
    </div>
    <?php endif; ?>
  </div>
</section>


<section id="staff" class="p-staff l-staff">
  <div class="p-staff__inner l-inner">
    <h2 class="p-staff__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--navy"></span>
      スタッフ紹介
    </h2>

    <div class="p-staff__nav">
      <div class="p-staff__nav-inner">
        <ul class="p-staff__list">
          <?php
          // 固定順（slugと診療科名）
          $departments = [
            ['slug' => 'general-medicine', 'label' => '総合診療科'],
            ['slug' => 'rheumatology', 'label' => 'リウマチ・膠原病内科'],
            ['slug' => 'rehabilitation', 'label' => 'リハビリテーション科'],
            ['slug' => 'internal-medicine', 'label' => '内科'],
            ['slug' => 'diabetology', 'label' => '糖尿病内科'],
            ['slug' => 'radiology', 'label' => '放射線科'],
            ['slug' => 'psychosomatic', 'label' => '心療内科'],
            ['slug' => 'oncology', 'label' => '腫瘍内科'],
            ['slug' => 'dialysis', 'label' => '透析'],
            ['slug' => 'nephrology', 'label' => '腎臓内科'],
            ['slug' => 'orthopedics', 'label' => '整形外科'],
            // ↓この2つだけ別ページにリンク
            ['slug' => 'nursing', 'label' => '看護部'],
            ['slug' => 'office-staff', 'label' => '事務スタッフ'],
          ];

          foreach ($departments as $dept) {
            // スタッフページ専用リンク
            if ($dept['slug'] === 'nursing') {
              $link = home_url('/staff/#nursing'); // スタッフページの看護部セクション
            } elseif ($dept['slug'] === 'office-staff') {
              $link = home_url('/staff/#office-staff'); // スタッフページの事務スタッフセクション
            } else {
              // 通常の診療科ページの医師紹介へ
              $post = get_page_by_path($dept['slug'], OBJECT, 'department');
              $link = ($post && $post->post_status === 'publish')
                ? get_permalink($post) . '#doctorIntro-ttl'
                : '';
            }

            if (!empty($link)) {
              echo '<li class="p-staff__item"><a href="' . esc_url($link) . '">' .
                    esc_html($dept['label']) .
                    '<span class="p-staff__arr"></span></a></li>';
            } else {
              // 非公開などの場合は非リンク表示
              echo '<li class="p-staff__item is-disabled"><span>' .
                    esc_html($dept['label']) .
                    '</span></li>';
            }
          }
          ?>
        </ul>
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
    <div class="p-affiliation__content">
      <div class="p-affiliation__table-wrap">
        <table class="p-affiliation__table">
          <thead>
            <tr>
              <th>医師名</th>
              <th>医院名</th>
              <th>診療科</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>吉村 清</td>
              <td>
                <a href="https://www.showa-u.ac.jp/SUH/" target="_blank">昭和医科大学 <span
                    class="p-affiliation__icon"></span></a>
              </td>
              <td>内科</td>
            </tr>
            <tr>
              <td>氏名</td>
              <td><a href="https://tkh.kkr.or.jp/index.html" target="_blank">東京共済病院 <span
                    class="p-affiliation__icon"></span></a></td>
              <td>内科</td>
            </tr>
            <tr>
              <td>氏名</td>
              <td><a href="https://hospinfo.tokyo-med.ac.jp/" target="_blank">東京医科大学病院 <span
                    class="p-affiliation__icon"></span></a></td>
              <td>内科</td>
            </tr>
            <tr>
              <td>氏名</td>
              <td><a href="https://hosp.juntendo.ac.jp/" target="_blank">順天堂大学医学部附属 順天堂医院 <span
                    class="p-affiliation__icon"></span></a></td>
              <td>内科</td>
            </tr>
            <tr>
              <td>氏名</td>
              <td><a href="https://www.tmhp.jp/ebara/index.html" target="_blank">東京都立荏原病院 <span
                    class="p-affiliation__icon"></span></a></td>
              <td>内科</td>
            </tr>
            <tr>
              <td>氏名</td>
              <td><a href="https://www.tmhp.jp/hiroo/index.html" target="_blank">東京都立広尾病院 <span
                    class="p-affiliation__icon"></span></a></td>
              <td>内科</td>
            </tr>
            <tr>
              <td>氏名</td>
              <td><a href="https://ike-naka.com/" target="_blank">池上仲通りクリニック <span
                    class="p-affiliation__icon"></span></a></td>
              <td>内科</td>
            </tr>
            <tr>
              <td>氏名</td>
              <td><a href="https://www.beni-dental.com/" target="_blank">紅デンタルクリニック <span
                    class="p-affiliation__icon"></span></a></td>
              <td>歯科</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>