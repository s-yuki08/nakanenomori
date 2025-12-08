<?php
$home = esc_url( home_url( '/' ) );
$outpatient = esc_url( home_url( '/outpatient/' ) );
$privacy = esc_url( home_url( '/privacy-policy/' ) );
$department = esc_url( home_url( '/department/' ) );
$faq_contact = esc_url( home_url( '/faq-contact/' ) );
$hospitalization = esc_url( home_url( '/hospitalization/' ) );
$recruit = esc_url( home_url( '/recruit/' ) );
$about = esc_url( home_url( '/about/' ) );
$checkup = esc_url( home_url( '/checkup/' ) );
$news = esc_url( home_url( '/news/' ) );
$privacy_policy = esc_url( home_url( '/privacy-policy/' ) );
$sitemap = esc_url( home_url( '/sitemap/' ) );

?>




<footer class="p-footer l-footer">
  <div class="p-footer__inner l-inner">
    <div class="p-footer__top">
      <div class="p-footer__brand">
        <div class="p-footer__brandHead">
          <a href="<?php echo $home; ?>">
            <figure class="p-footer__logo" aria-hidden="true">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="なかねの森病院" />
            </figure>
          </a>
          <p class="p-footer__tel"><a href="tel:0364213724">03-6421-3724</a></p>
        </div>

        <ul class="p-footer__subLinks u-desktop">
          <li class="p-footer__subLink"><a href="<?php echo $faq_contact; ?>#contact-top">お問い合わせ</a></li>
          <li class="p-footer__subLink"><a href="<?php echo $news; ?>">お知らせ</a></li>
          <li class="p-footer__subLink"><a href="<?php echo $faq_contact; ?>#faq">よくある質問</a></li>
        </ul>
      </div>

      <nav class="p-footer__nav">
        <div class="p-footer__nav-wrap">
          <ul class="p-footer__link">
            <li class="p-footer__item"><a href="<?php echo $outpatient; ?>"><span class="p-footer__circle"></span>
                外来</a>
            </li>
            <li class="p-footer__item"><a href="<?php echo $department; ?>"><span class="p-footer__circle"></span>
                診療科のご案内</a></li>
            <li class="p-footer__item"><a href="<?php echo $hospitalization; ?>"><span class="p-footer__circle"></span>
                入院</a></li>
            <li class="p-footer__item"><a href="<?php echo $about; ?>"><span class="p-footer__circle"></span> 当院について</a>
            </li>
            <li class="p-footer__item"><a href="<?php echo $checkup; ?>"><span class="p-footer__circle"></span> 検診</a>
            </li>
            <li class="p-footer__item"><a href="<?php echo $recruit; ?>"><span class="p-footer__circle"></span> 求人情報</a>
            </li>
            <li class="p-footer__privacy u-mobile">
              <a href="<?php echo $privacy_policy; ?>"><span class="p-footer__circle-gray"></span>プライバシーポリシー</a>
            </li>
          </ul>
          <ul class="p-footer__subLinks u-mobile">
            <li class="p-footer__subLink"><a href="<?php echo $faq_contact; ?>#contact-top">お問い合わせ</a></li>
            <li class="p-footer__subLink"><a href="<?php echo $news; ?>">お知らせ</a></li>
            <li class="p-footer__subLink"><a href="<?php echo $faq_contact; ?>#faq">よくある質問</a></li>
          </ul>
        </div>
        <div class="p-footer__privacy u-desktop">
          <a href="<?php echo $privacy_policy; ?>"><span class="p-footer__circle-gray"></span>プライバシーポリシー</a>
        </div>
      </nav>
    </div>
    <div class="p-footer__bottom">
      <div class="p-footer__copyright">
        <small class="p-footer__copy">Copyright<?php echo date('Y'); ?>
          (C) NAKANENOMORI Hospital All Reserved.</small>
      </div>
    </div>

</footer>

<div class="c-page-top js-page-top">
  <a href="#">
    <span></span>
  </a>
</div>
</main>
<?php wp_footer(); ?>

</body>

</html>