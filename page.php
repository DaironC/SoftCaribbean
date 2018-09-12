<!-- Page.php es el contenido de las paginas como header-nohome nos da la estructura page daria el contenido pero aqui ya se encuentra en codigo dinamico
para que sea crea o modifique desde wordpress las paginas-->
<?php get_header('nohome'); ?>
<!-- Main -->
<main id="main">
    <div class="container">
        <!-- Content -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- post -->
        <article class="box post">
            <a href="<?php the_permalink();?>" class="image featured"></a>
                <?php
        // check if the post has a Post Thumbnail assigned to it.
                if (has_post_thumbnail()) {
                    the_post_thumbnail('category-thumb');
                }
                ?>
                <header>
                    <h2>
                        <?php the_title(); ?>
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
</main>

<?php get_footer(); ?>