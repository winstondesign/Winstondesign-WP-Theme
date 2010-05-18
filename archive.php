<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
  <div id="content"><div class="inner">
    <div id="c_1">
    <?php if (have_posts()) : ?>
      <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <?php /* If this is a category archive */ if (is_category()) { ?>
      <h1><?php single_cat_title(); ?></h1>
      <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
      <h1><?php single_tag_title(); ?></h1>
      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
      <h1>Archive for <?php the_time('F jS, Y'); ?></h1>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <h1>Archive for <?php the_time('F, Y'); ?></h1>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <h1>Archive for <?php the_time('Y'); ?></h1>
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
      <h1>Author Archive</h1>
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h1>Blog Archives</h1>
      <?php } ?>
      <div class="navigation">
        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
      </div>
      <?php while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?> <span class="date"><?php the_time('F jS, Y') ?></span></a></h2>
          <div class="entry">
            <?php the_excerpt('Read the rest of this entry &raquo;'); ?>
          </div>
        </div>
    <?php endwhile; ?>
    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </div>
  <?php else :
    if ( is_category() ) { // If this is a category archive
      printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
    } else if ( is_date() ) { // If this is a date archive
      echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
    } else if ( is_author() ) { // If this is a category archive
      $userdata = get_userdatabylogin(get_query_var('author_name'));
      printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
    } else {
      echo("<h2 class='center'>No posts found.</h2>");
    }
    get_search_form();
  endif;
?>
    </div>
    <?php get_sidebar(); ?>
  </div></div>
<?php get_footer(); ?>
