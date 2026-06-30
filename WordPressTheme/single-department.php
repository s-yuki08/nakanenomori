<?php

get_header();

/** 許可タグでWYSIWYGを安全出力 */
function sv_esc_wysiwyg($html)
{
  return wp_kses($html, wp_kses_allowed_html('post'));
}

/** スケジュールセル：'氏名,氏名2' → 緑チップを最大2つ縦並び／空・- → — */
function sv_render_doctor_cell($val)
{
  $val = trim((string)$val);
  if ($val === '' || $val === '-' || $val === 'ー' || $val === '—') {
    echo '—';
    return;
  }

  // カンマで分割（最大2つ）
  $doctors = array_slice(array_map('trim', explode(',', $val)), 0, 2);

  foreach ($doctors as $i => $doctor) {
    if ($i > 0) echo '<br>';
    $name = explode('|', $doctor)[0]; // |以降は無視
    echo '<span class="c-chip c-chip--green">' . esc_html(trim($name)) . '</span>';
  }
}

/* =========================
 *  ACFの値取得（ここが肝）
 * ========================= */
$current_slug = get_post_field('post_name', get_the_ID());
$intro_text   = get_field('intro_text') ?: '';

// 対象疾患・診療内容
// | または ｜ は <br> に変換される
$disease_subtitle = get_field('disease_subtitle') ?: '';
$disease_subtitle = str_replace(['|', '｜'], '<br>', $disease_subtitle);
$disease_items_raw = get_field('disease_items') ?: '';

// 空行で区切って各アイテムに分割、各アイテムの1行目がタイトル、残りが説明文
// タイトル内の | または ｜ は <br> に変換される
$disease_items = [];
if ($disease_items_raw) {
  $blocks = preg_split('/\n\s*\n/', trim($disease_items_raw));
  foreach ($blocks as $block) {
    $lines = explode("\n", trim($block));
    $title = trim(array_shift($lines));
    if (!$title) continue;
    // タイトル内の | または ｜ を <br> に変換
    $title = str_replace(['|', '｜'], '<br>', $title);
    $text = trim(implode("\n", $lines));
    $disease_items[] = [
      'title' => $title,
      'text'  => $text,
    ];
  }
}

// Group配下からAM/PMを取得（親→子）- 各曜日2名対応
$am_group = get_field('group_am') ?: array();
$pm_group = get_field('group_pm') ?: array();
$schedule_hours = get_field('schedule_hours') ?: '';
$days = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat'];

$am = [];
$pm = [];
foreach ($days as $d) {
  $am1 = trim($am_group["am_{$d}_1"] ?? '');
  $am2 = trim($am_group["am_{$d}_2"] ?? '');
  $am[$d] = implode(',', array_filter([$am1, $am2]));

  $pm1 = trim($pm_group["pm_{$d}_1"] ?? '');
  $pm2 = trim($pm_group["pm_{$d}_2"] ?? '');
  $pm[$d] = implode(',', array_filter([$pm1, $pm2]));
}

get_template_part('parts/header-bg'); // ヘッダービジュアル
?>


<!-- タイトル＆導入 -->
<section class="p-general-medicine l-general-medicine js-header-height">
  <div class="p-general-medicine__inner l-single-department-inner">
    <header class="p-general-medicine__heading">
      <h1 class="p-general-medicine__title"><?php the_title(); ?></h1>
    </header>

    <?php if ($intro_text): ?>
      <div class="p-general-medicine__content">
        <div class="p-general-medicine__text">
          <?php
          // 段落ごとに<p>タグで囲む（空行で分割）
          $paragraphs = preg_split('/\n\s*\n/', trim($intro_text));
          foreach ($paragraphs as $para) {
            $para = trim($para);
            if ($para) {
              echo '<p>' . nl2br(esc_html($para)) . '</p>';
            }
          }
          ?>
        </div>
        <?php if ($current_slug !== 'nephrology'): ?>
          <a href="<?php echo esc_url(home_url('/outpatient/')); ?>" class="p-general-medicine__link">
            <span class="p-general-medicine__link-text">外来受診をご希望の方へ</span>
            <span class="p-general-medicine__link-arrow"></span>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- 対象疾患・診療内容 -->
<?php if ($disease_subtitle || !empty($disease_items)): ?>
  <section class="p-disease l-disease">
    <div class="p-disease__inner l-single-department-inner">
      <h3 class="p-disease__title c-section-title">
        <span class="c-section-title__dot c-section-title__dot--green"></span>対象疾患・診療内容
      </h3>
      <div class="p-disease__body">
        <?php if ($disease_subtitle): ?>
          <p class="p-disease__subtitle"><?php echo wp_kses_post($disease_subtitle); ?></p>
        <?php endif; ?>

        <?php if (!empty($disease_items)): ?>
          <div class="p-disease__list">
            <?php foreach ($disease_items as $index => $item): ?>
              <div id="p-disease__item<?php echo $index + 1; ?>" class="p-disease__item">
                <p class="p-disease__item-title"><?php echo wp_kses_post($item['title']); ?></p>
                <?php if ($item['text']): ?>
                  <p class="p-disease__item-text"><?php echo nl2br(esc_html($item['text'])); ?></p>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- 担当医表（AM/PM×曜日） -->
<?php if (array_filter($am) || array_filter($pm) || $schedule_hours): ?>
  <section class="p-schedule l-schedule">
    <div class="p-schedule__inner l-single-department-inner">
      <h3 class="p-schedule__title c-section-title">
        <span class="c-section-title__dot c-section-title__dot--green"></span>担当医表
      </h3>

      <div class="p-schedule__tableWrap">
        <table class="p-schedule__table">
          <thead>
            <tr>
              <th class="p-schedule__th p-schedule__th--blank"></th>
              <th class="p-schedule__th">月</th>
              <th class="p-schedule__th">火</th>
              <th class="p-schedule__th">水</th>
              <th class="p-schedule__th">木</th>
              <th class="p-schedule__th">金</th>
              <th class="p-schedule__th">土</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="p-schedule__rowLabel">午 前</th>
              <?php foreach ($days as $d): ?>
                <td class="p-schedule__cell"><?php sv_render_doctor_cell($am[$d] ?? ''); ?></td>
              <?php endforeach; ?>
            </tr>
            <tr>
              <th scope="row" class="p-schedule__rowLabel">午 後</th>
              <?php foreach ($days as $d): ?>
                <td class="p-schedule__cell"><?php sv_render_doctor_cell($pm[$d] ?? ''); ?></td>
              <?php endforeach; ?>
            </tr>
          </tbody>
        </table>
      </div>

      <?php if ($schedule_hours): ?>
        <div class="p-schedule__info">
          <span class="p-schedule__info-label">診療時間</span>
          <span class="p-schedule__info-text"><?php echo esc_html($schedule_hours); ?></span>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>



<!-- 医師紹介（未入力は出さない／2名か不明でもOK） -->
<?php
// 名前が入っている医師だけを出す（最大6名）
$doctors = [];
for ($i = 1; $i <= 6; $i++) {
  $label = get_field("doctor{$i}_label");        // 肩書（空OK）
  $name  = get_field("doctor{$i}_name");         // ★必須：空ならスキップ
  if (!$name) continue;

  $kana  = get_field("doctor{$i}_kana");
  $spec  = get_field("doctor{$i}_specialty");
  $qual  = get_field("doctor{$i}_qualification");
  $photo = get_field("doctor{$i}_photo");
  $msg   = get_field("doctor{$i}_message");

  $doctors[] = [
    'id'    => $i,
    'label' => $label, // デフォルト付与しない：空なら非表示
    'name'  => $name,
    'kana'  => $kana,
    'spec'  => $spec,
    'qual'  => $qual,
    'photo' => ($photo && is_array($photo)) ? $photo['url'] : '',
    'msg'   => $msg,
  ];
}
?>

<?php if (!empty($doctors)): ?>
  <section id="doctorIntro-ttl" class="p-doctorIntro l-doctorIntro">
    <div class="p-doctorIntro__inner l-single-department-inner">
      <h3 class="p-doctorIntro__title c-section-title">
        <span class="c-section-title__dot c-section-title__dot--green"></span>医師紹介
      </h3>

      <!-- 医師選択ボタン -->
      <nav class="p-doctorIntro__nav" aria-label="医師選択">
        <ul class="p-doctorIntro__list">
          <?php foreach ($doctors as $index => $doc): ?>
            <li class="p-doctorIntro__item">
              <button class="p-doctorIntro__btn <?php echo $index === 0 ? 'is-active' : ''; ?>" type="button"
                data-target="doctor-<?php echo esc_attr($doc['id']); ?>"
                aria-controls="doctor-<?php echo esc_attr($doc['id']); ?>"
                aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                <?php echo esc_html($doc['name']); ?>
              </button>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <!-- 各医師プロフィール -->
      <?php foreach ($doctors as $index => $doc): ?>
        <div id="doctor-<?php echo esc_attr($doc['id']); ?>" class="p-doctorIntro__content" role="region"
          style="<?php echo $index === 0 ? '' : 'display:none'; ?>">

          <div class="p-doctorIntro__profile">
            <div class="p-doctorIntro__info">
              <?php if (!empty($doc['label'])): ?>
                <p class="p-doctorIntro__label"><?php echo esc_html($doc['label']); ?></p>
              <?php endif; ?>

              <h4 class="p-doctorIntro__name"><?php echo esc_html($doc['name']); ?></h4>

              <?php if (!empty($doc['kana'])): ?>
                <p class="p-doctorIntro__kana"><?php echo esc_html($doc['kana']); ?></p>
              <?php endif; ?>

              <dl class="p-doctorIntro__data">
                <?php if (!empty($doc['spec'])): ?>
                  <dt>専門分野</dt>
                  <dd><?php echo esc_html($doc['spec']); ?></dd>
                <?php endif; ?>
                <?php if (!empty($doc['qual'])): ?>
                  <dt>経歴・資格</dt>
                  <dd><?php echo nl2br(esc_html($doc['qual'])); ?></dd>
                <?php endif; ?>
              </dl>
            </div>

            <?php if (!empty($doc['photo'])): ?>
              <div class="p-doctorIntro__img">
                <img src="<?php echo esc_url($doc['photo']); ?>" alt="<?php echo esc_attr($doc['name']); ?>">
              </div>
            <?php endif; ?>
          </div>

          <?php if (!empty($doc['msg'])): ?>
            <div class="p-doctorIntro__message">
              <p class="p-doctorIntro__message-title">メッセージ</p>
              <div class="p-doctorIntro__message-text"><?php echo nl2br(esc_html($doc['msg'])); ?></div>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>



<!-- 他診療科リンク -->
<section class="p-department-link l-department-link">
  <div class="p-department-link__inner l-single-department-inner">
    <!-- 診療科セクション -->
    <div class="p-department__nav">
      <h3 class="p-department__section-title">＜診療科＞</h3>
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
      <h3 class="p-department__section-title">＜各部門＞</h3>
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

<?php get_footer(); ?>