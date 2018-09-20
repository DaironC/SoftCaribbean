
 <!-- en este script se encuentra el encabezado que de el hace parte logo,nav,masterslider,la seccion intro 
 que sus cambios deben hacerse desde codigo ya que no se encuentra dinamico en wordpress en la parte inferior se encuentra comentada unas graficas una posible actualizacion en el futuro  -->
 <html <?php language_attributes() ?> >
   <head>
      <title><?php bloginfo('name');?></title>


        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/chartist.min.js"></script>
        <style src="<?php bloginfo('stylesheet_directory') ?>/assets/css/chartist.min.css"></style>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src ="<?php Bloginfo('stylesheet_directory'); ?> /assets/js/ie/html5shiv.js"></script><![endif]-->
        <?php wp_head(); ?>
        
        <script type = "text / javascript" src = "'/assets/js/script.js'"> </script>

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
                <div class="row">
          <div class="col-3 col-12-medium">
        <!-- Logo -->
          <?php if (get_header_image()) : ?>
                    <div id="site-header">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img id="logo" src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>
                    </div>
         <?php endif; ?>
          </div>
          <div class="col-9 col-12-medium hidden-back" ">
          <?php
                wp_nav_menu(array(
                    'theme_location' => 'principal',
                    'container' => 'nav',
                    'container_id' => 'nav'));
                ?>
          </div>
        </div>


                 
                <!--Fin Logo -->
                
                <!-- Banner -->
                <section id="banners">

                <div class="slider">
   <?php masterslider(4); ?>
            </div>
</section>
<!-- Intro -->
<section id="intro" class="container">
    
<div class="pilar" >
               <h2 class="titulo-pilares">En Softcaribbean trabajamos bajo 4 Pilares </h2>
            </div>
   <div class="row">
      <div class="col-3 col-12-medium ">
         <div class="card-items">
            <section class="medium">
               <i class="icon featured fa-cog"></i>
               <header style="height:50px;">
                  <h3>Gestión del talento humano</h3>
               </header>
               
            </section>
           
            <ul class="actions">
            <li class="botones-items"><a href="http:54.242.192.75/productos/tecnologia/" class="button ">+ Informacion</a></li>
            </ul>
         </div>
      </div>

      <div class="col-3 col-12-medium ">
         <div class="card-items">
            <section >
               <i class="icon featured alt fa-flash"></i>
               <header style="height:50px;">
                  <h3>Definición y Mejora Continua</h3>
               </header>
              
            </section>
            <ul class="actions">
               <li class="botones-items"><a href=" http://54.242.192.75/nosotros-2/calificacion-cmmi/ " class="button">+Informacion</a></li>
            </ul>
         </div>
      </div>


      <div class="col-3 col-12-medium ">
         <div class="card-items">
            <section class="medium">
               <i class="icon featured alt2 fa-star"></i>
               <header style="height:50px;">
                  <h3>Gestión del riesgo</h3>
               </header>
               
            </section>
           
            <ul class="actions">
            <li class="botones-items"><a href=" http://54.242.192.75/nosotros-2/testimonios/" class="button ">+ Informacion</a></li>
       </ul>
         </div>
      </div>

         <div class="col-3 col-12-medium ">
         <div class="card-items">
            <section >
               <i class="icon featured alt fa-flash"></i>
               <header style="height:50px;">
                  <h3>Enfoque social y Desarrollo sostenible</h3>
               </header>
              
            </section>
            <ul class="actions">
               <li class="botones-items"><a href=" http://54.242.192.75/nosotros-2/calificacion-cmmi/ " class="button">+Informacion</a></li>
            </ul>
         </div>
      </div>
   </div>
   </div>
</section>
           