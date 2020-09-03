<?php
/*
Template Name: Portfolio Listing
*/
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <?php
        // The Query
        // Link: https://developer.wordpress.org/reference/classes/wp_query/#parameters

      $args = [
        'post_type'      => 'portfolio',
        'post_status'    => 'publish',
        'posts_per_page' => -1
      ];
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
      <div class= "portfolio_content">
          <div class= "portfolio_cards">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="portfolio_image"><?php the_post_thumbnail(); ?></div>
                <p class= "portfolio_excerpt"><?php the_excerpt();?></p>
        </div>
        </div>
      <?php endwhile; ?>
      <?php else : ?>
      <h2>Sorry, no results</h2>
      <?php endif; ?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>