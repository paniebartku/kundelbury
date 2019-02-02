<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body>

<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">


<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php
     $custom_logo_id = get_theme_mod( 'custom_logo' );
     $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    
	echo '<img class="" src="'. esc_url( $logo[0] ) .'">';?>

    </a>



<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarText">

<?php

    wp_nav_menu( array(
      'theme_location'    => 'primary',
      'depth'             => 2,
      'container'         => false,
      'container_class'   => false,
      'container_id'      => 'navbarText',
      'menu_class'        => 'navbar-nav mr-auto',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker(),
  ));


  $theme_options = get_option('my_theme_settings');
  $fb_link = $theme_options['facebook'];

  if(!empty($fb_link)){ ?>
  <span class="navbar-text">
    <a href="<?php echo $fb_link; ?>"/><i class="fab fa-facebook-f"></i></a>
  </span>
  <?php } ?>
</div>
</nav>

</div>

