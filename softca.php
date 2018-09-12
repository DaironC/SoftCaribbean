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
         <div class="col-4" id="especiales">
            <h2 class="titulos-intranet">Fechas Especiales</h2>
            <aside >
               <div class="card text-center" >
                  <div class="card-header">
                     Feliz Cumpleaños
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Pepito Perez</h5>
                     <img class="icono-login" src="<?php bloginfo('template_directory') ?>/images/img_avatar.png" >
                     <p class="card-text">Softcaribbean te desa un feliz cumpelaños y que mejores ya que te necistamos para crecer cada día más </p>
                  </div>
                  <div class="card-footer text-muted">
                     10 de septiembre
                  </div>
               </div>
               <div class="card text-center" >
                  <div class="card-header">
                     Feliz Cumpleaños
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Pepito Perez</h5>
                     <img class="icono-login" src="<?php bloginfo('template_directory') ?>/images/img_avatar.png" >
                     <p class="card-text">Softcaribbean te desa un feliz cumpelaños y que mejores ya que te necistamos para crecer cada día más </p>
                  </div>
                  <div class="card-footer text-muted">
                     10 de septiembre
                  </div>
               </div>



               
            </aside>
         </div>
         <div class="col-8">
            <section class="logos">
            <h2 class="titulos-intranet">Tecnologías</h2>
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col"><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/alfresco.png"></th>
                        <th scope="col"><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/alfresco.png"></th>
                        <th scope="col"><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/alfresco.png" a href="http://50.17.197.243:8082/share/page/user/decorrea/dashboard"></a></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row"><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/alfresco.png"></th>
                        <td><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/alfresco.png"></td>
                        <td><img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/alfresco.png"></td>
                     </tr>
                     <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                     </tr>
                  </tbody>
               </table>
            </section>
            <section class="blog">
               <p>chat foro</p>
            </section>
         </div>
      </div>
   </div>
   <div class="container " id="reconocimineto">
      <div class="row">
         <div class="col-4">
            <h4>Reconocimiento 1</h4>
            <p></p>
         </div>
         <div class="col-4">
            <h4>Reconocimiento 2</h4>
         </div>
         <div class="col-4">
            <h4>Reconocimiento 3</h4>
         </div>
      </div>
   </div>
   </div>
</main>
<?php get_footer('intranet');?>