<?php get_header(); ?>
<?php get_template_part('parts/header-bg') ?>
<section class="p-checkup l-checkup js-header-height">
  <div class="p-checkup__inner l-inner">
    <div class="p-checkup__wrapper">
      <div class="p-checkup__left">
        <div class="p-checkup__headline">
          <h2 class="p-checkup__title">検診のご案内</h2>
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/checkup_mv.png" alt="検診のご案内">
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
          企業などの事業者が常時使用する労働安全衛生法で義務づけている内容の健康診断です。<br>
          企業へ就業、または学校の指示で健康診断書を提出する際の健康診断です。<br>
          健診項目は労働衛生規則（労働安全衛生規則第43条）に基づいた内容となっております。
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
          ※MRIおよび脳ドックは、提携する放射線科での検査となります。
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
      <div class="p-brainDock__heading">
        <h3 class="p-brainDock__headingTitle">費用</h3>
      </div>
      <div class="p-brainDock__priceCardWrapper">
        <div class="p-brainDock__priceCard">
          <div class="p-brainDock__priceRow">
            <span class="p-brainDock__priceLabel">料金</span>
            <span class="p-brainDock__priceValue">￥ 30,000 <small>（税別）</small></span>
          </div>
        </div>
        <p class="p-brainDock__note">※オプションなど詳細につきましては、お問い合わせください。</p>
        <div class="p-brainDock__alertWrapper">
          <div class="p-brainDock__alertWrapperInner">
            <div class="p-brainDock__alert">
              <h4 class="p-brainDock__alertTitle">MRI検査を受けるときのご注意</h4>
              <p class="p-brainDock__alertText">
                MRIで使われる磁石や電波は、通常は人体への影響はありません。ただし、次のような方はMRI検査を受けられないことがありますので、担当医または検査担当者にあらかじめお知らせください。
              </p>
              <ul class="p-brainDock__alertList">
                <li class="p-brainDock__alertItem">・心臓ペースメーカーや刺激電極などを身につけている方
                </li>
                <li class="p-brainDock__alertItem">・体内に脳動脈クリップや人工関節などの金属が埋め込まれている方
                </li>
                <li class="p-brainDock__alertItem">・以前に外科手術を受けたことがある方
                </li>
                <li class="p-brainDock__alertItem">・妊婦、または妊娠されている可能性がある方
                </li>
                <li class="p-brainDock__alertItem">・閉所恐怖症など、狭いところが苦手な方
                </li>
                <li class="p-brainDock__alertItem">・喘息(ぜんそく)にかかったことのある方、またはアレルギー体質の方
                </li>
                <li class="p-brainDock__alertItem">・造影剤を投与された後に、気分が悪くなったり、じんましんが出たりすることがあります。
                </li>
                <li class="p-brainDock__alertItem">・このような異常を感じた時には、すぐに検査担当者にお知らせください。
                </li>
              </ul>
            </div>
          </div>
          <div class="p-brainDock__heading">
            <h3 class="p-brainDock__headingTitle p-brainDock__headingTitle--middle">MRI検査前の準備</h3>
          </div>
          <div class="p-brainDock__leadWrapper">
            <p class="p-brainDock__lead2">
              次の物は、故障したり、検査に影響したりすることがあります。検査前に必ず取り外しておいてください。
            </p>
          </div>
          <div class="p-brainDock__tableWrap">
            <div class="p-brainDock__tableInner">
              <table class="p-brainDock__table">
                <tbody>
                  <tr>
                    <th>金属類</th>
                    <td>時計、メガネ、ライター、金具、アクセサリー類など</td>
                  </tr>
                  <tr>
                    <th>磁気カード</th>
                    <td>キャッシュカード、テレフォンカード、クレジットカード、定期券など</td>
                  </tr>
                  <tr>
                    <th>その他</th>
                    <td>取り外しのできる義歯、湿布薬、コンタクトレンズ、補聴器、カイロ、ベルト、エレキバン、ニトロダーム、金属のついた下着、義足、義手など<br>
                      ※化粧品(アイシャドウ等)の中には、金属を含んでいるものがありますので、<br>
                      検査前に落としてください。検査前に所定の検査衣に着替えてから、検査室に入ります。</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="p-brainDock__heading">
            <h3 class="p-brainDock__headingTitle p-brainDock__headingTitle--middle">MRI検査の流れ</h3>
          </div>
          <div class="p-brainDock__flow-wrapper">
            <div class="p-brainDock__flow-inner">
              <p class="p-brainDock__flow-text">
                MRI検査の流れとポイントをお伝えいたします。
              </p>
              <ol class="p-brainDock__flow-list">
                <li>MRIの検査時間は全部で20〜30分程度です。</li>
                <li>検査装置は検査室の中央にあります。検査担当者の指示に従って、検査台の上に寝てください。</li>
                <li>身体の位置が決まったら、検査台が自動的に装置の円筒内に入っていきます。</li>
                <li>検査が始まる時には、担当者がその都度マイクでお知らせします。</li>
                <li>検査中は検査担当者とマイクを通して話すことができます。<br>気分が悪くなったりした時には、マイクを通して検査担当者にお知らせください。
                </li>
                <li>検査中は、木槌で木をたたくような連続音が周囲にから聞こえてきます。<br>
                  多少うるさく感じるかもしれませんが、検査中は身体を動かすことなく辛抱してください。</li>
              </ol>
            </div>
          </div>

          <!-- 補足 -->
          <div class="p-brainDock__heading">
            <h3 class="p-brainDock__headingTitle p-brainDock__headingTitle--long">基本コースとオプション</h3>
          </div>
          <div class="p-brainDock__leadWrapper">
            <p class="p-brainDock__lead2">基本コースの他に追加オプションも随時相談を受け付けています。</p>
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
        <div class="p-medicalDock__priceCard">
          <div class="p-medicalDock__priceRow">
            <span class="p-medicalDock__priceLabel">基本コース(一泊)</span>
            <span class="p-medicalDock__priceValue">￥ 68,000 <small>（税別）</small></span>
          </div>
        </div>
      </div>

      <h3 class="p-medicalDock__optionHeading">
        <span class="p-medicalDock__optionDot"></span>
        追加オプション(要予約)
      </h3>

      <div class="p-medicalDock__priceCardWrapper">
        <ul class="p-medicalDock__priceCard">
          <li class="p-medicalDock__price">
            <span class="p-medicalDock__priceLabel">腫瘍マーカー<br class="u-mobile">（胃がん/肺がん等）
              <br>上部消化管内視鏡（GF）</span>
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
        ※他掲載の無いオプションの費用につきましては、詳細お問い合わせください。</b>
      </p>
    </div>
  </div>
</section>


<?php get_footer(); ?>