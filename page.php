<?php get_header( 'nohome' ); ?>
<?php get_custom_header()?>
<!-- Main -->
<section id="main">
   <div class="container">
      <!-- Content -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- post -->
      <article class="box post">
         <a href="#" class="image featured"><img src="<?php bloginfo('template_directory') ?>/images/nosotros.jpg" alt="" /></a>
         <header>
            <h2>
               <center><?php the_title(); ?></center>
            </h2>
         </header>
         <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <p>No Hay Nada Para Mostrar</p>
      <?php endif; ?>
   </div>
</section>
<?php get_footer(); ?>