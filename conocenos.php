<?php
   /*
     Template Name: conocenos
    */
   ?>

<?php get_header( 'nohome' ); ?>

<main id="main">

<div class="card" style="width: 18rem;">
<img class="card-img-top"  style="width:150px;height:80px;"  src="<?php bloginfo('template_directory') ?>/images/DAIRON.jpg">

<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    Juan Cardenas
</button>

<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
<div class="card-body">
       <p>el cambia pantallas</p> 
</div>

</div>  



</main>



<?php get_footer();?>