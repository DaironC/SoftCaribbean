<!-- header-intranet para usar en las paginas de intranet  -->
<html <?php language_attributes() ?> >
   <head>
      <title><?php bloginfo('name');?></title>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet"  href="<?php  bloginfo('template_url' ); ?>/assets/css/bootstrap.min.css">
      <script type = "text / javascript" src = "'/assets/js/bootstrap.js'"> </script>
      <!--[if lte IE 8]><script src ="<?php  Bloginfo('stylesheet_directory'); ?> /assets/js/ie/html5shiv.js"></script><![endif]-->
      <?php wp_head();?>
      <!-- [if lte IE 8]> <link rel = "stylesheet" href = " <?php Bloginfo ( ' stylesheet_directory ' ); ?> ! /assets/css/ie8.css" /> <! [Endif]  -->
   </head>
   <body class="no-sidebar is-preload">
      <div id="page-wrapper">
            
      <!-- Header -->
      <section id="header-intranet" >
      <nav class="top-bar">
            <div>
                <ul id="top" class="social">
                    <li ><a class="icon fa-facebook" target="_blank" href="https://www.facebook.com/SomosSoftcaribbean/?hc_ref=ARQbwq8hZi_hNLfPQsht80CVgoeJDFIrJcRqAwD5KtE9ANgSzsBP0Csnik3zfZr175s"><span class="label">Facebook</span></a></li>
                    <li><a class="icon fa-linkedin"target="_blank" href="https://www.linkedin.com/company/softcaribbean/"><span class="label">LinkedIn</span></a></li>
                    <li><a class="icon fa-whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=573016951794&text=Hola%2C%20deseo"><span class="label">whatsapp</span></a></li>               
                    <li><a class="fas fa-user"  href="http://localhost/wordpress/login/"><span class="label"></span></a></li>               
                </ul>
            </div>    
    </nav>
         
        <div class="row">
          <div class="col-4">
        <!-- Logo -->
          <?php if (get_header_image()) : ?>
                    <div id="site-header">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img id="logo-intranet" src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>
                    </div>
         <?php endif; ?>
          </div>
          
          <div class="col-8" >
          <?php
                wp_nav_menu(array(
                    'theme_location' => 'principal-intranet',
                    'container' => 'nav',
                    'container_id' => 'nav-intranet'));
                ?>
          </div>
        </div>

      </section>