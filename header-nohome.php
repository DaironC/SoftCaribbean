
<!-- header-nohome es la copia de header pero sin el masterslider para las paginas del menu principal  -->

 <!-- en este script se encuentra el encabezado que de el hace parte logo,nav,masterslider,la seccion intro 
 que sus cambios deben hacerse desde codigo ya que no se encuentra dinamico en wordpress en la parte inferior se encuentra comentada unas graficas una posible actualizacion en el futuro  -->
 <html <?php language_attributes() ?> >
   <head>
      <title><?php bloginfo('name');?></title>

   <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/chartist.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/slick.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/tilt.jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/load.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/sweetalert.min.js"></script>
        <script type = "text / javascript" src = "'/assets/js/script.js'"> </script>

        <link rel="stylesheet"href="<?php bloginfo('stylesheet_directory') ?>/assets/css/slick-theme.css"/>
        <link rel="stylesheet"href="<?php bloginfo('stylesheet_directory') ?>/assets/css/bootstrap.min.css"/>
        <link rel="stylesheet"href="<?php bloginfo('stylesheet_directory') ?>/assets/css/slick.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
       
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src ="<?php Bloginfo('stylesheet_directory'); ?> /assets/js/ie/html5shiv.js"></script><![endif]-->
        <?php wp_head(); ?>
        
        <!-- [if lte IE 8]> <link rel = "stylesheet" href = " <?php Bloginfo(' stylesheet_directory '); ?> ! /assets/css/ie8.css" /> <! [Endif] -->
       
    </head>
  
    <body class="homepage is-preload" >

        <div id="page-wrapper" >
            <?php bloginfo('description'); ?> 
            <!-- Header -->
            <img class="fondo1" src="<?php bloginfo('template_directory') ?>/images/fondo1.jpg" >
            <section id="header">


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
                
                <!-- Logo -->
                <!-- codigo para poner dinamico la puesta de una imagen en el encabezado -->
               <div class="header-background" >
                <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 ">
        <!-- Logo -->
          <?php if (get_header_image()) : ?>
                    <div id="site-header">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img id="logo" src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>
                    </div>
         <?php endif; ?>
          </div>
          <div id="display-nav"class="col-sm-12 col-md-12 col-lg-9 col-xl-9">
          <?php
                wp_nav_menu(array(
                    'theme_location' => 'principal',
                    'container' => 'nav',
                    'container_id' => 'nav'));
                ?>
          </div>
        </div>  
                </div>
                </section>
      