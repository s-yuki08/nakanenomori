<?php
get_header();
get_template_part('parts/header-bg');

/**
 * ▼ ヘルパー：1..6の枠を配列化（未入力はスキップ）
 * $prefix 例）'nursing' / 'office'
 */
function nm_collect_staff($prefix){
  $items = [];
  for ($i=1; $i<=6; $i++) {
    $label   = get_field("{$prefix}{$i}_label");
    $name    = get_field("{$prefix}{$i}_name");
    $kana    = get_field("{$prefix}{$i}_kana");
    $message = get_field("{$prefix}{$i}_message"); // WYSIWYG
    $photo   = get_field("{$prefix}{$i}_photo");   // image(array) or id or url（return_format=array想定）

    // 氏名が無ければスキップ（空枠）
    if (!trim((string)$name)) continue;

    // 画像URL生成（return_format=arrayを想定。違う場合は分岐）
    $img_url = '';
    if (is_array($photo) && isset($photo['url'])) {
      $img_url = $photo['url'];
    } elseif (is_int($photo)) {
      $img_url = wp_get_attachment_image_url($photo, 'large');
    } elseif (is_string($photo) && filter_var($photo, FILTER_VALIDATE_URL)) {
      $img_url = $photo;
    }
    if (!$img_url) {
      // ダミー画像（テーマ内の任意パスに変更可）
      $img_url = get_template_directory_uri() . '/assets/images/common/fv_sp.png';
    }

    $items[] = [
      'label'   => (string)$label,
      'name'    => (string)$name,
      'kana'    => (string)$kana,
      'message' => (string)$message,
      'img'     => $img_url,
    ];
  }
  return $items;
}

// 看護部
$nursing_title = get_field('nursing_title') ?: '看護部';
$nursing_items = nm_collect_staff('nursing');

// 事務スタッフ
$office_title  = get_field('office_title') ?: '事務スタッフ';
$office_items  = nm_collect_staff('office');
?>

<?php if (!empty($nursing_items)) : ?>
<section id="nursing" class="p-nursing l-nursing js-header-height">
  <div class="p-nursing__inner l-inner">
    <h3 class="p-nursing__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--blue"></span><?php echo esc_html($nursing_title); ?>
    </h3>

    <!-- 看護師選択ボタン：ACFから自動生成 -->
    <div class="p-nursing__nav">
      <ul class="p-nursing__list" role="tablist" aria-label="看護師選択">
        <?php foreach ($nursing_items as $idx => $it): ?>
        <li class="p-nursing__item">
          <button class="p-nursing__btn<?php echo $idx===0?' is-active':''; ?>" type="button"
            data-target="#nurse-<?php echo $idx; ?>" role="tab" aria-controls="nurse-<?php echo $idx; ?>"
            aria-selected="<?php echo $idx===0?'true':'false'; ?>">
            <?php echo esc_html($it['name']); ?>
          </button>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- 各看護師プロフィール -->
    <div class="p-nursing__content">
      <?php foreach ($nursing_items as $idx => $it): ?>
      <div id="nurse-<?php echo $idx; ?>" class="p-nursing__profile" role="tabpanel"
        <?php if ($idx!==0) echo 'style="display:none"'; ?>>
        <div class="p-nursing__info">
          <?php if ($it['label']) : ?>
          <p class="p-nursing__label"><?php echo esc_html($it['label']); ?>／</p>
          <?php endif; ?>
          <h4 class="p-nursing__name"><?php echo esc_html($it['name']); ?></h4>
          <?php if ($it['kana']) : ?>
          <p class="p-nursing__kana"><?php echo esc_html($it['kana']); ?></p>
          <?php endif; ?>

          <?php if ($it['message']) : ?>
          <div class="p-nursing__message">
            <p class="p-nursing__message-title">メッセージ</p>
            <div class="p-nursing__message-text">
              <?php echo wp_kses_post($it['message']); ?>
            </div>
          </div>
          <?php endif; ?>
        </div>

        <div class="p-nursing__img">
          <img src="<?php echo esc_url($it['img']); ?>" alt="<?php echo esc_attr($it['name']); ?>">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (!empty($office_items)) : ?>
<section id="office-staff" class="p-office-staff l-office-staff">
  <div class="p-office-staff__inner l-inner">
    <h3 class="p-office-staff__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--blue"></span><?php echo esc_html($office_title); ?>
    </h3>

    <!-- 事務スタッフ選択ボタン：ACFから自動生成 -->
    <div class="p-office-staff__nav">
      <ul class="p-office-staff__list" role="tablist" aria-label="事務スタッフ選択">
        <?php foreach ($office_items as $idx => $it): ?>
        <li class="p-office-staff__item">
          <button class="p-office-staff__btn<?php echo $idx===0?' is-active':''; ?>" type="button"
            data-target="#office-<?php echo $idx; ?>" role="tab" aria-controls="office-<?php echo $idx; ?>"
            aria-selected="<?php echo $idx===0?'true':'false'; ?>">
            <?php echo esc_html($it['name']); ?>
          </button>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- 各事務スタッフプロフィール -->
    <div class="p-office-staff__content">
      <?php foreach ($office_items as $idx => $it): ?>
      <div id="office-<?php echo $idx; ?>" class="p-office-staff__profile" role="tabpanel"
        <?php if ($idx!==0) echo 'style="display:none"'; ?>>
        <div class="p-office-staff__info">
          <?php if ($it['label']) : ?>
          <p class="p-office-staff__label"><?php echo esc_html($it['label']); ?>／</p>
          <?php endif; ?>
          <h4 class="p-office-staff__name"><?php echo esc_html($it['name']); ?></h4>
          <?php if ($it['kana']) : ?>
          <p class="p-office-staff__kana"><?php echo esc_html($it['kana']); ?></p>
          <?php endif; ?>

          <?php if ($it['message']) : ?>
          <div class="p-office-staff__message">
            <p class="p-office-staff__message-title">メッセージ</p>
            <div class="p-office-staff__message-text">
              <?php echo wp_kses_post($it['message']); ?>
            </div>
          </div>
          <?php endif; ?>
        </div>

        <div class="p-office-staff__img">
          <img src="<?php echo esc_url($it['img']); ?>" alt="<?php echo esc_attr($it['name']); ?>">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 診療科リンク（そのまま流用） -->
<section id="staff-link" class="p-staff-link l-staff-link">
  <div class="p-staff-link__inner l-inner">
    <div class="p-staff-link__nav p-staff">
      <div class="p-staff__nav-inner">
        <ul class="p-staff__list">
          <?php
          $departments = [
            ['slug' => 'general-medicine', 'label' => '総合診療科'],
            ['slug' => 'rheumatology',     'label' => 'リウマチ・膠原病内科'],
            ['slug' => 'rehabilitation',   'label' => 'リハビリテーション科'],
            ['slug' => 'internal-medicine','label' => '内科'],
            ['slug' => 'diabetology',      'label' => '糖尿病内科'],
            ['slug' => 'radiology',        'label' => '放射線科'],
            ['slug' => 'psychosomatic',    'label' => '心療内科'],
            ['slug' => 'oncology',         'label' => '腫瘍内科'],
            ['slug' => 'dialysis',         'label' => '透析'],
            ['slug' => 'nephrology',       'label' => '腎臓内科'],
            ['slug' => 'orthopedics',      'label' => '整形外科'],
            ['slug' => 'nursing',          'label' => '看護部'],
            ['slug' => 'office-staff',     'label' => '事務スタッフ'],
          ];

          foreach ($departments as $dept) {
            if ($dept['slug'] === 'nursing') {
              $link = home_url('/staff/#nursing');
            } elseif ($dept['slug'] === 'office-staff') {
              $link = home_url('/staff/#office-staff');
            } else {
              $post = get_page_by_path($dept['slug'], OBJECT, 'department');
              $link = ($post && $post->post_status === 'publish') ? get_permalink($post).'#doctorIntro-ttl' : '';
            }

            if (!empty($link)) {
              echo '<li class="p-staff__item"><a href="'.esc_url($link).'">'
                  . esc_html($dept['label'])
                  . '<span class="p-staff__arr"></span></a></li>';
            } else {
              echo '<li class="p-staff__item is-disabled"><span>'
                  . esc_html($dept['label'])
                  . '</span></li>';
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>