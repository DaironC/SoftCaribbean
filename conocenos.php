<?php
   /*
     Template Name: conocenos
    */
   ?>

<?php get_header( 'nohome' ); ?>

<main id="main">


<div class="container">

<div class="reconocimiento">
<div class="row">
   <div class="col-md-3">
      <div class="card">
         <img class="card-img-top"  src="<?php bloginfo('template_directory') ?>/images/DAIRON.jpg">
         <button class=" btn-miembros " type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
         Dairon Correa
         </button>
         <div id="collapsefive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
               <p>Analista Desarrollador de Wappa</p>
               <p>Aficiones</p>
               <p>Su tio
               </p>
            </div>
         </div>
      </div>
   </div>
   


      <div class="col-md-3">
      <div class="card">
         <img class="card-img-top"  style="width:150px;height:80px;"  src="<?php bloginfo('template_directory') ?>/images/cobos.PNG">
         <button class=" btn-miembros " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
         Juan Cobos
         </button>
         <div id="collapse2" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
               <p>Analista Desarrollador de Wappa</p>
               <p>Aficiones</p>
               <p>Su tio
               </p>
            </div>
         </div>
      </div>
   </div>

      <div class="col-md-3">
      <div class="card">
         <img class="card-img-top"  style="width:150px;height:80px;"  src="<?php bloginfo('template_directory') ?>/images/dani.jpg">
         <button class=" btn-miembros " type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
         Daniela Lopera
         </button>
         <div id="collapsetwo" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
               <p>Analista Desarrollador de Wappa</p>
               <p>Aficiones</p>
               <p>Su tio
               </p>
            </div>
         </div>
      </div>
   </div>

      <div class="col-md-3">
      <div class="card">
         <img class="card-img-top"  style="width:150px;height:80px;"  src="<?php bloginfo('template_directory') ?>/images/harwin.PNG">
         <button class=" btn-miembros " type="button" data-toggle="collapse" data-target="#collapseone" aria-expanded="false" aria-controls="collapseone">
         harwin
         </button>
         <div id="collapseone" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
               <p>Analista Desarrollador de Wappa</p>
               <p>Aficiones</p>
               <p>Su tio
               </p>
            </div>
         </div>
      </div>
   </div>




</div>
</div>
</div>
   
</main>

<?php get_footer();?>