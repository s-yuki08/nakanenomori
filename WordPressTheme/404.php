<?php get_header(); ?>
<?php get_template_part('parts/header-bg') ?>
<section class="p-not-found l-not-found">
  <div class="p-not-found__inner l-inner">
    <div class="p-not-found__content">
      <h2 class="p-not-found__title">404</h2>
      <p class="p-not-found__text">申し訳ありません。<br />お探しのページが見つかりません。</p>
      <div class="p-not-found__button c-button">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <span>TOP</span>
        </a>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>