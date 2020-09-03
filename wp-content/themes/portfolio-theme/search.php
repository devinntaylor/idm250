<?php
get_header();?>
<main class="main-content">
  <!-- Search -->
  <section>
    <form action="/" method="get">
      <label for="searchField"><h1>Search</h1></label>
      <input type="text" name="s" id="searchField" value="<?php the_search_query(); ?>">
      <select name="post_type" id="">
        <option value="" <?php echo $_GET['post_type'] == '' ? 'selected' : ''; ?>>All</option>
        <option value="projects" <?php echo $_GET['post_type'] == 'projects' ? 'selected' : ''; ?>>Projects</option>
        <option value="post" <?php echo $_GET['post_type'] == 'post' ? 'selected' : ''; ?>>Posts</option>
      </select>
      <input type="submit" value="Search">
    </form>
  </section>

  <!-- Results -->
  <section>
    <?php if (have_posts()): ?>
      <ul>
        <?php while (have_posts()) : the_post(); ?>
          <li>
                <h4 class="post_title"><?php the_title(); ?></h4>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <h4>Sorry, there are no results</h4>
    <?php endif; ?>
  </section>

</main>
<?php get_footer(); ?>