<?php
/*
Template Name: About
*/
?>

<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 * Set this in settings > reading > static page
 *
 */
get_header();?>
<?php while (have_posts()) : the_post (); ?>
  <?php get_template_part('components/about-me'); ?>
  <?php get_template_part('components/capabilities'); ?>
<?php endwhile; ?>
<?php get_footer(); ?>