<?php

/**
 * Template Name: 診療科一覧（departmentアーカイブ）
 */
get_header();
?>
<?php get_template_part('parts/header-bg') ?>
<section class="p-department l-department js-header-height">
  <div class="p-department__inner l-inner">
    <div class="p-department__heading">
      <span class="p-department__icon">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/stethoscope-icon.svg"
          alt="診療科アイコン">
      </span>
      <h1 class="p-department__title">診療科・部門</h1>
    </div>

    <!-- 診療科セクション -->
    <div class="p-department__nav">
      <div class="p-department__section-title">＜診療科＞</div>
      <div class="p-department__nav-inner">
        <ul class="p-department__list">
          <?php
          // 診療科の一覧
          $departments = [
            ['slug' => 'general-medicine',  'label' => '内科・総合診療科'],
            ['slug' => 'orthopedics',       'label' => '整形外科'],
            ['slug' => 'psychosomatic',     'label' => '心療内科'],
            ['slug' => 'surgery',           'label' => '外科'],
            ['slug' => 'nephrology',        'label' => '腎臓内科/透析'],
          ];

          foreach ($departments as $item) {
            $post = get_page_by_path($item['slug'], OBJECT, 'department');
            $url = $post ? get_permalink($post) : '#';
            $title = ($post ? get_the_title($post) : '') ?: $item['label'];
            echo '<li class="p-department__item">
              <a href="' . esc_url($url) . '">' .
              esc_html($title) . '<span class="p-department__arr"></span>
              </a>
            </li>';
          }
          ?>
        </ul>
      </div>
    </div>

    <!-- 各部門セクション -->
    <div class="p-department__nav">
      <div class="p-department__section-title">＜各部門＞</div>
      <div class="p-department__nav-inner">
        <ul class="p-department__list">
          <?php
          // 各部門の一覧（each-departmentページへのアンカーリンク）
          $each_department_url = home_url('/each-department');
          $divisions = [
            ['id' => 'nursing',             'label' => '看護部'],
            ['id' => 'radiology',           'label' => '放射線部'],
            ['id' => 'clinical-engineering', 'label' => '臨床工学部'],
            ['id' => 'rehabilitation',      'label' => 'リハビリテーション科'],
            ['id' => 'pharmacy',            'label' => '薬剤科'],
            ['id' => 'nutrition',           'label' => '栄養科'],
            ['id' => 'medical-affairs',     'label' => '医事課'],
          ];

          foreach ($divisions as $item) {
            echo '<li class="p-department__item">
              <a href="' . esc_url($each_department_url . '#' . $item['id']) . '">' .
              esc_html($item['label']) . '<span class="p-department__arr"></span>
              </a>
            </li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="p-outpatient-service l-outpatient-service">
  <div class="p-outpatient-service__inner l-inner">
    <h2 class="p-outpatient-service__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--green"></span>
      外来診療受付時間
    </h2>
    <div class="p-outpatient-service__wrapper">
      <div class="p-outpatient-service__table-wrap">
        <table class="p-outpatient-service__table p-outpatient-service__table--green">
          <thead>
            <tr>
              <th class="p-outpatient-service__th-dept"></th>
              <th class="p-outpatient-service__th-time-header"></th>
              <th class="p-outpatient-service__th-day">月</th>
              <th class="p-outpatient-service__th-day">火</th>
              <th class="p-outpatient-service__th-day">水</th>
              <th class="p-outpatient-service__th-day">木</th>
              <th class="p-outpatient-service__th-day">金</th>
              <th class="p-outpatient-service__th-day">土</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $schedule_data = [
              [
                'name' => '内科・総合診療科',
                'slug' => 'general-medicine',
                'am' => [1, 1, 1, 1, 1, 1],
                'pm' => [1, 1, 1, 1, 1, 0],
              ],
              [
                'name' => '外　科',
                'slug' => 'surgery',
                'am' => [0, 0, 1, 0, 0, 0],
                'pm' => [0, 0, 0, 0, 0, 0],
              ],
              [
                'name' => '整形外科',
                'slug' => 'orthopedics',
                'am' => [0, 0, 0, 1, 0, 1],
                'pm' => [0, 0, 0, 1, 0, 0],
              ],
              [
                'name' => '心療内科',
                'slug' => 'psychosomatic',
                'am' => [1, 1, 0, 0, 0, 0],
                'pm' => [0, 0, 0, 0, 0, 0],
              ],
              [
                'name' => '腎臓内科/透析',
                'slug' => 'nephrology',
                'am' => [0, 0, 0, 0, 0, 0],
                'pm' => [0, 1, 0, 1, 0, 0],
              ],
            ];

            foreach ($schedule_data as $dept):
              $post = get_page_by_path($dept['slug'], OBJECT, 'department');
              $url = $post ? get_permalink($post) : '#';
            ?>
              <tr class="p-outpatient-service__tr-am">
                <th class="p-outpatient-service__th-name" rowspan="2">
                  <div class="p-outpatient-service__th-name-inner">
                    <span><?php echo esc_html($dept['name']); ?></span>
                    <a href="<?php echo esc_url($url); ?>" class="p-outpatient-service__detail-link p-outpatient-service__detail-link--green">
                      <span>詳細はこちら</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/green-arrow-right.svg" alt="" class="p-outpatient-service__detail-arrow">
                    </a>
                  </div>
                </th>
                <td class="p-outpatient-service__td-time">午前</td>
                <?php foreach ($dept['am'] as $available): ?>
                  <td class="p-outpatient-service__td-dot"><?php if ($available): ?><span class="p-outpatient-service__dot p-outpatient-service__dot--green"></span><?php endif; ?></td>
                <?php endforeach; ?>
              </tr>
              <tr class="p-outpatient-service__tr-pm">
                <td class="p-outpatient-service__td-time">午後</td>
                <?php foreach ($dept['pm'] as $available): ?>
                  <td class="p-outpatient-service__td-dot"><?php if ($available): ?><span class="p-outpatient-service__dot p-outpatient-service__dot--green"></span><?php endif; ?></td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="p-outpatient-service__info">
        <div class="p-outpatient-service__info-rows">
          <div class="p-outpatient-service__info-row">
            <span class="p-outpatient-service__info-label p-outpatient-service__info-label--green">受付時間</span>
            <span class="p-outpatient-service__info-text">午前 8:45〜11:45 ／ 午後13:45〜16:45</span>
          </div>
          <div class="p-outpatient-service__info-row">
            <span class="p-outpatient-service__info-label p-outpatient-service__info-label--green">診療時間</span>
            <span class="p-outpatient-service__info-text">午前 9:00〜12:00 ／ 午後14:00〜17:00</span>
            <span class="p-outpatient-service__info-note">※急患は随時受け付けています。</span>
          </div>
        </div>
        <p class="p-outpatient-service__caution">※緊急で受診を希望される方は、来院前に一度お電話でご相談下さい。</p>
        <!-- <p class="p-outpatient-service__tel p-outpatient-service__tel--green">
          <a href="tel:0364213724">TEL:03-6421-3724</a>
        </p> -->
      </div>
    </div>
  </div>
</section>

<section class="p-contact l-contact c-bird-bg">
  <div class="p-contact__inner p-contact__inner--green l-inner">
    <h2 class="p-contact__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--green"></span>
      お問い合わせ
    </h2>
    <div class="p-contact__box p-contact__box--green">
      <p class="p-contact__text">
        <span class="p-contact__text-label">代表電話</span>
        <a href="tel:0364213724" class="p-contact__tel p-contact__tel--green">03-6421-3724</a>
      </p>
      <p class="p-contact__desc">電話受付時間　<span>午前 9:00～12:00 ／ 午後14:00～17:00</span></p>
    </div>
  </div>
</section>

<?php get_footer(); ?>