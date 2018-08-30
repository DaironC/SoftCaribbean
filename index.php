 <!-- en este script se encuentra el contenido que muestra portafolio y blogs Softca en la pagina Principal teniendo encuenta que esta en codigo dinamico 
 (query_Post) para wordpress  -->
<?php get_header();?><!--header-->
</section>
<!-- Main -->
<section id="main">
<div class="container">
   <div class="row">
      <div class="col-12">
         <!-- Portfolio -->
         <section>
            <header class="major">
               <h2>My Portafolio</h2>
            </header>
            <div class="row">
               <?php query_posts(array(
                  "showposts" => 3,//cantidad de entradas en portafolio para mostrar
                  "cat"       => 4,//id del canaldonde se va mostrar portafilio
                  
                  ));
                  ?>
               <?php if (have_posts()): while (have_posts()): the_post();?>
               <div class="col-4 col-6-medium col-12-small">
                  <!-- post -->
                  <section class="box">
                     <a href="<?php the_permalink();?>" class="image featured">
                     <?php
                        // check if the post has a Post Thumbnail assigned to it.
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('category-thumb');
                        }
                        ?>
                     </a>
                     <header>
                        <h3>
                           <center><?php the_title();?></center>
                        </h3>
                     </header>
                     <p><?php the_excerpt();?></p>
                     <footer>
                        <ul class="actions">
                           <li><a href="<?php the_permalink();?>" class="button alt">+ Informacion </a></li>
                        </ul>
                     </footer>
                  </section>
               </div >
               <?php endwhile;?>
               <!-- post navigation -->
               <?php else: ?>
               <!-- no posts found -->
               <h3>No hay nada</h3>
               <?php endif;?>
            </div>
      </div>
   </div>
</div>
<br>
<section>	
<center><ul class="actions">
<li><a href="http://localhost:81/softca/category/portafolio/" class="button large">Mas Información</a></li>
</ul>
</footer>
</section>	</center>
<!-- Blog -->
<section>
    <header class="major">
        <h2>Blog Softca</h2>
    </header>
    <div class="container">
        <div class="row">
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
                        the_post_thumbnail('category-thumb');
                    }?> 
                    </a>
                    <header>
                    <h3>
                        <?php the_title();?>
                    </h3>
                    </header>
                    <?php the_excerpt(); ?>
                    <footer>
                        <ul class="actions">
                            <li><a href="<?php the_permalink(); ?>" class="button icon fa-file-text">+Información</a></li>
                    </ul>
                    </footer>
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
</div>
</div>
</div>
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
 
    <?php get_footer();?>