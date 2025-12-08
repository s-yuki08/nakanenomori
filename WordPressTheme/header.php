<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<?php
$home = esc_url( home_url( '/' ) );
$department = esc_url( home_url( '/department/' ) );
$outpatient = esc_url( home_url( '/outpatient/' ) );
$faq_contact = esc_url( home_url( '/faq-contact/' ) );
$hospitalization = esc_url( home_url( '/hospitalization/' ) );
$policy = esc_url( home_url( '/privacy-policy/' ) );
$recruit = esc_url( home_url( '/recruit/' ) );
$about = esc_url( home_url( '/about/' ) );
$checkup = esc_url( home_url( '/checkup/' ) );
$news = esc_url( home_url( '/news/' ) );
?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <main>
    <div class="p-loading l-loading js-loading">
      <div class="p-loading__inner">
        <div class="p-loading__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/loading.svg" alt="なかねの森病院" />
        </div>
        <div class="p-loading__bird">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/loading_bird.svg" alt="鳥">
        </div>
      </div>
    </div>

    <!-- header -->
    <header class="p-header l-header">
      <div class="p-header__inner">
        <h1 class="p-header__logo">
          <a href="<?php echo $home; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="なかねの森病院">
          </a>
        </h1>
        <nav class="p-header__nav">
          <ul class="p-header__nav-list p-header__nav-list--top">
            <li class="p-header__nav-item p-header__nav-item--qa">
              <a href="<?php echo $faq_contact; ?>">よくある質問・お問い合わせ</a>
            </li>
            <li class="p-header__nav-item p-header__nav-item--tel">
              <a href="tel:0364213724">03-6421-3724</a>
            </li>
          </ul>
          <ul class="p-header__nav-list p-header__nav-list--bottom">
            <li class="p-header__nav-item">
              <a href="<?php echo $outpatient; ?>">外来
              </a>
            </li>
            <li class="p-header__nav-item">
              <a href="<?php echo $department; ?>">診療科</a>
            </li>
            <li class="p-header__nav-item">
              <a href="<?php echo $hospitalization; ?>">入院</a>
            </li>
            <li class="p-header__nav-item">
              <a href="<?php echo $about; ?>">当院について</a>
            </li>
            <li class="p-header__nav-item">
              <a href="<?php echo $checkup; ?>">検診</a>
            </li>
            <li class="p-header__nav-item">
              <a href="<?php echo $recruit; ?>">求人情報</a>
            </li>
          </ul>
        </nav>
        <button class="p-header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="p-header__drawer js-drawer">
          <nav class="p-header__drawer-nav">
            <ul class="p-header__drawer-list">
              <li class="p-header__drawer-item">
                <a href="<?php echo $outpatient; ?>">外来</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="<?php echo $department; ?>">診療科</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="<?php echo $hospitalization; ?>">入院</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="<?php echo $about; ?>">当院について</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="<?php echo $checkup; ?>">検診</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="<?php echo $recruit; ?>">求人情報</a>
              </li>

            </ul>
            <ul class="p-header__drawer-list-bottom">
              <li class="p-header__drawer-item-tel">
                <a href="tel:0364213724">03-6421-3724</a>
              </li>
              <li class="p-header__drawer-item-qa">
                <a href="<?php echo $faq_contact; ?>">よくある質問・お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>