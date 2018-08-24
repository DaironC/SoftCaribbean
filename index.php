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
                           <li><a href="<?php the_permalink();?>" class="button alt">+ Informacion</a></li>
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
<li><a href="http://localhost:81/softca/category/portafolio/" class="button large">Mas Informacion</a></li>
</ul>
</footer>
</section>	</center>
<!-- Blog -->
<section>
<header class="major">
<h2>The Blog</h2>
</header>
<div class="row">
<?php
   query_posts(array(
   "showposts" => 2,
   "cat"       => 5,
   ));
   ?>
<?php if (have_posts() ) : while(have_posts() ) :the_post(); ?>
<div class="col-6 col-12-small">
<section class="box">
<a href="<?php the_permalink(); ?>" class="image featured">
<?php
   // check if the post has a Post Thumbnail assigned to it.
   if (has_post_thumbnail()) {
       the_post_thumbnail('category-thumb');
   }
   ?> </a>
<header>
<h3><?php the_title();?></h3>
</header>
<?php the_excerpt(); ?>
</a>
<footer>
<ul class="actions">
<li><a href="<?php the_permalink(); ?>" class="button icon fa-file-text">+Informacion</a></li>
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
<!-- <div class="col-6 col-12-small">
   <section class="box">
   <a href="#" class="image featured">
   <?php
      // check if the post has a Post Thumbnail assigned to it.
      if (has_post_thumbnail()) {
      the_post_thumbnail('category-thumb');
      }
      ?>
   </a>
   <header>
   <h3><?php the_title();?></h3>
   
   </header>
   <p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
   <footer>
   <ul class="actions">
   	<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
   	<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
   </ul>
   </footer>
   </section>
   </div>
    -->
</div>
</section>
</div>
</div>
</div>
</section>
<?php get_footer();?>