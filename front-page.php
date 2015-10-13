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
                      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/src/media/LogoMAQRO.png" />
                  </div>
              </div>
              <div class="col-md-8 maqro-top-body">
                  <div>
                      <h1>El Museo de Arte de Querétaro</h1>
                      <br>
                      <p align="justify">
                      El MAQRO es un museo inclusivo y escenario de una gran variedad de eventos culturales y artísticos: conciertos, conferencias, presentaciones de libros, obras de teatro, además de eventos especiales. Promotor de una gran diversidad de programas educativos dirigidos al público en general, así como de atención especializada a grupos de personas con capacidades diferentes.
                      <br><br>Es una institución que forma parte del Instituto Queretano de la Cultura y las Artes y fue fundado el 22 de septiembre de 1988 en el Exconvento de San Agustín, consolidando su presencia, a lo largo de casi 24 años, como uno de los espacios culturales más importantes de Querétaro.
                      <br/>
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
                      </ol>
                      <div class="carousel-inner">
                          <div class="item active">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/SliderPrincipal/FuenteClaustrodeSanAgustin.jpg"></img>
                          </div>
                          <div class="item">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/SliderPrincipal/EvangelistaSanMarcos.jpg"></img>
                          </div>
                          <div class="item">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/SliderPrincipal/ClaustroAbierto.jpg"></img>
                          </div>
                          <div class="item">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/SliderPrincipal/SalaMuaq.jpg"></img>
                          </div>
                          <div class="item">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/SliderPrincipal/ClaustroBajo.jpg"></img>
                          </div>
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
                      <br>
                      <h2>Dirección</h2>
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
                          <br>
                          <br>
                          <div id="carousel-permanentes" class="carousel slide vertical" data-ride="carousel">
                              <div class="carousel-inner">
                                <?php include("permanentes.php");?>

                              </div>
                          </div>
                          <br>
                          <a href="#carousel-permanentes" role="button" data-slide="prev">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/bottom.png"></img>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-8 maqro-top-body">
                  <h1>Información del MAQRO</h1>
                  <div class="row">
                      <div class="col-md-6">
                          <div>
                              <h2>Entrada Libre:</h2>
                              <ul>
                                  <li>Estudiantes y maestros*</li>
                                  <li>INAPAM*</li>
                                  <li>Membresías*</li>
                                  <li>Empleados de Gobierno del Estado de Querétaro*</li>
                                  <li>Personas con discapacidad</li>
                                  <li>Niños menores de 12 años</li>
                                  <br>
                                  * Presentando credencial vigente
                              </ul>
                              <br>Introducción de cámara de video: $ 15.00
                              <br><br>
                              Introducción de cámara fotográfica: $ 15.00.<br>
                              Sólo se permite la toma fotográfica y de video del claustro, pasillos y exposiciones temporales. (Para fotografías profesionales se requiere de una solicitud y permiso por escrito).
                              <br>Los martes la entrada es libre para todo público.
                          </div>
                          <div>
                              <h2>Restricciones:</h2>
                              <ul>
                                  <li>Prohibido introducir alimentos y bebidas.</li>
                                  <li>Ingreso con bultos o paquetes grandes.</li>
                                  <li>Espacio 100% libre de humo. Prohibido fumar.</li>
                                  <li>Prohibido entrar con mascotas (excepto perros guía).</li>
                                  <li>Toma de fotografías de la colección permanente.</li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div>
                              <h2>Visitas guiadas:</h2>
                              Recorridos por el MAQRO con la guía de un mediador. <br><br>
                              Martes a viernes. Turno Matutino. Previa cita para reservación de grupos en el Departamento de Servicios Educativos (442) 212 23 57 y 212 35 23 (extensión 3) o al correo: maqeducativos@gmail.com<br>
                              <a href="#educacion.php">Mas Informaci&oacute;n</a>
                          </div>
                          <div>
                              <h2>Servicios y Accesibilidad:</h2>
                              Guardarropa. Por seguridad de visitantes y colecciones, los paquetes mayores a 50 cm y sombrillas deberán resguardarse en el guardarropa.<br>
                              Sillas de ruedas. <br>
                              Servicio gratuito en el área de guardarropa.<br>
                              Señalamientos y Cédulas en braille.<br><br>
                              Sanitarios:<br>
                              Planta baja. Servicio disponible para adultos mayores y personas con discapacidad.<br>
                              Planta alta. Para público en general.<br>
                              Elevador Servicio disponible para adultos mayores y personas con discapacidad. Solicitarlo en la taquilla del museo.
                          </div>
                      </div>
                  </div>
                  <hr>
                  <div id="plugins-sociales">
                      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmuseodeartedequeretaro&amp;width&amp;height=300&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:solid; height:400px; width:500px" allowTransparency="false"></iframe>
                  </div>
                  <hr>
                  <?php include("temporales.php");?>


              </div>
          </div>
      </div>
  </div>
  </div>

<?php get_footer();
