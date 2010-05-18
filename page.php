<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header(); ?>
  <div id="content"><div class="inner">
    <div id="c_1">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="entry">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
      <?php edit_post_link('Edit', '<p>', '</p>'); ?>
    <?php endwhile; endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div></div>


<?php get_footer(); ?>
