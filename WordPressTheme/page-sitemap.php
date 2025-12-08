<?php get_header(); ?>
<?php get_template_part('parts/header-bg') ?>

<?php
$home = esc_url( home_url( '/' ) );
$department = esc_url( home_url( '/department/' ) );
$outpatient = esc_url( home_url( '/outpatient/' ) );
$initial_visit = esc_url( home_url( '/outpatient/#initial-visit' ) );
$consultation_hours = esc_url( home_url( '/outpatient/#consultation-hours' ) );
$bring = esc_url( home_url( '/outpatient/#bring' ) );
$flow = esc_url( home_url( '/outpatient/#flow' ) );
$faq_contact = esc_url( home_url( '/faq-contact/' ) );
$hospitalization = esc_url( home_url( '/hospitalization/' ) );
$hospital_flow = esc_url( home_url( '/hospitalization/#hospital-flow' ) );
$hospital_caution = esc_url( home_url( '/hospitalization/#hospital-caution' ) );
$hospital_cost = esc_url( home_url( '/hospitalization/#hospital-cost' ) );
$hospital_discharge = esc_url( home_url( '/hospitalization/#hospital-discharge' ) );
$visit = esc_url( home_url( '/hospitalization/#visit' ) );

$policy = esc_url( home_url( '/privacy-policy/' ) );
$recruit = esc_url( home_url( '/recruit/' ) );
$message = esc_url( home_url( '/recruit/#message' ) );
$recruit_info = esc_url( home_url( '/recruit/#recruit-info' ) );
$environment = esc_url( home_url( '/recruit/#environment' ) );
$recruit_flow = esc_url( home_url( '/recruit/#recruit-flow' ) );
$recruit_contact = esc_url( home_url( '/recruit/#recruit-contact' ) );
$about = esc_url( home_url( '/about/' ) );
$director = esc_url( home_url( '/about/#director' ) );
$mission = esc_url( home_url( '/about/#mission' ) );
$basic_policy = esc_url( home_url( '/about/#basicPolicy' ) );
$staff = esc_url( home_url( '/about/#staff' ) );
$access = esc_url( home_url( '/about/#access' ) );
$affiliation = esc_url( home_url( '/about/#affiliation' ) );
$checkup = esc_url( home_url( '/checkup/' ) );
$general_checkup = esc_url( home_url( '/checkup/#generalCheckup' ) );
$brain_dock = esc_url( home_url( '/checkup/#brainDock' ) );
$medical_dock = esc_url( home_url( '/checkup/#medicalDock' ) );
$news = esc_url( home_url( '/news/' ) );
$faq = esc_url( home_url( '/faq-contact/#faq' ) );
$contact_top = esc_url( home_url( '/faq-contact/#contact-top' ) );

?>

<?php
$department_general_medicine       = get_cpt_link_by_slug( 'general-medicine', 'department' );
$department_rheumatology           = get_cpt_link_by_slug( 'rheumatology', 'department' );
$department_rehabilitation         = get_cpt_link_by_slug( 'rehabilitation', 'department' );
$department_internal_medicine      = get_cpt_link_by_slug( 'internal-medicine', 'department' );
$department_diabetes_medicine      = get_cpt_link_by_slug( 'diabetology', 'department' );
$department_radiology              = get_cpt_link_by_slug( 'radiology', 'department' );
$department_psychosomatic_medicine = get_cpt_link_by_slug( 'psychosomatic', 'department' );
$department_oncology               = get_cpt_link_by_slug( 'oncology', 'department' );
$department_dialysis               = get_cpt_link_by_slug( 'dialysis', 'department' );
$department_kidney_medicine        = get_cpt_link_by_slug( 'nephrology', 'department' );
$department_plastic_surgery        = get_cpt_link_by_slug( 'orthopedics', 'department' );
?>


<section class="p-sitemap l-sitemap js-header-height">
  <div class="p-sitemap__inner">
    <nav class="p-sitemap__content">
      <div class="p-sitemap__column p-sitemap__column--left">
        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>外来</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $initial_visit; ?>">初診について</a></li>
            <li><a href="<?php echo $consultation_hours; ?>">外来診療受付時間</a></li>
            <li><a href="<?php echo $bring; ?>">お持ちいただくもの</a></li>
            <li><a href="<?php echo $flow; ?>">診療科の診察の流れ</a></li>
          </ul>
        </div>

        <!-- 診療科のご案内 -->
        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>診療科のご案内</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $department_general_medicine; ?>">総合診療科</a></li>
            <li><a href="<?php echo $department_rheumatology; ?>">リウマチ・膠原病内科</a></li>
            <li><a href="<?php echo $department_rehabilitation; ?>">リハビリテーション科</a></li>
            <li><a href="<?php echo $department_internal_medicine; ?>">内科</a></li>
            <li><a href="<?php echo $department_diabetes_medicine; ?>">糖尿病内科</a></li>
            <li><a href="<?php echo $department_radiology; ?>">放射線科</a></li>
            <li><a href="<?php echo $department_psychosomatic_medicine; ?>">心療内科</a></li>
            <li><a href="<?php echo $department_oncology; ?>">腫瘍内科</a></li>
            <li><a href="<?php echo $department_dialysis; ?>">透析</a></li>
            <li><a href="<?php echo $department_kidney_medicine; ?>">腎臓内科</a></li>
            <li><a href="<?php echo $department_plastic_surgery; ?>">整形外科</a></li>
          </ul>
        </div>
      </div>
      <!-- 中央カラム -->
      <div class="p-sitemap__column p-sitemap__column--center">
        <!-- 入院 -->
        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>入院</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $hospitalization; ?>#hospital-flow">入院のご案内</a></li>
            <li><a href="<?php echo $hospital_flow; ?>">入院までの流れ</a></li>
            <li><a href="<?php echo $hospital_caution; ?>">入院中の注意事項</a></li>
            <li><a href="<?php echo $hospital_cost; ?>">入院費用</a></li>
            <li><a href="<?php echo $hospital_discharge; ?>">退院手続</a></li>
            <li><a href="<?php echo $visit; ?>">面会案内</a></li>
          </ul>
        </div>

        <!-- 当院について -->
        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>当院について</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $director; ?>">院長あいさつと理念</a></li>
            <li><a href="<?php echo $mission; ?>">私たちの使命</a></li>
            <li><a href="<?php echo $basic_policy; ?>">基本方針</a></li>
            <li><a href="<?php echo $staff; ?>">スタッフ紹介</a></li>
            <li><a href="<?php echo $access; ?>">交通アクセス</a></li>
            <li><a href="<?php echo $affiliation; ?>">関連病院</a></li>
          </ul>
        </div>
        <!-- 検診 -->
        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>検診</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $general_checkup; ?>">一般健診</a></li>
            <li><a href="<?php echo $brain_dock; ?>">脳ドック</a></li>
            <li><a href="<?php echo $medical_dock; ?>">人間ドック</a></li>
          </ul>
        </div>
      </div>
      <!-- ===== 右カラム ===== -->
      <div class="p-sitemap__column p-sitemap__column--right">
        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>求人情報</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $message; ?>">メッセージ</a></li>
            <li><a href="<?php echo $recruit_info; ?>">募集職種</a></li>
            <li><a href="<?php echo $environment; ?>">働く環境</a></li>
            <li><a href="<?php echo $recruit_flow; ?>">採用までの流れ</a></li>
          </ul>
        </div>

        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>お知らせ</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $news; ?>">お知らせ</a></li>
          </ul>
        </div>

        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>お問い合わせ</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $contact_top; ?>">お問い合わせ</a></li>
          </ul>
        </div>

        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>よくある質問</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $faq; ?>">よくある質問</a></li>
          </ul>
        </div>

        <div class="p-sitemap__section">
          <h3 class="p-sitemap__heading"><span class="p-sitemap__heading-dot"></span>プライバシーポリシー</h3>
          <ul class="p-sitemap__list">
            <li><a href="<?php echo $policy; ?>">プライバシーポリシー</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</section>




<?php get_footer(); ?>