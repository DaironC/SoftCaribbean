<?php
/*
  Template Name: Ofertas
 */
?>

<?php get_header('nohome'); ?> 

<main id="main">
    <div class="container">
    
        <div class="tab">
            <button class="tablinks" onclick="abrirOferta(event, 'Profesional')" id="mostrar">Profesional</button>
            <button class="tablinks" onclick="abrirOferta(event, 'Aprendiz')">Aprendiz</button>
        </div>
        
        <div id="Profesional" class="tabcontent" style="overflow: scroll; overflow-x:hidden;">
            <div class="card-enviarHV" >
            <?php query_posts(array(
                    "showposts" => 3,//cantidad de ofertas a mostrar
                    "cat"       => 6,//id categoria profesional
                ));?>
                <h3 style="text-align: center; color: #2A3787;">Ofertas Disponibles</h3>
                <?php if (have_posts() ) : while(have_posts() ) :the_post(); ?>
            
                <header class="separador"></header>
                <div class="row">
                
                    <div class="col-md-6" >
                        <h4><a>Cargo:</a></h4>
                        <h3><?php the_title();?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="col-md-6" >
                        <div class="card">
                        <h4>Se requiere de una (1) persona para trabajar en la ciudad de Medellín.</h4>
                        <p><?php 
                         //$post=the_content();
                        
                        ?></p>
                        <a href="enviar-hoja-de-vida" class="button-apply">Aplicar</a>
                        </div>
                    </div>
                </div>
                
                <?php endwhile;?>
            
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <h2>En el momento no hay ofertas</h2>
                <?php endif;?>
            
            </div>
        </div>

        <div id="Aprendiz" class="tabcontent">
            <div class="card-enviarHV" >
                <?php query_posts(array(
                    "showposts" => 3,//cantidad de ofertas a mostrar
                    "cat"       => 7,//id categoria aprendiz
                ));?>

                <?php if (have_posts() ) : while(have_posts() ) :the_post(); ?>
                <header class="separador"></header>
                <div class="row">
                
                    <div class="col-md-6" >
                        <h4><a>Cargo:</a></h4>
                        <h3><?php the_title();?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="col-md-6" >
                        <div class="card">
                            <h4>Se requiere de una (1) persona para trabajar en la ciudad de Medellín.</h4>
                            <!--<button class="button-apply" href="/enviar-hoja-de-vida">Aplicar</button>-->
                            <ul class="actions">
                                <li id="btnAplicar"><a href="enviar-hoja-de-vida" class="button-apply">Aplicar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <h2>En el momento no hay ofertas</h2>
                <?php endif;?>
            </div>
        </div>
    </div>
</main>

<script>
function abrirOferta(evt, tipoOferta) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tipoOferta).style.display = "block";
    evt.currentTarget.className += " active";
}
//Mostrar siempre la pestaña 'profesional' activa
document.getElementById("mostrar").click();
</script>


<?php get_footer();?>