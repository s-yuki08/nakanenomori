<?php get_header(); ?>
<?php get_template_part('parts/header-bg') ?>
<section class="p-not-found l-not-found js-header-height">
  <div class="p-not-found__inner l-inner">
    <div class="p-not-found__content">
      <h1 class="p-not-found__title">404 not found</h1>
      <p class="p-not-found__text">
        お探しのページは見つかりませんでした。<br>
        URLが間違っているか、ページが移動または削除された可能性があります。
      </p>
      <div class="p-not-found__button">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-not-found__link">
          トップページに戻る
        </a>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>