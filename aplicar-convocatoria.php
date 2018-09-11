<?php
/*
  Template Name: Aplicar HV
 */
?>
<?php get_header('nohome'); ?>  

<!-- Main -->
<main id="main">
    <div class="container">
    <form action="">
         <div class="card-enviarHV">
         <div style="text-align: center;"><h2>Adjuntar Hoja de Vida</h1></div>
         <div class="row">
            <div class="col-md-4">
            <label for="nombre">¿Cómo te llamas?</label>
            <input class="nombre" id="nombre" type="text" name="nombre" placeholder="Nombre" required>
            <label for="temas">¿Cuales son tus temas de conocimiento?</label>
            <textarea class="temas" id="temas" rows="2" type="text" name="temas" placeholder="Temas"></textarea>
            </div>
            <div class="col-md-4">
            <label for="numero">¿Cúal es tu número telefónico?</label>
            <input class="telefono" id="numero"type="text" name="telefono" placeholder="Telefono" required>
            </div>
            <div class="col-md-4">
            <label for="email">¿Cúal es tu correo electrónico?</label>
            <input class="email" id="email" type="text" name="email" placeholder="e-mail" required>
            </div>
        </div>
         </div>
      </form>
    </div>
</main>

<?php get_footer();?>