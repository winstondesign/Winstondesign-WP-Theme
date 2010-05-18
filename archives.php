<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/* Template Name: Archives */
?>
<?php get_header(); ?>
<div id="content"><div class="inner">
  <div id="c_1">
    <?php get_search_form(); ?>
    <h2>Archives by Month:</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <h2>Archives by Subject:</h2>
    <ul>
      <?php wp_list_categories(); ?>
    </ul>
  </div>
  <?php get_footer(); ?>
</div></div>
<?php get_footer(); ?>
