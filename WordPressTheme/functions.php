<?php

function add_custom_scripts() {

  // Google Fonts の追加
  wp_enqueue_style(
      'google-fonts-noto',
      'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap',
      false
  );

  // swiper の CSS
  wp_enqueue_style(
      'swiper',
      'https://unpkg.com/swiper@8/swiper-bundle.min.css',
      false
  );

  // テーマの CSS
  wp_enqueue_style(
      'theme-styles',
      get_theme_file_uri('assets/css/styles.css'),
      false
  );

  // jQuery
  wp_enqueue_script(
      'jquery',
      'https://code.jquery.com/jquery-3.6.0.js',
      array(),
      '3.6.0',
      true
  );

  // GSAP
  wp_enqueue_script(
      'gsap',
      'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
      array('jquery'),
      '3.12.5',
      true
  );

  // Swiper
  wp_enqueue_script(
      'swiper',
      'https://unpkg.com/swiper@8/swiper-bundle.min.js',
      array('jquery'),
      '8.0.0',
      true
  );

  // FontPlus
  wp_enqueue_script(
      'fontplus',
      'https://webfont.fontplus.jp/accessor/script/fontplus.js?~XkTl4Z0djk%3D&box=IFMRvjt4Zgo%3D&aa=1&ab=2',
      array(),
      null,
      false  // フォントは<head>で読み込む方が早い
  );

  // テーマの JS
  wp_enqueue_script(
      'theme-scripts',
      get_theme_file_uri('assets/js/script.js'),
      array('jquery'),
      '1.0.0',
      true
  );
}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );

// crossorigin属性を持つタグに対する対応
function add_rel_preconnect( $html, $handle, $href, $media ) {
    if ( 'google-fonts-montserrat' === $handle || 'google-fonts-noto' === $handle || 'swiper' === $handle ) {
        $html = <<<EOT
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
$html
EOT;
    }
    return $html;
}

add_filter( 'style_loader_tag', 'add_rel_preconnect', 10, 4 );

//「投稿」の名称変更
function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
    }
    function Change_objectlabel() {
    global $wp_post_types;
    $name = 'お知らせ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
    }
    add_action( 'init', 'Change_objectlabel' );
    add_action( 'admin_menu', 'Change_menulabel' );


    function my_home_posts_per_page( $query ) {
        if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
          $query->set( 'posts_per_page', 5 ); // 5記事ずつ
        }
      }
      add_action( 'pre_get_posts', 'my_home_posts_per_page' );

      add_action('acf/init', function () {
  if ( ! function_exists('acf_add_local_field_group') ) return;

  /* -------------------------------
   * 診療科基本情報
   * ----------------------------- */
  acf_add_local_field_group(array(
    'key' => 'group_department_info',
    'title' => '診療科基本情報（Department Info）',
    'fields' => array(
      array(
        'key' => 'field_intro_text',
        'label' => '導入文',
        'name' => 'intro_text',
        'type' => 'textarea',
        'rows' => 6,
        'new_lines' => '',
        'instructions' => '空行で段落を分けられます',
      ),
    ),
    'location' => array(
      array( array('param'=>'post_type','operator'=>'==','value'=>'department') ),
    ),
    'position' => 'normal',
    'menu_order' => 10,
    'active' => true,
  ));

  /* -------------------------------
   * 対象疾患・診療内容
   * ----------------------------- */
  acf_add_local_field_group(array(
    'key' => 'group_disease_info',
    'title' => '対象疾患・診療内容',
    'fields' => array(
      array(
        'key' => 'field_disease_subtitle',
        'label' => 'サブタイトル（緑色）',
        'name' => 'disease_subtitle',
        'type' => 'text',
        'instructions' => '例）内科全般（総合内科専門医、糖尿病専門医が在籍）。改行したい場合は | または ｜ を入力してください。',
      ),
      array(
        'key' => 'field_disease_items',
        'label' => 'アイテム一覧',
        'name' => 'disease_items',
        'type' => 'textarea',
        'rows' => 15,
        'new_lines' => '',
        'instructions' => '空行で区切り。各アイテムの1行目がタイトル、2行目以降が説明文。タイトル内で改行したい場合は | または ｜ を入力してください。',
      ),
    ),
    'location' => array(
      array( array('param'=>'post_type','operator'=>'==','value'=>'department') ),
    ),
    'position' => 'normal',
    'menu_order' => 15,
    'active' => true,
  ));

  /* -------------------------------
   * 診療科スケジュール（Group配下）
   * ----------------------------- */
  acf_add_local_field_group(array(
    'key' => 'group_department_schedule',
    'title' => '診療科スケジュール（Department Schedule）',
    'fields' => array(
      array(
        'key' => 'field_schedule_note',
        'label' => '入力ルール',
        'name'  => '',
        'type'  => 'message',
        'message' => '各曜日に最大2名まで入力可能 ／ 休診：- または空欄',
      ),
      array(
        'key' => 'field_group_am',
        'label' => '午前（AM）',
        'name' => 'group_am',
        'type' => 'group',
        'layout' => 'block',
        'wrapper' => array('width' => 100),
        'sub_fields' => array(
          // ①行目
          array('key'=>'field_am_mon_1','label'=>'月①','name'=>'am_mon_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_tue_1','label'=>'火①','name'=>'am_tue_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_wed_1','label'=>'水①','name'=>'am_wed_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_thu_1','label'=>'木①','name'=>'am_thu_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_fri_1','label'=>'金①','name'=>'am_fri_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_sat_1','label'=>'土①','name'=>'am_sat_1','type'=>'text','wrapper'=>array('width'=>16)),
          // ②行目
          array('key'=>'field_am_mon_2','label'=>'月②','name'=>'am_mon_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_tue_2','label'=>'火②','name'=>'am_tue_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_wed_2','label'=>'水②','name'=>'am_wed_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_thu_2','label'=>'木②','name'=>'am_thu_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_fri_2','label'=>'金②','name'=>'am_fri_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_am_sat_2','label'=>'土②','name'=>'am_sat_2','type'=>'text','wrapper'=>array('width'=>16)),
        ),
      ),
      array(
        'key' => 'field_group_pm',
        'label' => '午後（PM）',
        'name' => 'group_pm',
        'type' => 'group',
        'layout' => 'block',
        'wrapper' => array('width' => 100),
        'sub_fields' => array(
          // ①行目
          array('key'=>'field_pm_mon_1','label'=>'月①','name'=>'pm_mon_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_tue_1','label'=>'火①','name'=>'pm_tue_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_wed_1','label'=>'水①','name'=>'pm_wed_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_thu_1','label'=>'木①','name'=>'pm_thu_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_fri_1','label'=>'金①','name'=>'pm_fri_1','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_sat_1','label'=>'土①','name'=>'pm_sat_1','type'=>'text','wrapper'=>array('width'=>16)),
          // ②行目
          array('key'=>'field_pm_mon_2','label'=>'月②','name'=>'pm_mon_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_tue_2','label'=>'火②','name'=>'pm_tue_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_wed_2','label'=>'水②','name'=>'pm_wed_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_thu_2','label'=>'木②','name'=>'pm_thu_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_fri_2','label'=>'金②','name'=>'pm_fri_2','type'=>'text','wrapper'=>array('width'=>16)),
          array('key'=>'field_pm_sat_2','label'=>'土②','name'=>'pm_sat_2','type'=>'text','wrapper'=>array('width'=>16)),
        ),
      ),
      array(
        'key' => 'field_schedule_hours',
        'label' => '診療時間',
        'name' => 'schedule_hours',
        'type' => 'text',
        'instructions' => '例）午前 9:00〜12:00 ／ 午後14:00〜17:00',
        'placeholder' => '午前 9:00〜12:00 ／ 午後14:00〜17:00',
      ),
    ),
    'location' => array(
      array( array('param'=>'post_type','operator'=>'==','value'=>'department') ),
    ),
    'position' => 'normal',
    'menu_order' => 20,
    'active' => true,
  ));

  /* -------------------------------
   * 医師紹介（Doctor Profiles）
   *  - ラベル（肩書）をACFで入力。デフォ「医師／」
   *  - メッセージ見出しフィールドは無し（固定表示）
   * ----------------------------- */
  acf_add_local_field_group(array(
    'key' => 'group_doctor_profiles',
    'title' => '医師紹介（Doctor Profiles）',
    'fields' => array(
      array(
        'key' => 'field_doc_help',
        'label' => '入力例・注意',
        'name'  => '',
        'type'  => 'message',
        'message' => '未使用の枠は空欄でOK。専門分野の区切りは「／」推奨。',
      ),

      // 医師1
      array('key'=>'field_doctor1_heading','label'=>'医師1','name'=>'','type'=>'accordion','open'=>1),
      array('key'=>'field_doctor1_label','label'=>'医師1_肩書','name'=>'doctor1_label','type'=>'text','default_value'=>'医師／','wrapper'=>array('width'=>30)),
      array('key'=>'field_doctor1_name','label'=>'医師1_名前','name'=>'doctor1_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor1_kana','label'=>'医師1_かな','name'=>'doctor1_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor1_specialty','label'=>'医師1_専門分野','name'=>'doctor1_specialty','type'=>'text','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor1_qualification','label'=>'医師1_経歴・資格','name'=>'doctor1_qualification','type'=>'textarea','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor1_photo','label'=>'医師1_画像','name'=>'doctor1_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium','wrapper'=>array('width'=>40)),
      array('key'=>'field_doctor1_message','label'=>'医師1_メッセ本文','name'=>'doctor1_message','type'=>'textarea','wrapper'=>array('width'=>100)),

      // 医師2
      array('key'=>'field_doctor2_heading','label'=>'医師2','name'=>'','type'=>'accordion','open'=>0),
      array('key'=>'field_doctor2_label','label'=>'医師2_肩書','name'=>'doctor2_label','type'=>'text','default_value'=>'医師／','wrapper'=>array('width'=>30)),
      array('key'=>'field_doctor2_name','label'=>'医師2_名前','name'=>'doctor2_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor2_kana','label'=>'医師2_かな','name'=>'doctor2_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor2_specialty','label'=>'医師2_専門分野','name'=>'doctor2_specialty','type'=>'text','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor2_qualification','label'=>'医師2_経歴・資格','name'=>'doctor2_qualification','type'=>'textarea','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor2_photo','label'=>'医師2_画像','name'=>'doctor2_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium','wrapper'=>array('width'=>40)),
      array('key'=>'field_doctor2_message','label'=>'医師2_メッセ本文','name'=>'doctor2_message','type'=>'textarea','wrapper'=>array('width'=>100)),

      // 医師3
      array('key'=>'field_doctor3_heading','label'=>'医師3','name'=>'','type'=>'accordion','open'=>0),
      array('key'=>'field_doctor3_label','label'=>'医師3_肩書','name'=>'doctor3_label','type'=>'text','default_value'=>'医師／','wrapper'=>array('width'=>30)),
      array('key'=>'field_doctor3_name','label'=>'医師3_名前','name'=>'doctor3_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor3_kana','label'=>'医師3_かな','name'=>'doctor3_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor3_specialty','label'=>'医師3_専門分野','name'=>'doctor3_specialty','type'=>'text','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor3_qualification','label'=>'医師3_経歴・資格','name'=>'doctor3_qualification','type'=>'textarea','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor3_photo','label'=>'医師3_画像','name'=>'doctor3_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium','wrapper'=>array('width'=>40)),
      array('key'=>'field_doctor3_message','label'=>'医師3_メッセ本文','name'=>'doctor3_message','type'=>'textarea','wrapper'=>array('width'=>100)),

      // 医師4
      array('key'=>'field_doctor4_heading','label'=>'医師4','name'=>'','type'=>'accordion','open'=>0),
      array('key'=>'field_doctor4_label','label'=>'医師4_肩書','name'=>'doctor4_label','type'=>'text','default_value'=>'医師／','wrapper'=>array('width'=>30)),
      array('key'=>'field_doctor4_name','label'=>'医師4_名前','name'=>'doctor4_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor4_kana','label'=>'医師4_かな','name'=>'doctor4_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor4_specialty','label'=>'医師4_専門分野','name'=>'doctor4_specialty','type'=>'text','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor4_qualification','label'=>'医師4_経歴・資格','name'=>'doctor4_qualification','type'=>'textarea','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor4_photo','label'=>'医師4_画像','name'=>'doctor4_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium','wrapper'=>array('width'=>40)),
      array('key'=>'field_doctor4_message','label'=>'医師4_メッセ本文','name'=>'doctor4_message','type'=>'textarea','wrapper'=>array('width'=>100)),

      // 医師5
      array('key'=>'field_doctor5_heading','label'=>'医師5','name'=>'','type'=>'accordion','open'=>0),
      array('key'=>'field_doctor5_label','label'=>'医師5_肩書','name'=>'doctor5_label','type'=>'text','default_value'=>'医師／','wrapper'=>array('width'=>30)),
      array('key'=>'field_doctor5_name','label'=>'医師5_名前','name'=>'doctor5_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor5_kana','label'=>'医師5_かな','name'=>'doctor5_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor5_specialty','label'=>'医師5_専門分野','name'=>'doctor5_specialty','type'=>'text','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor5_qualification','label'=>'医師5_経歴・資格','name'=>'doctor5_qualification','type'=>'textarea','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor5_photo','label'=>'医師5_画像','name'=>'doctor5_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium','wrapper'=>array('width'=>40)),
      array('key'=>'field_doctor5_message','label'=>'医師5_メッセ本文','name'=>'doctor5_message','type'=>'textarea','wrapper'=>array('width'=>100)),

      // 医師6
      array('key'=>'field_doctor6_heading','label'=>'医師6','name'=>'','type'=>'accordion','open'=>0),
      array('key'=>'field_doctor6_label','label'=>'医師6_肩書','name'=>'doctor6_label','type'=>'text','default_value'=>'医師／','wrapper'=>array('width'=>30)),
      array('key'=>'field_doctor6_name','label'=>'医師6_名前','name'=>'doctor6_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor6_kana','label'=>'医師6_かな','name'=>'doctor6_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_doctor6_specialty','label'=>'医師6_専門分野','name'=>'doctor6_specialty','type'=>'text','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor6_qualification','label'=>'医師6_経歴・資格','name'=>'doctor6_qualification','type'=>'textarea','wrapper'=>array('width'=>100)),
      array('key'=>'field_doctor6_photo','label'=>'医師6_画像','name'=>'doctor6_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium','wrapper'=>array('width'=>40)),
      array('key'=>'field_doctor6_message','label'=>'医師6_メッセ本文','name'=>'doctor6_message','type'=>'textarea','wrapper'=>array('width'=>100)),
    ),
    'location' => array(
      array( array('param'=>'post_type','operator'=>'==','value'=>'department') ),
    ),
    'position'   => 'normal',
    'menu_order' => 30,
    'active'     => true,
  ));
});


// ===============================
// Staff Page 用 ACF 定義
// ===============================
add_action('acf/init', function () {
  if ( ! function_exists('acf_add_local_field_group') ) return;

  // staff 固定ページID（スラッグ staff のページが存在すれば）
  $staff_page_id = 0;
  if ($p = get_page_by_path('staff')) { $staff_page_id = intval($p->ID); }

  acf_add_local_field_group(array(
    'key'    => 'group_staff_page',
    'title'  => 'スタッフ',
    'fields' => array(

      // ===== 共通メッセージ =====
      array(
        'key'   => 'field_staff_help',
        'label' => '入力ガイド',
        'name'  => '',
        'type'  => 'message',
        'message' => '未使用の枠は空欄でOK。画像は正方形推奨。肩書が空なら表示されません。',
      ),

      // =======================
      // 看護部セクション（#nursing）
      // =======================
      array('key'=>'field_nursing_acc','label'=>'看護部（#nursing）','name'=>'','type'=>'accordion','open'=>1),
      array('key'=>'field_nursing_title','label'=>'見出し（任意）','name'=>'nursing_title','type'=>'text','placeholder'=>'例）看護部スタッフ紹介'),

      // 1〜6人分
      array('key'=>'field_nursing1_acc','label'=>'看護部_スタッフ1','name'=>'','type'=>'accordion','open'=>1),
      array('key'=>'field_nursing1_label','label'=>'肩書','name'=>'nursing1_label','type'=>'text','wrapper'=>array('width'=>30)),
      array('key'=>'field_nursing1_name','label'=>'氏名','name'=>'nursing1_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_nursing1_kana','label'=>'ふりがな','name'=>'nursing1_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_nursing1_message','label'=>'紹介文','name'=>'nursing1_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_nursing1_photo','label'=>'写真','name'=>'nursing1_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_nursing2_acc','label'=>'看護部_スタッフ2','name'=>'','type'=>'accordion'),
      array('key'=>'field_nursing2_label','label'=>'肩書','name'=>'nursing2_label','type'=>'text','wrapper'=>array('width'=>30)),
      array('key'=>'field_nursing2_name','label'=>'氏名','name'=>'nursing2_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_nursing2_kana','label'=>'ふりがな','name'=>'nursing2_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_nursing2_message','label'=>'紹介文','name'=>'nursing2_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_nursing2_photo','label'=>'写真','name'=>'nursing2_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_nursing3_acc','label'=>'看護部_スタッフ3','name'=>'','type'=>'accordion'),
      array('key'=>'field_nursing3_label','label'=>'肩書','name'=>'nursing3_label','type'=>'text'),
      array('key'=>'field_nursing3_name','label'=>'氏名','name'=>'nursing3_name','type'=>'text'),
      array('key'=>'field_nursing3_kana','label'=>'ふりがな','name'=>'nursing3_kana','type'=>'text'),
      array('key'=>'field_nursing3_message','label'=>'紹介文','name'=>'nursing3_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_nursing3_photo','label'=>'写真','name'=>'nursing3_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_nursing4_acc','label'=>'看護部_スタッフ4','name'=>'','type'=>'accordion'),
      array('key'=>'field_nursing4_label','label'=>'肩書','name'=>'nursing4_label','type'=>'text'),
      array('key'=>'field_nursing4_name','label'=>'氏名','name'=>'nursing4_name','type'=>'text'),
      array('key'=>'field_nursing4_kana','label'=>'ふりがな','name'=>'nursing4_kana','type'=>'text'),
      array('key'=>'field_nursing4_message','label'=>'紹介文','name'=>'nursing4_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_nursing4_photo','label'=>'写真','name'=>'nursing4_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_nursing5_acc','label'=>'看護部_スタッフ5','name'=>'','type'=>'accordion'),
      array('key'=>'field_nursing5_label','label'=>'肩書','name'=>'nursing5_label','type'=>'text'),
      array('key'=>'field_nursing5_name','label'=>'氏名','name'=>'nursing5_name','type'=>'text'),
      array('key'=>'field_nursing5_kana','label'=>'ふりがな','name'=>'nursing5_kana','type'=>'text'),
      array('key'=>'field_nursing5_message','label'=>'紹介文','name'=>'nursing5_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_nursing5_photo','label'=>'写真','name'=>'nursing5_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_nursing6_acc','label'=>'看護部_スタッフ6','name'=>'','type'=>'accordion'),
      array('key'=>'field_nursing6_label','label'=>'肩書','name'=>'nursing6_label','type'=>'text'),
      array('key'=>'field_nursing6_name','label'=>'氏名','name'=>'nursing6_name','type'=>'text'),
      array('key'=>'field_nursing6_kana','label'=>'ふりがな','name'=>'nursing6_kana','type'=>'text'),
      array('key'=>'field_nursing6_message','label'=>'紹介文','name'=>'nursing6_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_nursing6_photo','label'=>'写真','name'=>'nursing6_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      // =======================
      // 事務スタッフセクション（#office-staff）
      // =======================
      array('key'=>'field_office_acc','label'=>'事務スタッフ（#office-staff）','name'=>'','type'=>'accordion','open'=>0),
      array('key'=>'field_office_title','label'=>'見出し（任意）','name'=>'office_title','type'=>'text','placeholder'=>'例）事務スタッフ紹介'),

      // 1〜6人
      array('key'=>'field_office1_acc','label'=>'事務_スタッフ1','name'=>'','type'=>'accordion','open'=>1),
      array('key'=>'field_office1_label','label'=>'肩書','name'=>'office1_label','type'=>'text','wrapper'=>array('width'=>30)),
      array('key'=>'field_office1_name','label'=>'氏名','name'=>'office1_name','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_office1_kana','label'=>'ふりがな','name'=>'office1_kana','type'=>'text','wrapper'=>array('width'=>35)),
      array('key'=>'field_office1_message','label'=>'紹介文','name'=>'office1_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_office1_photo','label'=>'写真','name'=>'office1_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_office2_acc','label'=>'事務_スタッフ2','name'=>'','type'=>'accordion'),
      array('key'=>'field_office2_label','label'=>'肩書','name'=>'office2_label','type'=>'text'),
      array('key'=>'field_office2_name','label'=>'氏名','name'=>'office2_name','type'=>'text'),
      array('key'=>'field_office2_kana','label'=>'ふりがな','name'=>'office2_kana','type'=>'text'),
      array('key'=>'field_office2_message','label'=>'紹介文','name'=>'office2_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_office2_photo','label'=>'写真','name'=>'office2_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_office3_acc','label'=>'事務_スタッフ3','name'=>'','type'=>'accordion'),
      array('key'=>'field_office3_label','label'=>'肩書','name'=>'office3_label','type'=>'text'),
      array('key'=>'field_office3_name','label'=>'氏名','name'=>'office3_name','type'=>'text'),
      array('key'=>'field_office3_kana','label'=>'ふりがな','name'=>'office3_kana','type'=>'text'),
      array('key'=>'field_office3_message','label'=>'紹介文','name'=>'office3_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_office3_photo','label'=>'写真','name'=>'office3_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_office4_acc','label'=>'事務_スタッフ4','name'=>'','type'=>'accordion'),
      array('key'=>'field_office4_label','label'=>'肩書','name'=>'office4_label','type'=>'text'),
      array('key'=>'field_office4_name','label'=>'氏名','name'=>'office4_name','type'=>'text'),
      array('key'=>'field_office4_kana','label'=>'ふりがな','name'=>'office4_kana','type'=>'text'),
      array('key'=>'field_office4_message','label'=>'紹介文','name'=>'office4_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_office4_photo','label'=>'写真','name'=>'office4_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_office5_acc','label'=>'事務_スタッフ5','name'=>'','type'=>'accordion'),
      array('key'=>'field_office5_label','label'=>'肩書','name'=>'office5_label','type'=>'text'),
      array('key'=>'field_office5_name','label'=>'氏名','name'=>'office5_name','type'=>'text'),
      array('key'=>'field_office5_kana','label'=>'ふりがな','name'=>'office5_kana','type'=>'text'),
      array('key'=>'field_office5_message','label'=>'紹介文','name'=>'office5_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_office5_photo','label'=>'写真','name'=>'office5_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),

      array('key'=>'field_office6_acc','label'=>'事務_スタッフ6','name'=>'','type'=>'accordion'),
      array('key'=>'field_office6_label','label'=>'肩書','name'=>'office6_label','type'=>'text'),
      array('key'=>'field_office6_name','label'=>'氏名','name'=>'office6_name','type'=>'text'),
      array('key'=>'field_office6_kana','label'=>'ふりがな','name'=>'office6_kana','type'=>'text'),
      array('key'=>'field_office6_message','label'=>'紹介文','name'=>'office6_message','type'=>'wysiwyg','media_upload'=>0),
      array('key'=>'field_office6_photo','label'=>'写真','name'=>'office6_photo','type'=>'image','return_format'=>'array','preview_size'=>'medium'),
    ),

    // ▼ location条件：テンプレートまたは固定ページstaff
    'location' => array(
      array( array('param'=>'page_template','operator'=>'==','value'=>'page-staff.php') ),
      $staff_page_id ? array( array('param'=>'page','operator'=>'==','value'=>$staff_page_id) ) : array(),
    ),
    'position'   => 'normal',
    'style'      => 'default',
    'menu_order' => 10,
    'active'     => true,
  ));
});

// functions.php
add_action('acf/init', function () {
  if (!function_exists('acf_add_local_field_group')) return;

  // 「採用セクション」ページID取得（slugで）
  $settings = get_page_by_path('recruit-section');
  $loc_rule = $settings ? intval($settings->ID) : 0;

  $fields = [];
  for ($i=1; $i<=6; $i++) {
    $fields[] = ['key'=>"f_rec{$i}_acc",'label'=>"募集枠{$i}",'name'=>'','type'=>'accordion','open'=>($i===1)];
    $fields[] = ['key'=>"f_rec{$i}_title",'label'=>"タイトル{$i}",'name'=>"recruit{$i}_title",'type'=>'text','placeholder'=>'例）療養病棟 看護師＜常勤＞'];
    $fields[] = ['key'=>"f_rec{$i}_time",'label'=>"勤務時間{$i}",'name'=>"recruit{$i}_time",'type'=>'textarea','new_lines'=>'br'];
    $fields[] = ['key'=>"f_rec{$i}_salary",'label'=>"給与{$i}",'name'=>"recruit{$i}_salary",'type'=>'textarea','new_lines'=>'br'];
    $fields[] = ['key'=>"f_rec{$i}_holiday",'label'=>"休日休暇{$i}",'name'=>"recruit{$i}_holiday",'type'=>'textarea','new_lines'=>'br'];
    $fields[] = ['key'=>"f_rec{$i}_trans",'label'=>"交通費{$i}",'name'=>"recruit{$i}_trans",'type'=>'textarea','new_lines'=>'br'];
  }

  acf_add_local_field_group([
    'key' => 'group_recruit_section',
    'title' => '募集セクション',
    'fields' => $fields,
    'location' => [
      // 「採用セクション」固定ページにだけ表示
      $loc_rule ? [ ['param'=>'page','operator'=>'==','value'=>$loc_rule] ] : [],
    ],
  ]);
});


// ===============================
// 採用情報ページ用 ACF フィールド定義（無料版対応）
// ===============================
add_action('acf/init', function () {
  if (!function_exists('acf_add_local_field_group')) return;

  $max = 13; // 職種枠の数（必要に応じて変更）

  acf_add_local_field_group(array(
    'key' => 'group_recruit_page',
    'title' => '採用情報（募集職種）',
    'fields' => array_merge(
      array(
        array(
          'key' => 'field_recruit_message',
          'label' => '入力ガイド',
          'name' => '',
          'type' => 'message',
          'message' => '未使用の欄は空欄でOK。入力がない場合は「現在募集しておりません」を表示。',
        ),
      ),
      array_reduce(range(1, $max), function ($carry, $i) {
        $open = ($i === 1) ? 1 : 0;
        $carry[] = array('key'=>"field_job_heading_{$i}",'label'=>"職種{$i}",'name'=>'','type'=>'accordion','open'=>$open,'multi_expand'=>1);
        $carry[] = array('key'=>"field_job_title_{$i}",     'label'=>"職種タイトル", 'name'=>"job_title_{$i}",     'type'=>'text');
        $carry[] = array('key'=>"field_job_time_{$i}",      'label'=>"勤務時間",     'name'=>"job_time_{$i}",      'type'=>'textarea');
        $carry[] = array('key'=>"field_job_salary_{$i}",    'label'=>"給与",         'name'=>"job_salary_{$i}",    'type'=>'textarea');
        $carry[] = array('key'=>"field_job_holiday_{$i}",   'label'=>"休日休暇",     'name'=>"job_holiday_{$i}",   'type'=>'textarea');
        $carry[] = array('key'=>"field_job_transport_{$i}", 'label'=>"交通費",       'name'=>"job_transport_{$i}", 'type'=>'textarea');
        return $carry;
      }, [])
    ),
    'location' => array(
      // グループ1: ページID=30 なら表示（最優先でこれで動くように）
      array(
        array(
          'param' => 'page',
          'operator' => '==',
          'value' => '30', // ← あなたのURLの post=30 に合わせています
        ),
      ),
      // グループ2: 任意でテンプレート一致でも表示（どちらか満たせばOK）
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-recruit.php',
        ),
      ),
    ),
    'position' => 'normal',
    'style' => 'default',
    'active' => true,
  ));
});

// --- CPTスラッグからURLを取得する関数 ---
function get_cpt_link_by_slug( $slug, $post_type = 'department' ) {
  if ( ! $slug || ! $post_type ) {
      return home_url('/'); // 保険
  }

  // スラッグから投稿を取得
  $post = get_page_by_path( $slug, OBJECT, $post_type );

  if ( $post instanceof WP_Post ) {
      return esc_url( get_permalink( $post ) ); // 投稿ページURL
  }

  // 見つからなかった場合はアーカイブへフォールバック
  $archive = get_post_type_archive_link( $post_type );
  return $archive ? esc_url( $archive ) : esc_url( home_url( '/' . $post_type . '/' ) );
}

// 1) FontPLUSを<head>で同期読込（推奨）
add_action('wp_enqueue_scripts', function () {
  $src = 'https://webfont.fontplus.jp/accessor/script/fontplus.js?~XkTl4Z0djk%3D&box=IFMRvjt4Zgo%3D&aa=1&ab=2';
  wp_enqueue_script('fontplus', $src, [], null, false); // false = <head>読込

  // 2) crossoriginを付与（CDNと接続前提のヒントに整合）
  if ( function_exists('wp_script_add_data') ) {
    wp_script_add_data('fontplus', 'crossorigin', 'anonymous');
  }
}, 5);

// 3) 事前接続ヒント（DNS/TLSを先に張る）※<head>に出力
add_action('wp_head', function () {
  echo '<link rel="preconnect" href="https://webfont.fontplus.jp" crossorigin>' . "\n";
  echo '<link rel="dns-prefetch" href="//webfont.fontplus.jp">' . "\n";
}, 1);

add_filter('language_attributes', function ($output) {
  // 管理画面は除外（任意）
  if (is_admin()) return $output;

  // 既に class= があれば追記、無ければ追加
  if (strpos($output, 'class=') !== false) {
    return preg_replace('/class="([^"]*)"/', 'class="$1 is-preload"', $output, 1);
  } else {
    return $output . ' class="is-preload"';
  }
}, 0);