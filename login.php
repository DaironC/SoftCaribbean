<?php
/*
  Template Name: Login
 */
?>
<?php get_header('nohome'); ?>
<!-- Main -->
<main id="main">
   <div class="container">
      <form action="">
         <div class="card-login ">
            <img class="icono-login" src="<?php bloginfo('template_directory') ?>/images/icono_login.png" >
            <div class="container">
               <h3 class="inicio-titulo">Inicio de Sesión</h3>
               <h1 class="inicio-titulo">Intranet SoftCaribbean</h1>
               <div class="login col-12">
                  <input class="usuario" type="text" name="Usuario" placeholder="Usuario" required>
                  <input class="clave" type="password" name="Password" placeholder="Contraseña" required>
                  <input class="boton" type="submit" value="Ingresar">
               </div>
            </div>
         </div>
      </form>
   </div>
</main>
  <?php get_footer();?>
      