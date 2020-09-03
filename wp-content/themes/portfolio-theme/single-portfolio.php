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
          <?php the_post_thumbnail(); ?>
          <div class="page-builder">
            <?php the_content(); ?>
          </div>
        </div>


        <div class="column column-sidebar">
            <p>Year: <?php the_date('Y') ?> </p>
            <?php if(get_field('project_client')): ?>
            <p><?php the_field('project_client')   ?></p>
            <?php endif; ?>
            <?php if(get_field('technology')): ?>
            <p><?php the_field('technology')   ?></p>
            <?php endif; ?>
            <?php if(get_field('class')): ?>
            <p><?php the_field('class')   ?></p>
            <?php endif; ?>
        </div>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>