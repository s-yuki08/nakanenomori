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
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/stethoscope-icon.svg"
          alt="診療科アイコン">
      </span>
      <h2 class="p-department__title">診療科のご案内</h2>
    </div>
    <div class="p-department__nav">
      <div class="p-department__nav-inner">
        <?php if ( have_posts() ) : ?>
        <ul class="p-department__list">
          <?php
// 希望順（department のスラッグを必ずこの順に並べる）
$desired = [
  ['slug'=>'general-medicine',      'label'=>'総合診療科'],
  ['slug'=>'rheumatology',          'label'=>'リウマチ・膠原病内科'],
  ['slug'=>'rehabilitation',        'label'=>'リハビリテーション科'],
  ['slug'=>'internal-medicine',     'label'=>'内科'],
  ['slug'=>'diabetology',           'label'=>'糖尿病内科'],
  ['slug'=>'radiology',             'label'=>'放射線科'],
  ['slug'=>'psychosomatic',         'label'=>'心療内科'],
  ['slug'=>'oncology',              'label'=>'腫瘍内科'],
  ['slug'=>'dialysis',              'label'=>'透析'],
  ['slug'=>'nephrology',            'label'=>'腎臓内科'],
  ['slug'=>'orthopedics',           'label'=>'整形外科'],
  // 必要なら増減可。重複は1回にしてください。
];

foreach ($desired as $item) {
  // 該当スラッグのCPT（department）を取得
  $post = get_page_by_path($item['slug'], OBJECT, 'department');

  if ($post && $post->post_status === 'publish') {
    // タイトルは管理画面のものを優先、未設定なら配列のラベル
    $title = get_the_title($post) ?: $item['label'];
    echo '<li class="p-department__item">
            <a href="'.esc_url(get_permalink($post)).'">'.
              esc_html($title).'<span class="p-department__arr"></span>
            </a>
          </li>';
  } else {
    // まだ未作成／非公開なら出さない（出したい場合は下のコメントアウトを利用）
    // echo '<li class="p-department__item is-disabled"><span>'.esc_html($item['label']).'</span></li>';
  }
}
?>
        </ul>
        <?php else : ?>
        <p>現在、公開中の診療科はありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="p-outpatient-service l-outpatient-service">
  <div class="p-outpatient-service__inner">
    <h3 class="p-outpatient-service__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--green"></span>
      外来診療受付時間
    </h3>
    <div class="p-outpatient-service__wrapper">
      <div class="p-outpatient-service__image">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/eigyoujikenn.png"
          alt="外来診療受付時間">
      </div>
    </div>
  </div>
</section>

<section class="p-contact l-contact c-bird-bg">
  <div class="p-contact__inner p-contact__inner--green l-inner">
    <h3 class="p-contact__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--green"></span>
      お問い合わせ
    </h3>
    <div class="p-contact__box p-contact__box--green">
      <p class="p-contact__text">
        代表電話<br class="u-mobile">
        <a href="tel:0364213724" class="p-contact__tel p-contact__tel--green">03-6421-3724</a>
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