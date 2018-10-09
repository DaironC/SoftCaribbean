<?php
   /*
     Template Name: conocenos
    */
   ?>

<?php get_header( 'intranet' ); ?>

    
<main id="main">
   <div class="container">

     <div class="">
     <div class="slick4" >
     <?php query_posts(array(
         "showposts" => 4,//cantidad de entradas en portafolio para mostrar
         "cat"       => 7,//id del canal donde se va mostrar portafolio
         ));
         ?>
      <?php if (have_posts() ) : while(have_posts() ) :the_post(); ?>  
      <div class="">
        <div class=" card-contenedor">
          <div class="efecto-carta">
              <div >
                <?php
                    // check if the post has a Post Thumbnail assigned to it.
                    if (has_post_thumbnail()) {
                    the_post_thumbnail('post-thumbnail',array('class'=>'img-box'));
                    }
                    ?>
              </div>
              <div class="content">
                <h2><?php the_title();?></h2>
                <p><?php the_content();?></p>
              </div>
          </div>
        </div>
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

   </div>
</main>

<?php get_footer();?>


  <script>   
                    $('.slick4').slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
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
