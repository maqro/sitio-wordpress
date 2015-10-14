<?php
/**
 * The main template file
 *
 * @package Maqro
 * @since 0.1.0
 */

get_header(); ?>
<?php include("maqroHeader.php");?>
<div>
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="padding:70px 0;">
                    <div class="logo">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/src/media/LogoMAQRO2.png" />
                    </div>
                </div>
                <div class="col-md-8 maqro-top-body">
                    <div>
                        <h1>El Claustro de San Agustín</h1>
                        <p align="justify">
                            El Claustro bajo, representa al mundo terrenal, es decir aquel donde el hombre nace y encuentra el
                            escenario perfecto para su vida. Posee 4 fachadas que observan al patio y cada uno a de ellas se
                            encuentran divididas por 4 arcos; los arcos están sostenidos por soportes cuyo diseño incluye
                            figuras antropomorfas conocidas como Hermes.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 inclusive-background">
                    <div id="carousel-main" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-main" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-main" data-slide-to="1" ></li>
                            <li data-target="#carousel-main" data-slide-to="2" ></li>
                            <li data-target="#carousel-main" data-slide-to="3" ></li>
                            <li data-target="#carousel-main" data-slide-to="4" ></li>
                            <li data-target="#carousel-main" data-slide-to="5" ></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/claustro/DSC_2422.jpg"></img>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/claustro/DSC_2503.jpg"></img>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/claustro/DSC_2513.jpg"></img>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/claustro/ClaustroBarrocoMAQRO.jpg"></img>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/claustro/FuenteFrente.jpg"></img>
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/claustro/Pelicano.jpg"></img>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/left2.png"></img>
                        </a>
                        <a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/right2.png"></img>
                        </a>
                    </div>
                </div>

                <div class="col-md-4" style="padding-top:70px">
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
                    <div>
                        <br>
                        <br>
                        <h1>Colecciones Permanentes</h1>
                        <div style="text-align:center;">
                            <a href="#carousel-permanentes" role="button" data-slide="next">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/top2.png"></img>
                            </a>
                            <br/>
                            <br/>
                            <div id="carousel-permanentes" class="carousel slide vertical" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php include("permanentes.php");?>
                                </div>
                            </div>
                            <br/>
                            <a href="#carousel-permanentes" role="button" data-slide="prev">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/bottom2.png"></img>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 maqro-top-body">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p align="justify">

                        </p>
                        <p align="justify">

                        </p>
                        <hr/>
                        <?php include("temporales.php");?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer();
