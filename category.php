<?php get_header( 'nohome' );?><!--header-->
</section>
<!-- Main -->
<section id="main">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <!-- Portfolio -->
            <section>
               <header class="major">
                  <h2><?php wp_title();  ?></h2>
               </header>
               <div class="row">
                  <?php $id_categoria = get_query_var('cat' ); ?>
                  <?php query_posts(array(
                     "showposts" => 6,
                     "category__in" =>$id_categoria
                     
                     ));
                     ?>
                     <?php if (have_posts()): while (have_posts()): the_post();?>
                        <div class="col-4 col-6-medium col-12-small">
                         <!-- post -->
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
                        <p><?php the_excerpt();?></p>
                        <footer>
                           <ul class="actions">
                              <li><a href="<?php the_permalink();?>" class="button alt">Find out more</a></li>
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
   </div>
   </section>
   </div>
   </div>
   </div>
</section>

<?php get_footer();?>