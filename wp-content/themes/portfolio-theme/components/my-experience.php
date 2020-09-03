<section class="hero">
  <div class="container hero__content">

  <?php the_post_thumbnail();  ?>

    <?php if (get_field('experience_hero')): ?>
      <h1 class="experience__hero"><?php echo get_field('experience_hero')  ;?></h1>
    <?php endif; ?>

  </div>
</section>