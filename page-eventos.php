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
                </div>
                <div class="col-md-8 maqro-top-body">
                    <div>
                        <h1>Eventos</h1>
                        <br>
                        <p align="justify">
                            <br><br>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 inclusive-background">
                    <div id="carousel-main" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <?php
                            $type = 'evento';
                            $args=array(
                              'post_type' => $type,
                              'post_status' => 'publish');

                            $my_query = null;
                            $my_query = new WP_Query($args);
                            if( $my_query->have_posts() ) {
                              $i = -1;
                              while ($my_query->have_posts()) : $my_query->the_post(); $i++;?>

                              <?php if ($i == 0) {
                                echo '<li data-target="#carousel-main" data-slide-to="0" class="active"></li>';
                              } else {
                                echo '<li data-target="#carousel-main" data-slide-to="'.$i.'" ></li>';
                              }?>

                                  <?php
                              endwhile;
                            }
                            wp_reset_query();  // Restore global post data stomped by the_post().
                           ?>
                        </ol>
                        <div class="carousel-inner">
                          <?php
                            $type = 'evento';
                            $args=array(
                              'post_type' => $type,
                              'post_status' => 'publish');

                            $my_query = null;
                            $my_query = new WP_Query($args);
                            if( $my_query->have_posts() ) {
                              $i = 0;
                              while ($my_query->have_posts()) : $my_query->the_post(); $i++;?>

                              <?php if ($i == 1) {
                                echo '<div class="item active">';
                              } else {
                                echo '<div class="item">';
                              }?>
                                    <?php the_post_thumbnail(); ?>
                                  </div>
                                  <?php
                              endwhile;
                            }
                            wp_reset_query();  // Restore global post data stomped by the_post().
                           ?>
                        </div>

                        <a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/left.png"></img>
                        </a>
                        <a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/right.png"></img>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/top.png"></img>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/bottom.png"></img>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 maqro-top-body">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p align="justify">

                        </div>
                        <br>
                        </b>
                        </p>
                        <hr/>
                        <?php include("temporales.php");?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
