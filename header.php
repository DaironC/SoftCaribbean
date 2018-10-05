
 <!-- en este script se encuentra el encabezado que de el hace parte logo,nav,masterslider,la seccion intro 
 que sus cambios deben hacerse desde codigo ya que no se encuentra dinamico en wordpress en la parte inferior se encuentra comentada unas graficas una posible actualizacion en el futuro  -->
 <html <?php language_attributes() ?> >
   <head>
      <title><?php bloginfo('name');?></title>


        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/chartist.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/slick.min.js"></script>
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
                <!--Fin Logo -->
                <!-- Banner -->
                <section id="banners">
                <div class="slider">
   <?php masterslider(1); ?>
            </div>
</section>

<!-- Intro -->
<section class="container" >
    
    <div class="pilar" >
               <h2 class="titulos">En Softcaribbean trabajamos bajo 4 Pilares</h2>
    </div>

        <div class="slick">
    
            <?php query_posts(array(
                "showposts" => 4,//cantidad de entradas en portafolio para mostrar
                "cat"       => 4,//id del canal donde se va mostrar portafolio
            ));
                ?>

            <?php if (have_posts() ) : while(have_posts() ) :the_post(); ?>  

                <div class="card-items" style="margin-left:0.5em; margin-right:0.5em;">
                    <section class="medium">
                
                        <div class="contenedor">
                            <div id="icono">
                                    <?php
                                        // check if the post has a Post Thumbnail assigned to it.
                                        if (has_post_thumbnail()) {
                                        the_post_thumbnail('post-thumbnail',array('class'=>'img-items'));
                                        }
                                        ?>
                            </div>
                        </div>
                    
                        <div>
                            <header class="titulo-items" >
                                <h3><?php the_title();?></h3>
                            </header>
                        </div>   
                    </section>
            
                    <ul class="actions">
                        <li><a href="<?php the_permalink(); ?>" class="button icon fa-file-text">+Información</a></li>
                    </ul>
                </div>
       
                <?php endwhile;?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <h3>No hay nada</h3>
                <?php endif;?>
                <!-- revisar  -->
 
    </div>   
</section>
         <script>   
                    $('.slick').slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        cssEase: 'linear',
                        arrows: true,
                        dots: true,
                        responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                            }
                        }
                        ]
                    });
            
                </script>

                <script>
                    var card =document.getElementsByClassName("card-items");
                    var i;
                    var numIcon=0;
                    
                    for (i = 0; i < card.length; i++) {
                        card[i].addEventListener("mouseover", girar);
                        card[i].addEventListener("mouseout", detener);
                    
                    }

                    function girar(){
                        var icon = this.getElementsByTagName("div")[1];
                        icon.id="girando";
                    
                        
                    }
                    function detener(){
                        var icon = this.getElementsByTagName("div")[1];
                        icon.id="icon";
                        
                    }
                    
                </script>  

                
