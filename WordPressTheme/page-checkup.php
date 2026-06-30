<?php get_header(); ?>
<?php get_template_part('parts/header-bg') ?>
<section class="p-checkup l-checkup js-header-height">
  <div class="p-checkup__inner l-inner">
    <div class="p-checkup__wrapper">
      <div class="p-checkup__left">
        <div class="p-checkup__headline">
          <h1 class="p-checkup__title">検診のご案内</h1>
        </div>
        <nav class="p-checkup__nav">
          <ul class="p-checkup__list">
            <li class="p-checkup__item">
              <a href="#generalCheckup">
                <span>一般健診</span>
                <span class="p-checkup__arr"></span>
              </a>
            </li>
            <li class="p-checkup__item">
              <a href="#meguroCheckup">
                <span>目黒区特定健康診査・がん検診</span>
                <span class="p-checkup__arr"></span>
              </a>
            </li>
            <li class="p-checkup__item">
              <a href="#brainDock">
                <span>脳ドック</span>
                <span class="p-checkup__arr"></span>
              </a>
            </li>
            <li class="p-checkup__item">
              <a href="#medicalDock">
                <span>人間ドック</span>
                <span class="p-checkup__arr"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="p-checkup__right">
        <div class="p-checkup__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/checkup_mv.webp" alt="検診のご案内">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 一般健診 -->
<section id="generalCheckup" class="p-generalCheckup l-generalCheckup">
  <div class="p-generalCheckup__inner l-inner">
    <h2 class="p-generalCheckup__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--blue"></span>
      一般健診
    </h2>
    <div class="p-generalCheckup__wrapper">
      <div class="p-generalCheckup__lead">
        <p class="p-generalCheckup__leadText">
          企業などの事業者が常時使用する労働安全衛生法で義務づけている内容の健康診断です。<br>
          企業へ就業、または学校の指示で健康診断書を提出する際の健康診断です。<br>
          健診項目は労働衛生規則(労働安全衛生規則第43条)に基づいた内容となっております。<br>
          健診をご希望の方は、お電話でのご予約をお願いいたします。
        </p>
        <p class="p-generalCheckup__leadText p-generalCheckup__leadText--note">
          ※2025年12月現在、予約外でも受け付けておりますので、ご都合と体調のよい時に当院へお越しください。<br>
          お待たせすることなく、1時間程度で実施いたします。
        </p>
      </div>
      <div class="p-generalCheckup__contents">
        <div class="p-generalCheckup__heading">
          <h3 class="p-generalCheckup__headingTitle">対象者</h3>
        </div>
        <div class="p-generalCheckup__bulletsWrapper">
          <ul class="p-generalCheckup__bullets">
            <li class="p-generalCheckup__bullet"><span class="p-generalCheckup__bulletDot"></span>
              一般健診（雇用時・定期）</li>
            <li class="p-generalCheckup__bullet"><span class="p-generalCheckup__bulletDot"></span>
              雇入時健康診断<br class="u-mobile">（就活中の方・転職の方・入社時の方等）
            </li>
          </ul>
        </div>
        <div class="p-generalCheckup__heading p-generalCheckup__heading--table">
          <h3 class="p-generalCheckup__headingTitle">検査項目</h3>
        </div>

        <div class="p-generalCheckup__tableWrap">
          <div class="p-generalCheckup__tableInner">
            <table class="p-generalCheckup__table">
              <thead>
                <tr>
                  <th scope="col">検査項目</th>
                  <th scope="col">内容</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">健康問診</th>
                  <td>既往歴・喫煙歴・服薬歴・業務歴の調査</td>
                </tr>
                <tr>
                  <th scope="row">医師診察</th>
                  <td>一般診察・自覚症状および他覚症状の有無等</td>
                </tr>
                <tr>
                  <th scope="row">基本検査</th>
                  <td>身長・体重・視力・聴力・腹囲測定・血圧測定</td>
                </tr>
                <tr>
                  <th scope="row">尿検査</th>
                  <td>糖および蛋白の有無</td>
                </tr>
                <tr>
                  <th scope="row">便検査</th>
                  <td>潜血反応の有無</td>
                </tr>
                <tr>
                  <th scope="row">血液検査</th>
                  <td class="p-checkup__cellList">
                    ・白血球/赤血球/血色素量・血小板等の検査<br>
                    ・TP/アルブミン … 栄養状態の判定<br>
                    ・GOT/GPT/γ-GTP・ビリルビン … 肝機能<br>
                    ・血清アミラーゼ … 膵機能<br>
                    ・尿酸・尿素窒素・クレアチニン … 腎機能<br>
                    ・尿酸 … 痛風の判定<br>
                    ・総コレステロール/HDLコレステロール/LDLコレステロール/中性脂肪 … 脂質代謝・動脈硬化の判定<br>
                    ・血糖・HbA1c … 糖尿病の判定<br>
                    ・CRP … 炎症度
                  </td>
                </tr>
                <tr>
                  <th scope="row">胸部X線検査</th>
                  <td>－</td>
                </tr>
                <tr>
                  <th scope="row">心電図検査</th>
                  <td>－</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="p-generalCheckup__heading p-generalCheckup__heading--table">
          <h3 class="p-generalCheckup__headingTitle">費 用</h3>
        </div>
        <div class="p-generalCheckup__priceCardWrapper">
          <div class="p-generalCheckup__priceCard">
            <div class="p-generalCheckup__priceRow">
              <span class="p-generalCheckup__priceLabel">料金</span>
              <span class="p-generalCheckup__priceValue">￥ 10,000 <small>（税別）</small></span>
            </div>
          </div>
          <p class="p-generalCheckup__note">※オプションなど詳細につきましては、お問い合わせください。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 目黒区特定健康診査・がん検診 -->
<section id="meguroCheckup" class="p-generalCheckup l-generalCheckup">
  <div class="p-generalCheckup__inner l-inner">
    <h2 class="p-generalCheckup__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--blue"></span>
      目黒区特定健康診査・がん検診
    </h2>
    <div class="p-generalCheckup__wrapper">
      <div class="p-generalCheckup__lead">
        <p class="p-generalCheckup__leadText">
          目黒区が40歳以上の区民を対象に実施している定期的な健康診断です。<br>
          制度の詳細は目黒区のホームページをご参照ください。<br>
          <a href="https://www.city.meguro.tokyo.jp/kenkousuishin/kenkoufukushi/kenkoushinsa/tokuteikenshin.html" target="_blank" rel="noopener noreferrer" class="p-generalCheckup__link">https://www.city.meguro.tokyo.jp/kenkousuishin/kenkoufukushi/kenkoushinsa/tokuteikenshin.html</a><br>
          胃がん検診、肺がん検診、大腸がん検診、肝炎ウイルス検診も受け付けております。<br>
          （子宮がん検診、眼科検診は専門医療機関をご受診ください。）<br>
          特定健康診査の受診票をお受け取りになられましたら、お電話でのご予約をお願いいたします。
        </p>
        <p class="p-generalCheckup__leadText p-generalCheckup__leadText--note">
          ※2025年12月現在、予約外でも受け付けておりますので、ご都合と体調のよい時に当院へお越しください。<br>
          お待たせすることなく、1時間程度で実施いたします。
        </p>
      </div>
      <div class="p-generalCheckup__contents">
        <div class="p-generalCheckup__heading">
          <h3 class="p-generalCheckup__headingTitle">対象者</h3>
        </div>
        <div class="p-generalCheckup__bulletsWrapper">
          <ul class="p-generalCheckup__bullets">
            <li class="p-generalCheckup__bullet"><span class="p-generalCheckup__bulletDot"></span>
              目黒区に住所を有し、次の①から③のいずれかに該当する方</li>
          </ul>
          <ul class="p-generalCheckup__numberedList">
            <li><span class="p-generalCheckup__num">①</span>年齢40歳以上（4月1日から3月31日までの年度内に40歳以上）で、目黒区国民健康保険に加入している方</li>
            <li><span class="p-generalCheckup__num">②</span>後期高齢者医療制度に加入している方</li>
            <li><span class="p-generalCheckup__num">③</span>年齢40歳以上（4月1日から3月31日までの年度内に40歳以上）で、<br>
              <span class="p-generalCheckup__numIndent">目黒区の生活保護を受給していて、社会保険等の健康保険に加入していない方</span>
            </li>
          </ul>
        </div>
        <div class="p-generalCheckup__heading p-generalCheckup__heading--table">
          <h3 class="p-generalCheckup__headingTitle">検査項目</h3>
        </div>

        <div class="p-generalCheckup__tableWrap">
          <div class="p-generalCheckup__tableInner">
            <table class="p-generalCheckup__table">
              <thead>
                <tr>
                  <th scope="col">検査項目</th>
                  <th scope="col">内容</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">健康問診</th>
                  <td>既往歴・喫煙歴・服薬歴・業務歴の調査</td>
                </tr>
                <tr>
                  <th scope="row">医師診察</th>
                  <td>一般診察・自覚症状および他覚症状の有無等</td>
                </tr>
                <tr>
                  <th scope="row">基本検査</th>
                  <td>身長・体重・視力・聴力・腹囲測定・血圧測定</td>
                </tr>
                <tr>
                  <th scope="row">尿検査</th>
                  <td>糖および蛋白の有無</td>
                </tr>
                <tr>
                  <th scope="row">便検査</th>
                  <td>潜血反応の有無</td>
                </tr>
                <tr>
                  <th scope="row">血液検査</th>
                  <td class="p-checkup__cellList">
                    ・白血球/赤血球/血色素量・血小坂等の検査<br>
                    ・TP/アルブミン・・・栄養状態の判定<br>
                    ・GOT/GPT/y-GTP・ビリルビン・・・肝機能<br>
                    ・血清アミラーゼ・・・膵機能<br>
                    ・尿素窒素・クレアチン・・・腎機能<br>
                    ・尿酸・・・痛風の判定<br>
                    ・総コレステロール/HDLコレステロール/LDLコレステロール/中性脂肪・・・高脂血症の判定<br>
                    ・血糖・HbA1c・・・糖尿病の判定<br>
                    ・CRP・・・炎症度
                  </td>
                </tr>
                <tr>
                  <th scope="row">胸部X線検査</th>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">心電図検査</th>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="p-generalCheckup__heading p-generalCheckup__heading--table">
          <h3 class="p-generalCheckup__headingTitle">費 用</h3>
        </div>
        <div class="p-generalCheckup__priceCardWrapper">
          <div class="p-generalCheckup__priceCard">
            <div class="p-generalCheckup__priceRow">
              <span class="p-generalCheckup__priceLabel">料金</span>
              <span class="p-generalCheckup__priceValue">無料</span>
            </div>
          </div>
        </div>

        <div class="p-generalCheckup__heading p-generalCheckup__heading--table">
          <h3 class="p-generalCheckup__headingTitle">注意事項</h3>
        </div>
        <div class="p-generalCheckup__noticeWrapper">
          <p class="p-generalCheckup__noticeText">
            目黒区から送付された受診券を必ずお持ちください。<br>
            また、受診券に記載された受診項目を確認の上、ご予約をお願い致します。<br>
            受診券の有効期間にご注意ください。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 脳ドック -->
<section id="brainDock" class="p-brainDock l-brainDock">
  <div class="p-brainDock__inner l-inner">
    <h2 class="p-brainDock__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--blue"></span>
      脳ドック
    </h2>
    <div class="p-brainDock__wrapper">
      <div class="p-brainDock__body">
        <p class="p-brainDock__text">
          脳ドックとは、頭部MRIや頸部MRAをおこない、無症状の脳梗塞、小梗塞、くも膜下出血の原因となる<br class="u-desktop">
          未破裂脳動脈瘤や頸動脈の狭窄、脳腫瘍、頸動脈の動脈硬化や狭窄の程度、脳梗塞・血管障害の有無など<br class="u-desktop">
          脳の健康状態をチェックするものです。<br>
          ※MRIおよび脳ドックは、MRIおよび脳ドックは碑文谷病院（当院より1.0km：徒歩15分）で受け付けております。<br>
          <a class="p-brainDock__link" href="https://himonya-hosp.com/aboutexamination/" target="_blank" rel="noopener noreferrer">「脳ドックについて」</a>
        </p>
      </div>
    </div>
    <div class="p-brainDock__contents">
      <div class="p-brainDock__heading">
        <h3 class="p-brainDock__headingTitle">検査項目</h3>
      </div>
      <div class="p-brainDock__tableWrap">
        <div class="p-brainDock__tableInner">
          <table class="p-brainDock__table">
            <thead>
              <tr>
                <th>検査項目</th>
                <th>内容</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>頭部MRI</th>
                <td>－</td>
              </tr>
              <tr>
                <th>頸動脈エコー</th>
                <td>－</td>
              </tr>
              <tr>
                <th>血液検査</th>
                <td>
                  ・TP/アルブミン … 栄養状態の判定<br>
                  ・GOT/GPT/γ-GTP/ビリルビン … 肝機能<br>
                  ・血清アミラーゼ … 膵機能<br>
                  ・尿酸・尿素窒素・クレアチニン … 腎機能<br>
                  ・尿酸 … 痛風の判定<br>
                  ・総コレステロール/HDLコレステロール/LDLコレステロール/中性脂肪 … 脂質代謝・動脈硬化の判定<br>
                  ・血糖/HbA1c … 糖尿病の判定<br>
                  ・CRP … 炎症度
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 人間ドック -->
<section id="medicalDock" class="l-medicalDock p-medicalDock">
  <div class="p-medicalDock__inner l-inner">
    <h2 class="p-medicalDock__title c-section-title">
      <span class="c-section-title__dot c-section-title__dot--blue"></span>
      人間ドック
    </h2>
    <div class="p-medicalDock__wrapper">
      <div class="p-medicalDock__body">
        <p class="p-medicalDock__text">
          現時点での健康状態を把握するためのものです。癌・生活習慣病・動脈硬化疾患を中心にご自身の気づいていない病気を見つけます。年に1回または2回の人間ドックをお受けになる事をおすすめいたします。
        </p>
      </div>
    </div>
    <!-- 検査項目 -->
    <div class="p-medicalDock__contents">
      <div class="p-medicalDock__heading">
        <h3 class="p-medicalDock__headingTitle">検査項目</h3>
      </div>
      <div class="p-medicalDock__tableWrap">
        <div class="p-medicalDock__tableInner">
          <table class="p-medicalDock__table">
            <thead>
              <tr>
                <th scope="col">検査項目</th>
                <th scope="col">内容</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">健康問診</th>
                <td>既往歴・喫煙歴・服薬歴・業務歴の調査</td>
              </tr>
              <tr>
                <th scope="row">医師診察</th>
                <td>一般診察・自覚症状および他覚症状の有無等</td>
              </tr>
              <tr>
                <th scope="row">基本検査</th>
                <td>身長・体重・視力・聴力・腹囲測定・血圧測定</td>
              </tr>
              <tr>
                <th scope="row">眼科検査</th>
                <td>緑内障スクリーニング等</td>
              </tr>
              <tr>
                <th scope="row">便検査</th>
                <td>潜血反応の有無</td>
              </tr>
              <tr>
                <th scope="row">血液検査</th>
                <td>
                  自血球・赤血球・血色素量・血小板等の検査<br>
                  ・TP/アルブミン … 栄養状態の判定<br>
                  ・GOT/GPT/γ-GTP/ビリルビン … 肝機能<br>
                  ・血清アミラーゼ … 膵機能<br>
                  ・尿酸・尿素窒素・クレアチニン … 腎機能<br>
                  ・総コレステロール/HDLコレステロール/LDLコレステロール/中性脂肪 … 脂質代謝・動脈硬化の判定<br>
                  ・血糖/HbA1c … 糖尿病の判定<br>
                  ・CRP … 炎症度
                </td>
              </tr>
              <tr>
                <th scope="row">感染症検査</th>
                <td>梅毒TPHA・HCV抗体・HBs抗原・HIV抗体等</td>
              </tr>
              <tr>
                <th scope="row">CT検査</th>
                <td>胸部・腹部</td>
              </tr>
              <tr>
                <th scope="row">心電図検査</th>
                <td>安静時12誘導</td>
              </tr>
              <tr>
                <th scope="row">腹部超音波</th>
                <td>肝・胆・膵・腎</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="p-medicalDock__heading">
        <h3 class="p-medicalDock__headingTitle">費 用</h3>
      </div>

      <div class="p-medicalDock__priceCardWrapper">
        <div class="p-medicalDock__priceCard">
          <div class="p-medicalDock__priceRow">
            <span class="p-medicalDock__priceLabel">基本コース(日帰り)</span>
            <span class="p-medicalDock__priceValue">￥ 30,000 <small>（税別）</small></span>
          </div>
        </div>
      </div>

      <h3 class="p-medicalDock__optionHeading">
        <span class="p-medicalDock__optionDot"></span>
        追加オプション(要予約)
      </h3>

      <div class="p-medicalDock__priceCardWrapper">
        <div class="p-medicalDock__priceCard">
          <div class="p-medicalDock__priceRow">
            <span class="p-medicalDock__priceLabel">CT（頭部、胸部、腹部骨盤部）</span>
            <span class="p-medicalDock__priceValue">￥ 20,000 <small>（税別）</small></span>
          </div>
        </div>
        <ul class="p-medicalDock__priceCard">
          <li class="p-medicalDock__price">
            <span class="p-medicalDock__priceLabel">腫瘍マーカー<br class="u-mobile">（胃がん/肺がん等）</span>
            <span class="p-medicalDock__priceValue">￥ 15,000 <small>（税別）</small></span>
          </li>
          <li class="p-medicalDock__price">
            <span class="p-medicalDock__priceLabel">上部消化管内視鏡（GF）</span>
            <span class="p-medicalDock__priceValue">￥ 15,000 <small>（税別）</small></span>
          </li>
          <li class="p-medicalDock__price">
            <span class="p-medicalDock__priceLabel">大腸内視鏡（CF）</span>
            <span class="p-medicalDock__priceValue">￥ 20,000 <small>（税別）</small></span>
          </li>
          <li class="p-medicalDock__price">
            <span class="p-medicalDock__priceLabel">MRI</span>
            <span class="p-medicalDock__priceValue">￥ 20,000 <small>（税別）</small></span>
          </li>
          <li class="p-medicalDock__price">
            <span class="p-medicalDock__priceLabel">腸内フローラ</span>
            <span class="p-medicalDock__priceValue">￥ 20,000 <small>（税別）</small></span>
          </li>
          <li class="p-medicalDock__price">
            <span class="p-medicalDock__priceLabel">頸動脈エコー</span>
            <span class="p-medicalDock__priceValue">￥ 10,000 <small>（税別）</small></span>
          </li>
        </ul>
      </div>
      <p class="p-medicalDock__note">
        ※CT、腫瘍マーカー以外の検査は碑文谷病院での施行となります。<br>
        ※他掲載の無いオプションの費用につきましては、詳細お問い合わせください。
      </p>
    </div>
  </div>
</section>


<?php get_footer(); ?>