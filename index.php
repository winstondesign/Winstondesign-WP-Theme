<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header(); ?>
  <div id="content">
    <div class="inner">
      <div id="c_1">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?> <span class="date"><?php the_time('F jS, Y') ?></span></a></h2>
        <div class="excerpt">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink() ?>" class="continue">Read <?php the_title(); ?></a>
        </div>
      </div>
    <?php endwhile; ?>
    <div class="navigation">
      <div class="previous"><?php next_posts_link('&larr; Older posts') ?></div>
      <div class="next"><?php previous_posts_link('Newer posts &rarr;') ?></div>
    </div>
  <?php else : ?>
    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>
  <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>
