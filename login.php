<?php
/*
  Template Name: Login
 */
?>
<?php get_header('nohome'); ?>
<!-- Main -->
<main id="main">
   <div class="container">
    
         
          <div class="card-login">
            <img class="icono-login" src="<?php bloginfo('template_directory') ?>/images/icono_login.png" >
            <div class="container">
                <h3 class="inicio-titulo">Inicio de Sesión</h3>
               <h1 class="inicio-titulo">Intranet SoftCaribbean</h1>

                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Usuario" id="user" required>
                </div>
                 <div class="form-group">
                  <input class="form-control" type="password" placeholder="Clave" id="pass" required>
                </div>
                
                <input type="submit" value="Ingresar" onclick="valForm()">
            </div>
         </div>
     
   </div>
</main>
 <script type="text/javascript" src="<?php bloginfo('stylesheet_directory')?>/assets/js/login.js"></script>

<?php get_footer();?>
      