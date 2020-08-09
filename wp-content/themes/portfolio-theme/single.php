<?php get_header(); ?>

<main class="main-content">
<?php while (have_posts()) : the_post (); ?>
<div class="container split-sidebar">

<!-- MAIN CONTENT !--> 

<div class="column-main">

<h1 class="post_title"><?php the_title();  ?></h1>

<?php the_post_thumbnail();  ?>

<?php 
$categories = get_the_category();
?>

<p class="post_meta"><?php the_date('n-y') ?> <?php the_category(); ?> </p>

<div class="intro">
    <?php the_excerpt();  ?>
</div>

<div class="page-builder">
    <?php the_content();  ?>
</div>

<?php the_tags();  ?>

</div>
 
<?php get_sidebar(); ?>

</div>
<?php endwhile; ?>
</main>

<?php get_footer(); ?>