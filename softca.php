<?php
   /*
     Template Name: intranet
    */
   ?>
<?php get_header('intranet'); ?>
<!-- Main -->
<main id="main">
   <div class="container">
      <div class="row">

<div  class="col-xs-12 col-sm-12 col-md-4">
         <div id="especiales" >
            <h2 class="titulos-intranet ">Fechas Especiales</h2>
            <aside >
               <div class="card text-center" style="margin-bottom:10px;" >
                  <div class="card-header">
                     Feliz Cumpleaños
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Pepito Perez</h5>
                     <img class="icono-login" src="<?php bloginfo('template_directory') ?>/images/img_avatar.png" >
                  </div>
                  <div class="card-footer text-muted">
                     10 de septiembre
                  </div>
               </div>

                 <div class="card text-center" style="margin-bottom:10px;" >
                  <div class="card-header">
                     Feliz Cumpleaños
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Pepito Perez</h5>
                     <img class="icono-login" src="<?php bloginfo('template_directory') ?>/images/img_avatar.png" >
                  </div>
                  <div class="card-footer text-muted">
                     10 de septiembre
                  </div>
               </div>
            </aside>
         </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-8">
            <section class="logos">
            <h2 class="titulos-intranet">Tecnologías</h2>
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col"><img class="card-img-top"  style="width:150px;height:80px;"  src="<?php bloginfo('template_directory') ?>/images/alfresco.png"></th>
                        <th scope="col"><img class="card-img-top" style="width:150px;height:120px;" src="<?php bloginfo('template_directory') ?>/images/Logokuye.png"></th>
                        <th scope="col"><img class="card-img-top"  style="width:150px;height:80px;"  src="<?php bloginfo('template_directory') ?>/images/Sinsajo.png"></th>
                     </tr>
                  </thead>
                  
               </table>
            </section>
            <section class="blog">
               <p>chat foro</p>
            </section>
         </div>
      </div>
   </div>

 <div class="container">
      <div class="row">
<div  class="col">
         <div id="reconocimiento" >
         <table class="table ">
                <thead>
                     <tr>
                       <th> <h4 class="titulos-intranet">Reconocimiento 1</h4></th>    
                       <th> <h4  class="titulos-intranet">Reconocimiento 2</h4></th>      
                       <th> <h4  class="titulos-intranet">Reconocimiento 3</h4></th>       
                    
                    </tr>
                  </thead>
                  <thead>
                     <tr>
                        <th scope="col"><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/reconocimineto-2.png"></th>
                        <th scope="col"><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/reconocimineto-3.png"></th>
                        <th scope="col"><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/reconocimineto-4.png"></th>
                     </tr>
                  </thead>
               </table>
         </div>
         </div>

   </div>
</main>
<?php get_footer('intranet');?>