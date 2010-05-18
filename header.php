<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
  <title>
    <?php if (is_front_page()) { ?>
      <?php bloginfo('description'); ?> — 
    <?php } ?>
    <?php wp_title('—', true, 'right'); ?><?php bloginfo('name'); ?>
  </title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <script type="text/javascript" src="http://use.typekit.com/bei5fmi.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div>
</div>
<div id="wrap">
  <div id="header">
    <div class="inner">
      <div id="logo"><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></div>
      <?php if ( is_home() ) { ?>
        <h1>We design for the web.<br>
        Design that works.</h1>
        <p class="description">We design and build websites and web-apps.</p>
      <?php } ?>
    </div>
  </div>
  <p class="announcement"><span><strong><a href="/design-in-progress">Design in progress</a></strong>. By the way, did we mention we're looking for <a href="/a-better-designer">a better designer</a>.</span></p>