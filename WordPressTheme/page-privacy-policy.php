<?php get_header(); ?>
<?php get_template_part('parts/header-bg') ?>

<section class="p-privacy-policy l-privacy-policy js-header-height">
  <div class="p-privacy-policy__inner l-inner">
    <h1 class="p-privacy-policy__title"><?php the_title(); ?></h1>
    <div class="p-privacy-policy__contents">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>