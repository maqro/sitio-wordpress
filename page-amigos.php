<?php
/**
 * The main template file
 *
 * @package Maqro
 * @since 0.1.0
 */

get_header(); ?>
<?php include("headerSinContacto.php");?>


        <div class="container">
            <div class="row">
                <div class="col-md-4" style="padding:70px 0;">
                    <div class="logo">
                        <?php include("logo.php") ?>
                    </div>
                    <div>
                        <div class="flexible-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.9272832206275!2d-100.393499!3d20.591027000000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2a70016d2f%3A0x3038fd3094e91fa0!2sMuseo+De+Arte+De+Queretaro!5e0!3m2!1ses!2s!4v1415931559420" width="400" height="300" frameborder="0" style="border:0"></iframe>
                        </div>
                        <br><h2>Dirección</h2>
                        Museo de Arte de Querétaro
                        <br>Allende 14 sur, Centro Histórico
                        <br>Querétaro, Qro. México
                        <br>C.P. 76000

                        <h2>Teléfonos</h2>
                        (442) 212 23 57
                        <br>(442) 212 35 23

                        <h2>Horario de servicio</h2>
                        Martes a domingo / 10:00 a 18:00 h.

                        <h2>Admisión</h2>
                        Público: $ 30.00
                    </div>
                </div>
                <div class="col-md-8 maqro-top-body">
                    <div>
                        <h1>Asóciate con el Arte</h1>
                        <br>
                        <p align="justify">
                            Colabora con la Asociación de Amigos del Museo de Arte de Querétaro. Tu membresía te aportará
grandes beneficios. Con tu apoyo contribuyes al desarrollo y a la difusión del arte en Querétaro.
                            <br>
                            <br>
                        </p>
                        <div align="center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/amigos.JPG">
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer();
