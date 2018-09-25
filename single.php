<!-- En single.php encontramos que tambien llamamos la estructura de 
header-nohome pero no son para paginas si no las ENTRADAS que son para Portafolio y Blog Softca 
en wordpres, que ya se encuentra en forma dinamica y en la parte inferior encontramos la sidebar que tambien se puede cambiar desde wordpress  -->
<?php get_header( 'nohome' ); ?>

	<!-- Main -->
	<section id="main">
	<div class="container">
	  <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8">

			
		<?php if (have_posts()): while (have_posts()): the_post();?>

		<!-- Content -->
		<article class="box post">
		<a href="<?php the_permalink();?>" class="image featured">
		
		<?php
        // check if the post has a Post Thumbnail assigned to it.
        if (has_post_thumbnail()) {
			the_post_thumbnail('category-thumb');
        }
        ?>
			</a>
			<header>
			<h2><?php the_title();?></h2>
			</header>

			<p>
			
			<?php the_content();?>

			</p>

			<footer class="comentarios"> </footer>
			<?php comments_template(); ?>


			</article>
			<?php endwhile;?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<h3>No hay nada</h3>
			<?php endif;?>

		</div>

		
</div>
	</section>
	<!-- Fin Sidebar -->

	<!-- Footer -->
<?php get_footer();?>

