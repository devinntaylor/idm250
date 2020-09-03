<section class="hero">
  <div class="container hero__content">

  <?php the_post_thumbnail();  ?>

    <?php if (get_field('about_hero')): ?>
      <h1 class="about__hero"><?php echo get_field('about_hero')  ;?></h1>
    <?php endif; ?>


    <?php if (get_field('about_intro')): ?>
      <p class="intro__body"><?php echo get_field('about_intro') ;?></p>
    <?php endif; ?>

    <?php if (get_field('about_info')): ?>
      <p class="about__info"><?php echo get_field('about_info') ;?></p>
    <?php endif; ?>

    <?php if (get_field('close_heading')): ?>
      <p class="close__heading"><?php echo get_field('close_heading') ;?></p>
    <?php endif; ?>

    <?php if (get_field('about_close')): ?>
      <p class="about__close"><?php echo get_field('about_close') ;?></p>
    <?php endif; ?>

    <?php if (get_field('can_do')): ?>
      <p class="can__do"><?php echo get_field('can_do') ;?></p>
    <?php endif; ?>


  </div>
</section>