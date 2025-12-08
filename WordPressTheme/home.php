<?php
/* Template Name: Home */
get_header();
?>
<?php get_template_part('parts/header-bg') ?>

<section class="p-homeNews l-homeNews">
  <div class="p-homeNews__inner l-inner">
    <div class="p-homeNews__heading c-section-title">
      <div class="c-section-title__dot c-section-title__dot--navy"></div>
      <h2 class="c-section-title__text">最新のお知らせ</h2>
    </div>

    <div class="p-homeNews__wrapper">
      <ol class="p-homeNews__list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li class="p-homeNews__item">
          <a href="<?php the_permalink(); ?>">
            <div class="p-homeNews__article">
              <h3 class="p-homeNews__title"><?php the_title(); ?></h3>
              <time class="p-homeNews__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"
                itemprop="datePublished">
                <?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
              </time>
              <p class="p-homeNews__excerpt">
                <?php
                    $excerpt = get_the_excerpt();
                    if ( empty( $excerpt ) ) {
                      $excerpt = wp_strip_all_tags( get_the_content() );
                    }
                    echo esc_html( mb_strimwidth( $excerpt, 0, 280, '…', 'UTF-8' ) );
                  ?>
              </p>
              <div class="p-homeNews__more">
                <p class="p-homeNews__moreLink">続きを読む<span></span></p>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; else : ?>
        <li class="p-homeNews__item">
          <p class="p-homeNews__empty">現在、表示できるお知らせはありません。</p>
        </li>
        <?php endif; ?>
      </ol>
    </div>

    <div class="p-homeNews__pagenavi pagenavi">
      <div class="p-homeNews__pagenavi-inner l-inner">
        <?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>