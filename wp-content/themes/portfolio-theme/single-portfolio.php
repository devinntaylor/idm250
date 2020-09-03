<?php
/**
 * The template for displaying all single-portfolio posts.
 *
 */
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
          <h1 class="post_title"><?php the_title(); ?></h1>
          <!-- <div class="project-image">
          <?php the_post_thumbnail(); ?>
          </div> -->
          <div class="page-builder">
          <div class="content-area">
            <?php the_content(); ?>
            </div>
          </div>
        </div>

  <?php endwhile; ?>
</main>
<?php get_footer(); ?>