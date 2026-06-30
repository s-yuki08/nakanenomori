<?php /* Template Name: 求人情報 */ get_header();
?>

<?php get_template_part('parts/header-bg'); ?>

<section id="message" class="p-message l-message js-header-height">
  <div class="p-message__inner l-inner">
    <div class="p-message__block">
      <div class="p-message__head">
        <p class="p-message__sub">メッセージ</p>
        <h1 class="p-message__title">message</h1>
      </div>

      <div class="p-message__content">
        <div class="p-message__catch-wrap">
          <div class="p-message__catch">
            断らない医療<br>
            地域に根ざした医療の提供
          </div>
        </div>
        <div class="p-message__text-body">
          <p class="p-message__text">
            爽玄会碑文谷病院（東京都指定二次救急医療機関）と<br class="u-mobile">連携した当院は、<br>
            同じ使命のもとに看護部スタッフ一丸となって<br class="u-mobile">看護・介護業務に従事していきます。<br>
            特に看護部は患者さまやご家族を笑顔にし、<br>
            「ありがとうと言われる看護・介護を提供しよう」を<br class="u-mobile">モットーとします。<br>
            そのために仁愛と理由のある看護・介護の提供ができる<br class="u-mobile">看護職・介護職の<br class="u-desktop">
            育成に努めて参ります。<br class="u-desktop">
          </p>
        </div>
      </div>
    </div>

    <!-- PHILOSOPHY -->
    <div class="p-message__block">
      <div class="p-message__head">
        <p class="p-message__sub">理念</p>
        <h2 class="p-message__title">philosophy</h2>
      </div>

      <div class="p-message__text-body">
        <p class="p-message__text">
          患者さまにとっての安心・安全を確保し、<br class="u-mobile">仁愛と理由のある看護・介護を提供します。<br>
          地域に求められている看護・介護の提供、入退院支援を<br class="u-mobile">スムーズにできる看護職・介護職を育成します。<br>
          各自が専門職業人として自らを律し、自立します。<br>
          病院を愛し、互いに尊敬し、<br class="u-mobile">職業人としてあるべき姿を確立します。</p>
      </div>
    </div>

  </div>
</section>

<section id="recruit-info" class="p-recruit-info l-recruit-info">
  <div class="p-recruit-info__inner l-inner">
    <div class="p-recruit-info__head">
      <h2 id="recruit-ttl" class="p-recruit-info__title">募集職種</h2>
    </div>
    <div class="p-recruit-info__block">
      <ul class="p-recruit-info__list">
        <?php
        $has_any_job = false; // タイトルが1つでもあるか

        for ($i = 1; $i <= 13; $i++):
          $title     = get_field("job_title_{$i}");
          $time      = get_field("job_time_{$i}");
          $salary    = get_field("job_salary_{$i}");
          $holiday   = get_field("job_holiday_{$i}");
          $transport = get_field("job_transport_{$i}");

          if ($title):
            $has_any_job = true;
            $has_details = ($time || $salary || $holiday || $transport);
        ?>
            <li class="p-recruit-info__item">
              <h3 class="p-recruit-info__item-title js-job-title">
                <?php echo esc_html($title); ?>
              </h3>

              <div class="p-recruit-info__item-body">
                <?php if ($has_details): ?>
                  <table class="p-recruit-info__item-table">
                    <tbody>
                      <?php if ($time): ?>
                        <tr>
                          <th>勤務時間</th>
                          <td><?php echo nl2br(esc_html($time)); ?></td>
                        </tr>
                      <?php endif; ?>
                      <?php if ($salary): ?>
                        <tr>
                          <th>給与</th>
                          <td><?php echo nl2br(esc_html($salary)); ?></td>
                        </tr>
                      <?php endif; ?>
                      <?php if ($holiday): ?>
                        <tr>
                          <th>休日休暇</th>
                          <td><?php echo nl2br(esc_html($holiday)); ?></td>
                        </tr>
                      <?php endif; ?>
                      <?php if ($transport): ?>
                        <tr>
                          <th>交通費</th>
                          <td><?php echo nl2br(esc_html($transport)); ?></td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                <?php else: ?>
                  <!-- 職種タイトルはあるが詳細が未入力の場合の表示 -->
                  <p class="p-recruit-info__no-detail">現在募集しておりません。</p>
                <?php endif; ?>
              </div>
            </li>
          <?php
          endif; // $title
        endfor;

        // タイトル自体が1件も無いとき（=全枠未設定）は一覧にまとめて表示
        if (! $has_any_job):
          ?>
          <li class="p-recruit-info__item">
            <p class="p-recruit-info__no-job">現在募集しておりません。</p>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>


<?php /* コメントアウト: environment セクション
<section id="environment" class="p-environment l-environment">
  <div class="p-environment__inner l-inner">
    <div class="p-environment__block">
      <div class="p-environment__head">
        <p class="p-environment__sub">働く環境</p>
        <h2 id="env-title" class="p-environment__title">ENVIRONMENT</h2>
        <p class="p-environment__lead">
          働く職員の現場の声や院内の様子、福利厚生など、<br>
          さまざまな特徴をご紹介します。
        </p>
      </div>
    </div>

    <div class="p-environment__container">
      <div class="p-environment__card c-card">
        <div class="c-card__label">スタッフ構成比</div>
        <div class="c-circle-chart">
          <svg class="c-circle-chart__svg" viewBox="0 0 140 140">
            <circle class="c-circle-chart__bg" cx="70" cy="70" r="59" />
            <circle id="circlePink" class="c-circle-chart__progress c-circle-chart__progress--pink" cx="70" cy="70"
              r="59" stroke-dasharray="370.7 370.7" stroke-dashoffset="370.7" />
            <circle id="circleBlue" class="c-circle-chart__progress c-circle-chart__progress--blue" cx="70" cy="70"
              r="59" stroke-dasharray="185.35 370.7" stroke-dashoffset="370.7" />
          </svg>
          <div class="c-circle-chart__content">
            <div class="c-circle-chart__legend">
              <span class="c-circle-chart__label c-circle-chart__label--pink">女性</span>
              <span class="c-circle-chart__label c-circle-chart__label--blue">男性</span>
            </div>
            <div class="c-circle-chart__ratio">
              <span class="c-circle-chart__ratio-num c-circle-chart__ratio-num--pink" id="ratioPink">0</span>
              <span class="c-circle-chart__ratio-separator">:</span>
              <span class="c-circle-chart__ratio-num c-circle-chart__ratio-num--blue" id="ratioBlue">0</span>
            </div>
            <div class="c-circle-chart__label">合計 <span id="totalStaff">0</span>人</div>
          </div>
        </div>
      </div>

      <div class="c-card">
        <div class="c-card__label">平均年齢</div>
        <div class="c-stat-value"><span id="avgAge" class="c-stat-value__value">0.0</span><span
            class="c-stat-value__unit">歳</span></div>
        <div class="c-card__date">(2025.11.01現在)</div>
      </div>

      <div class="c-card">
        <div class="c-card__label">残業時間</div>
        <div class="c-overtime">
          <span class="c-overtime__value c-overtime__value--large" id="overtimeHour">0</span>
          <span class="c-overtime__unit">時間</span>
          <span class="c-overtime__value c-overtime__value--small" id="overtimeMin">0</span>
          <span class="c-overtime__unit c-overtime__unit--small">分</span>
        </div>
        <div class="c-card__date">(2025.11.10現在)</div>
      </div>

      <div class="c-card">
        <div class="c-card__label">有給取得率</div>
        <div class="c-donut-chart">
          <svg class="c-donut-chart__svg" viewBox="0 0 140 140">
            <circle class="c-donut-chart__bg" cx="70" cy="70" r="59" />
            <circle id="donutProgress" class="c-donut-chart__progress" cx="70" cy="70" r="59"
              stroke-dasharray="370.7 370.7" stroke-dashoffset="370.7" />
          </svg>
          <div class="c-donut-chart__content">
            <p class="c-donut-chart__value" id="vacationRate">0.0</p>
            <span class="c-donut-chart__percent">%</span>
          </div>
        </div>
      </div>
    </div>
    <div class="p-environment__block">
      <div class="p-environment__voices">
        <h3 class="p-environment__voices-title">働くスタッフの声</h3>
        <ul class="p-environment__voices-grid">
          <li class="p-environment__voice">
            <p class="p-environment__voice-title">笑顔を大切に、<br class="u-desktop">わかりやすく丁寧な対応を<br
                class="u-desktop">心がけています。</p>
            <p class="p-environment__voice-text">コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。</p>
            <p class="p-environment__voice-meta">看護部&nbsp;&nbsp;｜&nbsp;&nbsp;氏名</p>
          </li>
          <li class="p-environment__voice">
            <p class="p-environment__voice-title">笑顔を大切に、<br class="u-desktop">わかりやすく丁寧な対応を<br
                class="u-desktop">心がけています。</p>
            <p class="p-environment__voice-text">コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。</p>
            <p class="p-environment__voice-meta">看護部&nbsp;&nbsp;｜&nbsp;&nbsp;氏名</p>
          </li>
          <li class="p-environment__voice">
            <p class="p-environment__voice-title">笑顔を大切に、<br class="u-desktop">わかりやすく丁寧な対応を<br
                class="u-desktop">心がけています。</p>
            <p class="p-environment__voice-text">コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。コメントがはいります。</p>
            <p class="p-environment__voice-meta">看護部&nbsp;&nbsp;｜&nbsp;&nbsp;氏名</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
*/ ?>

<section id="recruit-flow" class="p-recruit-flow l-recruit-flow">
  <div class="p-recruit-flow__inner l-inner">
    <p class="p-recruit-flow__sub">flow</p>
    <h2 class="p-recruit-flow__title">採用までの流れ</h2>
    <div class="p-recruit-flow__content">
      <ol class="p-recruit-flow__list">
        <!-- STEP 01 -->
        <li class="p-recruit-flow__item">
          <div class="p-recruit-flow__row">
            <div class="p-recruit-flow__numWrap">
              <span class="p-recruit-flow__num">01</span>
              <span aria-hidden="true" class="p-recruit-flow__slash">／</span>
            </div>
            <div class="p-recruit-flow__body">
              <h3 class="p-recruit-flow__step">エントリー</h3>
              <p class="p-recruit-flow__desc">
                応募はお電話(03-6421-3724)より受け付けております。<br>
                「求人の件で」とお伝えいただくと担当スタッフが対応させていただきます。
              </p>
            </div>
          </div>
        </li>
        <li class="p-recruit-flow__item">
          <div class="p-recruit-flow__row">
            <div class="p-recruit-flow__numWrap">
              <span class="p-recruit-flow__num">02</span>
              <span aria-hidden="true" class="p-recruit-flow__slash">／</span>
            </div>
            <div class="p-recruit-flow__body">
              <h3 class="p-recruit-flow__step">面接</h3>
              <p class="p-recruit-flow__desc">

              </p>
            </div>
          </div>
        </li>
        <li class="p-recruit-flow__item">
          <div class="p-recruit-flow__row">
            <div class="p-recruit-flow__numWrap">
              <span class="p-recruit-flow__num">03</span>
              <span aria-hidden="true" class="p-recruit-flow__slash">／</span>
            </div>
            <div class="p-recruit-flow__body">
              <h3 class="p-recruit-flow__step">結果</h3>
              <p class="p-recruit-flow__desc">
                おおむね2週間程度で郵送いたします。<br>
                ※勤務開始日はご相談に応じます。
              </p>
            </div>
          </div>
        </li>
      </ol>
    </div>
  </div>
</section>

<section id="recruit-contact" class="p-recruit-contact l-recruit-contact">
  <div class="p-recruit-contact__inner l-inner">
    <div class="p-recruit-contact__head">
      <p class="p-recruit-contact__sub">お問い合わせ</p>
      <h2 class="p-recruit-contact__title">contact</h2>
    </div>

    <div class="p-recruit-contact__body">
      <p class="p-recruit-contact__lead">お電話でご応募ください</p>
      <p class="p-recruit-contact__tel">
        <a href="tel:0364213724">03-6421-3724</a>
      </p>
      <p class="p-recruit-contact__time">
        電話受付時間／平日 8:45〜11:45・13:45〜16:45<br>
        土曜日 8:45〜11:45
      </p>
    </div>
  </div>
</section>


<?php get_footer(); ?>