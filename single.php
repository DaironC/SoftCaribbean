
<?php get_header( 'nohome' ); ?>

<!-- Main -->
<section id="main">
<div class="container">
  <div class="row">
	<div class="col-8 col-12-medium">

		
		<?php if (have_posts()): while (have_posts()): the_post();?>

	<!-- Content -->
	<article class="box post">
	<a href="#" class="image featured">
	
	<?php
	// check if the post has a Post Thumbnail assigned to it.
	if (has_post_thumbnail()) {
		the_post_thumbnail('category-full');
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

	<div class="col-4 col-12-medium">

		<!-- Sidebar -->
		<section class="box">
		

		
			<ul class="divided">
			   <li><a>  <?php get_sidebar(''); ?>   </a> </li>
			</ul> 
				
		</section>

	</div>


</div>
</div>
</section>

<!-- Footer -->
<?php get_footer();?>
