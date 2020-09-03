<?php $image = get_field('hero_background'); ?>
<section class="hero" style="background-image: url(<?php echo $image['url']; ?>);">
  <div class="container hero__content">

    <?php if (get_field('hero_heading')): ?>
      <h1 class="hero__heading"><?php echo get_field('hero_heading')  ;?></h1>
    <?php endif; ?>


    <?php if (get_field('hero_intro')): ?>
      <p class="hero__body"><?php echo get_field('hero_intro') ;?></p>
    <?php endif; ?>

    <?php if (get_field('hero_info')): ?>
      <p class="hero__info"><?php echo get_field('hero_info') ;?></p>
    <?php endif; ?>

  </div>
</section>