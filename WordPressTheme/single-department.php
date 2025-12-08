<?php
/**
 * Single template for CPT: department
 * ファイル名: single-department.php
 * 依存ACF（無料版想定）：
 *  - 基本情報：intro_text, disease_body, reception_morning, reception_afternoon
 *  - スケジュール（Group配下）：
 *      group_am: am_mon..am_sun / group_pm: pm_mon..pm_sun
 *      入力例：奈良 ／ 氏名|非常勤 ／ -（休診）
 *  - 医師紹介（最大3名）：doctor{1..3}_{name,kana,specialty,qualification,photo,message_title,message}
 */

get_header();

/** 許可タグでWYSIWYGを安全出力 */
function sv_esc_wysiwyg($html){
  return wp_kses($html, wp_kses_allowed_html('post'));
}

/** スケジュールセル：'氏名|非常勤' → 緑チップ＋注釈／空・- → — */
function sv_render_doctor_cell($val){
  $val = trim((string)$val);
  if ($val === '' || $val === '-' || $val === 'ー' || $val === '—') { echo '—'; return; }
  $name = $val; $note = '';
  if (strpos($val, '|') !== false) { list($name, $note) = array_map('trim', explode('|', $val, 2)); }
  echo '<span class="c-chip c-chip--green">'.esc_html($name).'</span>';
  if ($note !== '') echo '<br><small class="u-note">（'.esc_html($note).'）</small>';
}

/* =========================
 *  ACFの値取得（ここが肝）
 * ========================= */
$intro_text          = get_field('intro_text') ?: '';
$reception_morning   = get_field('reception_morning') ?: '';
$reception_afternoon = get_field('reception_afternoon') ?: '';
$disease_body        = get_field('disease_body') ?: '';

// Group配下からAM/PMを取得（親→子）
$am_group = get_field('group_am') ?: array(); // ['am_mon'=>..., ...]
$pm_group = get_field('group_pm') ?: array(); // ['pm_mon'=>..., ...]
$days = ['mon','tue','wed','thu','fri','sat','sun'];

$am = []; $pm = [];
foreach ($days as $d) {
  $am[$d] = $am_group["am_{$d}"] ?? '';
  $pm[$d] = $pm_group["pm_{$d}"] ?? '';
}

get_template_part('parts/header-bg'); // ヘッダービジュアル
?>


<!-- タイトル＆導入 -->
<section class="p-general-medicine l-general-medicine js-header-height">
  <div class="p-general-medicine__inner l-inner">
    <header class="p-general-medicine__heading">
      <h1 class="p-general-medicine__title"><?php the_title(); ?></h1>
    </header>

    <?php if ($intro_text): ?>
    <div class="p-general-medicine__content">
      <div class="p-general-medicine__text"><?php echo sv_esc_wysiwyg($intro_text); ?></div>
    </div>
    <?php endif; ?>
  </div>
</section>

<!-- 受付時間（午前・午後 横並び想定） -->
<section class="p-outpatient-service l-outpatient-service">
  <div class="p-outpatient-service__inner l-inner">
    <h3 class="p-outpatient-service__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--green"></span>受付時間
    </h3>
    <div class="p-outpatient-service__wrapper">
      <div class="p-outpatient-service__box" role="group" aria-label="受付時間">
        <div class="p-outpatient-service__head">受付時間</div>
        <div class="p-outpatient-service__content">
          <?php if ($reception_morning): ?>
          <div class="p-outpatient-service__cell p-outpatient-service__label">午前</div>
          <div class="p-outpatient-service__cell p-outpatient-service__time">
            <?php echo esc_html($reception_morning); ?></div>
          <?php endif; ?>
          <?php if ($reception_afternoon): ?>
          <div class="p-outpatient-service__cell p-outpatient-service__label">午後</div>
          <div class="p-outpatient-service__cell p-outpatient-service__time">
            <?php echo esc_html($reception_afternoon); ?></div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 対象疾患・診療内容 -->
<section class="p-disease l-disease">
  <div class="p-disease__inner l-inner">
    <h3 class="p-disease__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--green"></span>対象疾患・診療内容
    </h3>
    <div class="p-disease__body">
      <?php echo $disease_body ? sv_esc_wysiwyg($disease_body) : '<p>準備中です。</p>'; ?>
    </div>
  </div>
</section>

<!-- 担当医表（AM/PM×曜日） -->
<section class="p-schedule l-schedule">
  <div class="p-schedule__inner l-inner">
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
            <th class="p-schedule__th">日</th>
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
  </div>
</section>



<!-- 医師紹介（未入力は出さない／2名か不明でもOK） -->
<section id="doctorIntro-ttl" class="p-doctorIntro l-doctorIntro">
  <div class="p-doctorIntro__inner l-inner">
    <h3 class="p-doctorIntro__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--green"></span>医師紹介
    </h3>

    <?php
      // 名前が入っている医師だけを出す
      $doctors = [];
      for ($i=1; $i<=3; $i++) {
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
          'photo' => ($photo && is_array($photo)) ? $photo['url'] : get_template_directory_uri().'/assets/images/common/fv_sp.png',
          'msg'   => $msg,
        ];
      }
      ?>

    <?php if (!empty($doctors)): ?>
    <!-- 医師選択ボタン -->
    <nav class="p-doctorIntro__nav" aria-label="医師選択">
      <ul class="p-doctorIntro__list">
        <?php foreach ($doctors as $index => $doc): ?>
        <li class="p-doctorIntro__item">
          <button class="p-doctorIntro__btn <?php echo $index===0 ? 'is-active' : ''; ?>" type="button"
            data-target="doctor-<?php echo esc_attr($doc['id']); ?>"
            aria-controls="doctor-<?php echo esc_attr($doc['id']); ?>"
            aria-selected="<?php echo $index===0 ? 'true' : 'false'; ?>">
            <?php echo esc_html($doc['name']); ?>
          </button>
        </li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <!-- 各医師プロフィール -->
    <?php foreach ($doctors as $index => $doc): ?>
    <div id="doctor-<?php echo esc_attr($doc['id']); ?>" class="p-doctorIntro__content" role="region"
      style="<?php echo $index===0 ? '' : 'display:none'; ?>">

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

        <div class="p-doctorIntro__img">
          <img src="<?php echo esc_url($doc['photo']); ?>" alt="<?php echo esc_attr($doc['name']); ?>">
        </div>
      </div>

      <?php if (!empty($doc['msg'])): ?>
      <div class="p-doctorIntro__message">
        <p class="p-doctorIntro__message-title">メッセージ</p>
        <div class="p-doctorIntro__message-text"><?php echo sv_esc_wysiwyg($doc['msg']); ?></div>
      </div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>


    <?php else: ?>
    <p>医師情報は準備中です。</p>
    <?php endif; ?>
  </div>
</section>



<!-- 他診療科リンク（同CPTから自動生成） -->
<section class="p-department-link l-department-link">
  <div class="p-department-link__inner l-inner">
    <div class="p-department__nav">
      <div class="p-department__nav-inner">
        <ul class="p-department__list">
          <?php
            $related = new WP_Query([
              'post_type'      => 'department',
              'posts_per_page' => -1,
              'post__not_in'   => [ get_the_ID() ],
              'orderby'        => 'menu_order title',
              'order'          => 'ASC',
            ]);
            if ($related->have_posts()):
              while ($related->have_posts()): $related->the_post(); ?>
          <li class="p-department__item">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="p-department__arr"></span></a>
          </li>
          <?php endwhile; wp_reset_postdata();
            endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>