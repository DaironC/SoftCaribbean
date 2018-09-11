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
                <div class="headerCardHV" style="text-align: center;">
                    <h2>Enviar Hoja de Vida</h1>
                </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nombre">¿Cómo te llamas?</label>
                            <input class="nombre" id="nombre" type="text" name="nombre" placeholder="Nombre" required>
                            <label for="temas">¿Cuales son tus temas de conocimiento?</label>
                            <textarea class="temas" id="temas" type="text" name="temas" placeholder="Temas"></textarea>
                            <label for="file">Adjuntar Hoja de Vida</label>
                            <input type="file" name="file" id="file" required>
                        </div>
                        <div class="col-md-4">
                            <label for="numero">¿Cúal es tu número telefónico?</label>
                            <input class="telefono" id="numero"type="text" name="telefono" placeholder="Telefono" required>
                            <label for="motivo">¿Por qué quieres trabajar con nosotros?</label>
                            <textarea class="motivo" id="motivo" type="text" name="motivo" placeholder="Motivación"></textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="email">¿Cúal es tu correo electrónico?</label>
                            <input class="email" id="email" type="text" name="email" placeholder="e-mail" required>
                            <label for="profesion">¿Cúal es tu profesión?</label>
                            <input class="profesion" id="profesion" type="text" name="profesion" placeholder="Profesion" required>
                        </div>
                    </div>
                <div class="footerCardHV">
                    <input class="enviar" type="submit" value="Enviar">
                </div>  
            </div>
        </form>
    </div>
</main>

<?php get_footer();?>