<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
  <div id="footer">
    <div class="inner">
      <div class="column">
      <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar(2) ) : ?>
      <?php endif; ?>
      </div>
      <div class="column">
      <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar(3) ) : ?>
      <?php endif; ?>
      </div>
      <div class="column last">
      <?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar(4) ) : ?>
      <?php endif; ?>
      </div>
    </div>
    <div class="inner">
    <?php if ( !function_exists('dynamic_sidebar')
    || !dynamic_sidebar(5) ) : ?>
    <?php endif; ?>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/hashgrid.js"> </script>
</body>
</html>
