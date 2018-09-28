<!-- en este script se encuentra el contenido que muestra portafolio y blogs Softca en la pagina Principal teniendo encuenta que esta en codigo dinamico 
   (query_Post) para wordpress  -->
   <?php get_header();?><!--header-->

<!-- Main -->
<section id="main">
    <div class="container">
    <!-- mi portafolio -->
        <div class="major">
            <h2>Nuestros Servicios</h2>
        </div>
        <div class="slick2">

            <?php query_posts(array(
                "showposts" => 4,//cantidad de entradas en portafolio para mostrar
                "cat"       => 6,//id del canaldonde se va mostrar portafilio
                
                ));
                ?>
            <?php if (have_posts()): while (have_posts()): the_post();?>
            <div class="card-portafolio" style="margin-left:0.5em; margin-right:0.5em;">

            <section class="medium">
                <div class="contenedor">
                    <div id="icono">
                        <?php
                            // check if the post has a Post Thumbnail assigned to it.
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail',array('class'=>'img-pilar2'));
                            }
                            ?>
                    </div>
                </div>
                <header >
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                </header>
    
                <ul class="actions">
            <li ><a href="http://localhost:81/softca/category/portafolio/" class="button">+Información</a></li>
        </ul>
            </section>
            </div>
            <?php endwhile;?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
            <h3>No hay nada</h3>
            <?php endif;?>
            
            
        </div>
    </div>
        
    </section>

    <!-- Blog -->
    <section>
    <div class="container">
        <div class="pilar" >
            <h2 class="titulos">Blog Softcaribbean</h2>
        </div>
            <div class="row" style="margin-top:5px;">
                <?php query_posts(array(
                    "showposts" => 2,//cantidad de entradas en portafolio para mostrar
                    "cat"       => 5,//id del canal donde se va mostrar portafolio
                
                    ));
                ?>
                <?php if (have_posts() ) : while(have_posts() ) :the_post(); ?>
                    <div class="col-6 col-6-medium col-12-small">
                        <section class="box">
                            <a href="<?php the_permalink(); ?>" class="image featured">
                                <?php
                                // check if the post has a Post Thumbnail assigned to it.
                                if (has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail',array('class'=>'img-blog'));
                                }?> 
                
                                    <div class="box-container">
                                        <header class="accordion">
                                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                        </header>

                                        <div class="box-container panel">
                                        <?= the_excerpt() ?>
                                        </div>
                                    </div>
                        </section>
                    </div>
                    <?php endwhile;?>
                    <!-- post navigation -->
                    <?php else: ?>
                    <!-- no posts found -->
                    <h3>No hay nada</h3>
                    <?php endif;?>
                    <!-- revisar  -->
            </div>
        </div>
    </section>
</section>   
<!-- Código de instalación Cliengo para http://54.242.192.75/ -->
                <script type="text/javascript">(function () {
                var ldk = document.createElement('script');
                ldk.type = 'text/javascript';
                ldk.async = true;
                ldk.src = 'https://s.cliengo.com/weboptimizer/5b857e0fe4b0ae9c80701756/5b857e14e4b0ae9c8070175c.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ldk, s);
                })();</script>

                 <script>   
                    $('.slick2').slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        cssEase: 'linear',
                        dots: true,
                        arrows: true,
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
                            arrows: true,
                            slidesToScroll: 1
                            }
                        }
                        ]
                    });
            
                </script>

                 <script>
                    var acc = document.getElementsByClassName("accordion");
                    var i;
                    var f=0;

                    for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("mouseover", mostrarPanel);
                        acc[i].addEventListener("mouseout", ocultarPanel);

                    }
                    function mostrarPanel(){
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === ""||panel.style.display === "none") panel.style.display = "block";
                            
                    }
                    function ocultarPanel(){
                        this.classList.remove("active");
                        var panel = this.nextElementSibling;                            
                        if (panel.style.display === "block") panel.style.display = "none";
                    }
                </script>
 
    <?php get_footer();?>