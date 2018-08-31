
 <!-- en este script se encuentra el encabezado que de el hace parte logo,nav,masterslider,la seccion intro 
 que sus cambios deben hacerse desde codigo ya que no se encuentra dinamico en wordpress en la parte inferior se encuentra comentada unas graficas una posible actualizacion en el futuro  -->
 <html <?php language_attributes() ?> >
   <head>
      <title><?php bloginfo('name');?></title>


        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/assets/js/chartist.min.js"></script>
        <style src="<?php bloginfo('stylesheet_directory') ?>/assets/css/chartist.min.css"></style>

        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!--[if lte IE 8]><script src ="<?php Bloginfo('stylesheet_directory'); ?> /assets/js/ie/html5shiv.js"></script><![endif]-->
        <?php wp_head(); ?>
        <!-- [if lte IE 8]> <link rel = "stylesheet" href = " <?php Bloginfo(' stylesheet_directory '); ?> ! /assets/css/ie8.css" /> <! [Endif] -->
       
    </head>
    <body class="homepage is-preload">
        <div id="page-wrapper">
            <?php bloginfo('description'); ?> 
            <!-- Header -->
            <section id="header">


                


                <nav class="top-bar">
                    <div class="container-fluid">
                <ul id="top" class="social">
                    <li ><a class="icon fa-facebook" href="https://www.facebook.com/SomosSoftcaribbean/?hc_ref=ARQbwq8hZi_hNLfPQsht80CVgoeJDFIrJcRqAwD5KtE9ANgSzsBP0Csnik3zfZr175s"><span class="label">Facebook</span></a></li>
                    <li><a class="icon fa-linkedin" href="https://www.linkedin.com/company/softcaribbean/"><span class="label">LinkedIn</span></a></li>
                    <li><a class="icon fa-whatsapp" href="https://api.whatsapp.com/send?phone=573016951794&text=Hola%2C%20deseo"><span class="label">whatsapp</span></a></li>               
                </ul>
                </div>    
                <!-- Logo -->
                <!-- codigo para poner dinamico la puesta de una imagen en el encabezado -->
                <?php if (get_header_image()) : ?>
                    <div id="site-header">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        </a>
                    </div>
                <?php endif; ?>

                <h1><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'principal',
                    'container' => 'nav',
                    'container_id' => 'nav',
                ));
                ?>


                 
                <!--Fin Logo -->
                <!-- Banner -->
                <section id="banners">
                <?php echo do_shortcode('[masterslider id="1"]'); ?>
                </section>
                <!-- Intro -->
                <section id="intro" class="container">
                    <div class="row">
                        <div class="col-4 col-12-medium">
                            <section class="medium">
                                <i class="icon featured fa-cog"></i>
                                <header>
                                    <h2>TECNOLOGIAS</h2>
                                </header>
                                <p> Multiple manejo de Lenguajes, base de datos y Framework.</p>
                            </section>

                            <ul class="actions">
                                <li><a href="http:54.242.192.75/productos/tecnologia/" class="button large">+ Informacion</a></li>
                            </ul>

                        </div>
                        <div class="col-4 col-12-medium">
                            <section class="middle">
                                <i class="icon featured alt fa-flash"></i>
                                <header>
                                    <h2>VALORACION</h2>
                                </header>
                                <p>Obtuvimos la valoración CMMI Nivel 5 un logro más hacia la mejora continua.</p>
                            </section>
                            <ul class="actions">
                                <li><a href=" http://54.242.192.75/nosotros-2/calificacion-cmmi/ " class="button large">CMMI Nivel 5</a></li>
                            </ul>
                        </div>
                        <div class="col-4 col-12-medium">
                            <section class="last">
                                <i class="icon featured alt2 fa-star"></i> 
                                <header>
                                    <h2>TESTIMONIOS</h2>
                                </header>
                                <p> Testimonios sobre las experiencias de nuestros clientes </p>
                            </section>
                            <ul class="actions">
                                <li><a href=" http://54.242.192.75/nosotros-2/testimonios/" class="button large">+ Informacion</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--grafica -->
                    <!-- <div class="ct-chart ct-perfect-fourth"></div>
                    
                    <script>
                         var data = {
                            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
                            series: [8, 2, 4, 2, 0]
                         };
           
                       new Chartist.Pie('.ct-chart', data);
           
           
                       let colors = ['#FF5722','#3F51B5','#8BC34A','#FFC107','#E91E63']
                       setTimeout(() => {
                             let pie = document.getElementsByClassName("ct-chart-pie")[0].childNodes;
                             for (pos in pie) {
                               pie[pos].firstChild.style.fill = colors[pos];
                             }
                             
                       }, 1);
                  </script> -->

                    <!--  segunda Grafica 
                            <div class="ct-major-sexto">
                           <script>
                           
                           new Chartist.Bar('.ct-chart', {
                            labels: ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
                            series: [20, 60, 120, 200, 180, 20, 10]
                            }, {
                            distributeSeries: true
                            });
                           </script>
                           </div> -->
                </section>