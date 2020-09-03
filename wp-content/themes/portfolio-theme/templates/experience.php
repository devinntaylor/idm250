<?php
/*
Template Name: Experience
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
  <?php get_template_part('components/my-experience'); ?>
  <?php get_template_part('components/work'); ?>
<?php endwhile; ?>
<?php get_footer(); ?>