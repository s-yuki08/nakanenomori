<?php get_header(); ?>

<div class="p-header-bg js-header-height"></div>

<main>
  <div class="l-each-department">
    <section id="nursing" class="p-each-department">
      <div class="p-each-department__inner l-inner">
        <h2 class="p-each-department__title">看 護 部</h2>

        <div class="p-each-department__content">
          <p class="p-each-department__text">
            主に療養病床の入院患者様のケアを行なっております。<br>
            一般的な看護業務として、日々の清潔ケアや食事の介助、配薬、喀痰吸引など、<br class="u-desktop">
            患者様が気持ち良く治療を続けられるようお手伝いいたします。
          </p>

          <p class="p-each-department__text">特に、当院では清潔ケアを大切にしております。<br>
            日々の清拭に加えて、体調に問題がなければ週2回以上の入浴を行い、<br class="u-desktop">
            常にお身体が清潔な状態であるように心掛けております。</p>

          <div class="p-each-department__images p-each-department__images--two">
            <div class="p-each-department__image-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/nursing_01.webp" alt="看護ケアの様子">
            </div>
            <div class="p-each-department__image-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/nursing_02.webp" alt="病室の様子">
            </div>
          </div>

          <p class="p-each-department__text">
            また、胃瘻や経鼻胃管から経管栄養をされている方や、<br class="u-desktop">
            CVCやPICCからの中心静脈栄養をされている方の栄養管理も重要視しております。<br>
            単純に栄養剤を投与するのではなく、<br class="u-desktop">
            「患者様の表情に変化がないか」「お腹を下してないか」「点滴を痛がっていないか」など、<br class="u-desktop">
            細かく観察して、身体全体の様子を探りながら患者様ごとに適した<br class="u-desktop">
            投与量や速度を常に検討しています。
          </p>

          <a href="<?php echo home_url('/recruit'); ?>" class="p-each-department__recruit">
            <div class="p-each-department__recruit-text-wrap">
              <p class="p-each-department__recruit-text">なかねの森病院では、<br>一緒に働いてくれる看護師を募集しております。</p>
            </div>
            <div class="p-each-department__recruit-link-wrap">
              <div class="p-each-department__recruit-link-text-wrap">
                <span class="p-each-department__recruit-link-text">詳しくはこちら</span>
              </div>
              <div class="p-each-department__recruit-arrow-wrap">
                <span class="p-each-department__recruit-arrow"></span>
              </div>
            </div>
          </a>
        </div>

      </div>
    </section>

    <section id="radiology" class="p-each-department">
      <div class="p-each-department__inner l-inner">
        <h2 class="p-each-department__title">放 射 線 部</h2>

        <div class="p-each-department__content">
          <p class="p-each-department__text">
            当院には、Canon社製のX線装置（レントゲン）とCT（マルチスライス16列）があり、<br class="u-desktop">
            一般的な内科疾患、整形外科疾患の画像診断が可能です。
          </p>
          <div class="p-each-department__radiology">
            <div class="p-each-department__radiology-left">
              <div class="p-each-department__image-item p-each-department__image-item--radiology-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/xray.webp" alt="X線装置">
              </div>
            </div>
            <div class="p-each-department__radiology-right">
              <div class="p-each-department__image-item p-each-department__image-item--radiology-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ct.webp" alt="CT装置">
              </div>
              <p class="p-each-department__radiology-text">
                画像検査をご希望の方は、<br class="u-desktop">
                内科・総合診療科または整形外科外来へ<br class="u-desktop">
                ご相談ください。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="clinical-engineering" class="p-each-department">
      <div class="p-each-department__inner l-inner">
        <h2 class="p-each-department__title">臨床工学部</h2>
        <div class="p-each-department__content">
          <p class="p-each-department__text">
            専属の臨床工学技士が、人工呼吸器や血液透析器などの高度な医療機器を操作・管理しております。<br>
            また、機器使用中の重症な患者様の病状にも目を配り、何か異常を察知した場合には、治療内容や器械設定の変更を医師と共に検討しています。
          </p>

          <dl class="p-each-department__dl">
            <dt class="p-each-department__dt">・透析業務</dt>
            <dd class="p-each-department__dd">
              当院では血液透析患者様の入院を受け入れており、臨床工学技士が透析医と共に血液透析を実施しております。<br>
              透析患者様に極力負担のかからぬよう、細心の注意を払いながら治療に携わっております。
            </dd>

            <dt class="p-each-department__dt">・人工呼吸器管理</dt>
            <dd class="p-each-department__dd">呼吸療法認定士が在籍しており、呼吸器の動作点検と適切な呼吸器設定の検討を行っております。</dd>

            <dt class="p-each-department__dt">・医療機器管理</dt>
            <dd class="p-each-department__dd">透析器や人工呼吸器、輸液ポンプなど医療機器の点検・整備を行っております。</dd>
          </dl>
        </div>
        <div class="p-each-department__content">
          <div class="p-each-department__images p-each-department__images--ce">
            <div class="p-each-department__image-item p-each-department__image-item--ce">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ce.webp" alt="臨床工学機器">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="rehabilitation" class="p-each-department">
      <div class="p-each-department__inner l-inner">
        <h2 class="p-each-department__title">リハビリテーション科</h2>

        <div class="p-each-department__content">
          <p class="p-each-department__text">
            入院患者様のリハビリテーションは、病床から開始し、<br class="u-desktop">
            関節拘縮や褥創の発生を予防するよう努めております。<br>
            ADL（Activities of Daily Living:日常生活動作）が保たれている場合には、<br class="u-desktop">
            ベッド脇での立位保持訓練や、病棟での歩行訓練を進めたり、<br class="u-desktop">
            リハビリテーション室で負荷を調整した訓練も可能です。
          </p>

          <p class="p-each-department__text">整形外科外来診療と連携し、外来通院患者様のリハビリテーションも行なっております。<br class="u-desktop">
            ご希望の方は、整形外科外来までご相談ください。</p>

          <div class="p-each-department__images p-each-department__images--two">
            <div class="p-each-department__image-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/rehabilitation_01.webp" alt="リハビリテーション室">
            </div>
            <div class="p-each-department__image-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/rehabilitation_02.webp" alt="リハビリ機器">
            </div>
          </div>
          <a href="<?php echo home_url('/recruit'); ?>" class="p-each-department__recruit">
            <div class="p-each-department__recruit-text-wrap">
              <p class="p-each-department__recruit-text">なかねの森病院では、<br>一緒に働いてくれる理学療法士を募集しております。</p>
            </div>
            <div class="p-each-department__recruit-link-wrap">
              <div class="p-each-department__recruit-link-text-wrap">
                <span class="p-each-department__recruit-link-text">詳しくはこちら</span>
              </div>
              <div class="p-each-department__recruit-arrow-wrap">
                <span class="p-each-department__recruit-arrow"></span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section id="pharmacy" class="p-each-department">
      <div class="p-each-department__inner l-inner">
        <h2 class="p-each-department__title">薬 剤 科</h2>

        <div class="p-each-department__content">
          <p class="p-each-department__text">
            薬剤科では、医師が発行した処方箋に基づき、入院患者さまの内服薬と注射薬、外来患者さまの院内処方を調剤しています。<br>
            入院患者さまの処方では、用法・用量と、飲み合わせや配合変化、腎機能に適した投与量か、などを確認した上で配薬しています。<br>
            外来患者さまの院内処方では、一包化や剤型の変更、残薬の調整、院外処方への切り替え等、患者さまやご家族さまのご要望へ柔軟に対応できるよう心がけております。
          </p>
          <p class="p-each-department__text">
            薬の様々な情報を収集・整理し、医師や看護師など他職種と連携することにより、患者さまにとって、より良い薬物療法となるように努めております。
          </p>
          <div class="p-each-department__images p-each-department__images--two">
            <div class="p-each-department__image-item p-each-department__image-item--pharmacy">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pharmacy.webp" alt="薬剤科">
            </div>
            <div class="p-each-department__image-item p-each-department__image-item--pharmacy">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pharmacy2.webp" alt="薬剤科">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="nutrition" class="p-each-department">
      <div class="p-each-department__inner l-inner">
        <h2 class="p-each-department__title">栄 養 科</h2>

        <div class="p-each-department__content">
          <p class="p-each-department__text">
            病院で提供するお食事について、管理栄養士が調理から内容や形態の調整まで一貫して行い、<br class="u-desktop">
            栄養状態を全般的にサポートしております。
          </p>

          <div class="p-each-department__images p-each-department__images--two">
            <div class="p-each-department__image-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/nutrition_01.webp" alt="調理の様子">
            </div>
            <div class="p-each-department__image-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/nutrition_02.webp" alt="厨房">
            </div>
          </div>

          <p class="p-each-department__text">
            経管栄養の方には、お身体の状態に合わせてカロリーや水分量を設定し、<br class="u-desktop">
            それぞれの患者様に最適な製剤を選択して、よりよい栄養管理ができるよう心がけています。
          </p>

          <p class="p-each-department__text">
            医師、看護師、薬剤師、管理栄養士がNST（Nutrition support team:栄養サポートチーム）として<br>
            活動しております。定期的に入院患者様の栄養状態を評価し、栄養管理の方向性を修正していくことで、治療効果の向上を図っています。
          </p>
        </div>
      </div>
    </section>

    <section id="medical-affairs" class="p-each-department">
      <div class="p-each-department__inner l-inner">
        <h2 class="p-each-department__title">医 事 課</h2>

        <div class="p-each-department__content">
          <p class="p-each-department__text">
            医事課の主な業務内容は、受付・外来窓口と、診療費の計算および診療報酬明細書を作成する<br class="u-desktop">
            保険請求を行っています。<br>
            また、診療情報の管理と、各種書類の作成や整理・保管も行なっております。
          </p>

          <div class="p-each-department__images p-each-department__images--two">
            <div class="p-each-department__image-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/medical_office_01.webp" alt="受付窓口">
            </div>
            <div class="p-each-department__image-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/medical_office_02.webp" alt="外来窓口">
            </div>
          </div>

          <p class="p-each-department__text">
            介護認定や保険給付金の書類作成など、外来窓口で受け付けております。<br class="u-desktop">
            その他、事務的な件でお困りの際にもお気軽にご相談ください。
          </p>

          <p class="p-each-department__text">
            来院される患者様やご家族様が、心地良くお過ごしいただけるよう努めてまいりますので、<br class="u-desktop">
            よろしくお願いいたします。
          </p>
        </div>
      </div>
    </section>

    <section class="p-department-link">
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
              // 各部門の一覧（アンカーリンク）
              $divisions = [
                ['id' => 'nursing',             'label' => '看護部'],
                ['id' => 'rehabilitation',      'label' => 'リハビリテーション科'],
                ['id' => 'clinical-engineering', 'label' => '臨床工学部'],
                ['id' => 'radiology',           'label' => '放射線部'],
                ['id' => 'pharmacy',            'label' => '薬剤科'],
                ['id' => 'nutrition',           'label' => '栄養科'],
                ['id' => 'medical-affairs',     'label' => '医事課'],
              ];

              foreach ($divisions as $item) {
                echo '<li class="p-department__item">
                  <a href="#' . esc_attr($item['id']) . '">' .
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
  </div>
</main>

<?php get_footer(); ?>