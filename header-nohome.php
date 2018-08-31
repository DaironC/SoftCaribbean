
<!-- header-nohome es la copia de header pero sin el masterslider para las paginas del menu principal  -->
<html <?php language_attributes() ?> >
   <head>
      <title><?php bloginfo('name');?></title>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <!--[if lte IE 8]><script src ="<?php  Bloginfo('stylesheet_directory'); ?> /assets/js/ie/html5shiv.js"></script><![endif]-->
      <?php wp_head();?>
      <!-- [if lte IE 8]> <link rel = "stylesheet" href = " <?php Bloginfo ( ' stylesheet_directory ' ); ?> ! /assets/css/ie8.css" /> <! [Endif]  -->
   </head>
   <body class="no-sidebar is-preload">
      <div id="page-wrapper">
            
      <!-- Header -->
      <section id="header">
         <!-- Logo -->
         <?php if ( get_header_image() ) : ?>
         <div id="site-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>
         </div>
         <?php endif; ?>
         <h1><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
         <?php  
            wp_nav_menu( array(
               'theme_location'  => 'principal',
               
               'container'       => 'nav',
               
               'container_id'    => 'nav',
               
            ) );  
            
            ?> 
      </section>
      