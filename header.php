<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>
    <title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script> 

<script type="text/javascript"> 
$(window).load(function() {
    $('#slider').nivoSlider({
      effect: 'fade',
      directionNav: false,
      controlNav: false,
      animSpeed: 250
    }); 
}); 
</script>

<script type="text/javascript"> 
$(window).load(function() {
    $('#old_issue').nivoSlider({
      effect: 'fade',
      directionNav: false,
      controlNav: false,
      animSpeed: 100,
      directionNav: true,
    }); 
}); 
</script>

    <?php wp_head(); ?>
</head>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
      z-index: 9999;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>
<body <?php body_class(); ?>>

    <header id="masthead" class="site-header container-fluid" role="banner">
  <?php if ( get_header_image() ) : ?>
        <div class="site-logo container ">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>  
        </div>    
    <?php else :  ?>
        <div class="site-logo container ">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a>
          
        </div>    
  <?php endif; ?>
    </header> 

    <!-- End header -->	

          <!-- Static navbar -->

<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197">

        <div class="container" style="padding-left: 0px;padding-right: 0px;">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div id="navbar" class="navbar-collapse collapse">

            <?php
                    wp_nav_menu( array(
                                    'menu'              => '',
                                    'theme_location'    => 'primary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => '',
                                    'menu_class'        => 'nav navbar-nav navbar ',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                            );
                                        ?>


          </div><!--/.nav-collapse -->

        <div class="search-result  hidden-xs hidden-sm">
            <form role="search" method="get" 
            class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <div>
                  <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
                  <input type="text" value="<?php echo get_search_query(); ?>" class="form-control search-form" name="s" id="s" placeholder="খোঁজ করুন"/>

              </div>
          </form>            
        </div>

        </div><!--/.container-fluid -->
      </nav>

