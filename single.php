<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
  <div id="content">
    <div class="inner">
      <div id="c_1">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <h1><?php the_title(); ?></h1>
      <span class="date"><?php the_time('F jS, Y') ?></span>
      <div class="entry">
        <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
      </div>
    </div>
  <?php comments_template(); ?>
  <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer(); ?>
