<?php
/* single.php or single-post.php */
get_header();
?>
<?php get_template_part('parts/header-bg') ?>

<section class="p-news-detail l-news-detail js-header-height">
  <div class="p-news-detail__inner l-inner">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="p-news-detail__heading">
      <h2 id="news-single-title" class="p-news-detail__title"><?php the_title(); ?></h2>
      <div class="p-news-detail__underline" aria-hidden="true"></div>
    </div>
    <article class="p-news-detail__article">
      <time class="p-news-detail__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
        <?php echo esc_html( get_the_date('Y.m.d') ); ?>
      </time>
      <div class="p-news-detail__content">
        <?php the_content(); ?>
      </div>
    </article>
    <div class="p-news-detail__back">
      <?php
    // 常に「お知らせ」一覧へ戻る
    $back_url  = home_url('/news/');
    $back_text = 'お知らせ一覧へ戻る';
  ?>
      <a class="p-news-detail__back-link" href="<?php echo esc_url($back_url); ?>">
        <span class="p-news-detail__back-link-icon">
        </span>
        <span class="p-news-detail__back-link-text"><?php echo esc_html($back_text); ?></span>
      </a>
    </div>


    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>