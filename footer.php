<?php
/**
 * The template for displaying the footer.
 *
 * @package Maqro
 * @since 0.1.0
 */
?>
<?php $pagename = get_query_var('pagename');
if ( !$pagename && $id > 0 ) {
	// If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object
	$post = $wp_query->get_queried_object();
	$pagename = $post->post_name;
} ?>
<?php if($pagename == "educacion") { ?>
	<footer>
	        <div class="container">
	            <div class="row" style="background-color:#9A9493;padding:70px;">
								<div align="center">
                                            <h2 id="contacto">Programa tu Visita Guiada</h2><br>
                                        </div>
	                <div class="col-md-2">
	                </div>
	                <div class="col-md-8" style="color: white;">
	                    <?php echo do_shortcode( '[contact-form-7 id="45" title="Contact Educacion"]' ); ?>
	                </div>
	                <div class="col-md-2">
	                </div>
	            </div>
	            <div class="logoGob" align="center">
									<?php include("logos.php"); ?>
	                <!-- <img src="media/logosGobierno2.png" /> -->
	            </div>
	        </div>
	        <!-- Latest compiled and minified JavaScript -->
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	        <script src="http://www.jscache.com/wejs?wtype=socialButtonRate&amp;uniq=998&amp;locationId=2315125&amp;color=white&amp;reviewCountRequested=true&amp;lang=es&amp;display_version=2"></script>
	        <script>
	            $(function(){

	                $(document).on( 'scroll', function(){

	                    if ($(window).scrollTop() > 1500) {
	                        $('.scroll-top-wrapper').addClass('show');
	                    } else {
	                        $('.scroll-top-wrapper').removeClass('show');
	                    }
	                });

	                $('.scroll-top-wrapper').on('click', scrollToTop);
	            });

	            function scrollToTop() {
	                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	                element = $('body');
	                offset = element.offset();
	                offsetTop = offset.top;
	                $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
	            }
	        </script>
	    </footer>
	    <div class="container">
	        <div class="registro">
	            <font color="#2F2523">Museo de Arte de Queretaro. ® 2015.</font>
	        </div>
	    </div>
	    <div class="scroll-top-wrapper ">
	        <span class="scroll-top-inner">
	            <i class="fa fa-3x fa fa-chevron-up"></i>
	        </span>
	    </div>
<?php }else if($pagename == "voluntariado") { ?>
	<footer>
        <div class="container">
            <div class="row" style="background-color:#9A9493;padding:70px;">
                <div class="col-md-4">
                    <div id="TA_certificateOfExcellence966" class="TA_certificateOfExcellence" align="center">
                        <ul id="wBDcQZ1zCcZ" class="TA_links b3usllerZh3">
                            <li id="g2yjFnGboJK" class="FeUO3q">
                                <a target="_blank" href="http://www.tripadvisor.com.mx/"><img src="http://www.tripadvisor.com.mx/img/cdsi/img2/awards/CoE2014_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
                            </li>
                        </ul>
                    </div>
                    <script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=966&amp;locationId=2315125&amp;lang=es_MX&amp;year=2014&amp;display_version=2"></script>

<!--
                    <div id="plugins-sociales">
                        <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmuseodeartedequeretaro&amp;width&amp;height=300&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:400px;" allowTransparency="true"></iframe>
                    </div>
-->
                </div>
                <div class="col-md-8">
                    <div class="row" style="padding-bottom:5em;">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div>
																<div class="form-group">
																		<div align="center">
																				<h2 id="contacto">Contacto</h2>
																		</div>
																		<?php echo do_shortcode( '[contact-form-7 id="47" title="Contact Voluntariado"]' ); ?>
																</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>

                </div>
                <div class="logoGob" align="center">
										<?php include("logos.php"); ?>
                    <!-- <img src="media/logosGobierno2.png" /> -->
                </div>
            </div>
        </div>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="http://www.jscache.com/wejs?wtype=socialButtonRate&amp;uniq=998&amp;locationId=2315125&amp;color=white&amp;reviewCountRequested=true&amp;lang=es&amp;display_version=2"></script>
        <script>
            $(function(){

                $(document).on( 'scroll', function(){

                    if ($(window).scrollTop() > 1500) {
                        $('.scroll-top-wrapper').addClass('show');
                    } else {
                        $('.scroll-top-wrapper').removeClass('show');
                    }
                });

                $('.scroll-top-wrapper').on('click', scrollToTop);
            });

            function scrollToTop() {
                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                element = $('body');
                offset = element.offset();
                offsetTop = offset.top;
                $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
            }
        </script>
    </footer>
    <div class="container">
        <div class="registro">
            <font color="#2F2523">Museo de Arte de Queretaro. ® 2015.</font>
        </div>
    </div>
    <div class="scroll-top-wrapper ">
        <span class="scroll-top-inner">
            <i class="fa fa-3x fa fa-chevron-up"></i>
        </span>
    </div>

<?php }else if($pagename == "amigos") { ?>
	<footer>
	        <div class="container">
	            <div class="row" style="background-color:#9A9493;padding:70px;">
								<div align="center">
																					<h2 id="contacto">Formulario</h2><br>
																			</div>
	                <div class="col-md-2">
	                </div>
	                <div class="col-md-8" style="color: white;">
	                    <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact Amigos"]' ); ?>
	                </div>
	                <div class="col-md-2">
	                </div>
	            </div>
	            <div class="logoGob" align="center">
									<?php include("logos.php"); ?>
	                <!-- <img src="media/logosGobierno2.png" /> -->
	            </div>
	        </div>
	        <!-- Latest compiled and minified JavaScript -->
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	        <script src="http://www.jscache.com/wejs?wtype=socialButtonRate&amp;uniq=998&amp;locationId=2315125&amp;color=white&amp;reviewCountRequested=true&amp;lang=es&amp;display_version=2"></script>
	        <script>
	            $(function(){

	                $(document).on( 'scroll', function(){

	                    if ($(window).scrollTop() > 1500) {
	                        $('.scroll-top-wrapper').addClass('show');
	                    } else {
	                        $('.scroll-top-wrapper').removeClass('show');
	                    }
	                });

	                $('.scroll-top-wrapper').on('click', scrollToTop);
	            });

	            function scrollToTop() {
	                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	                element = $('body');
	                offset = element.offset();
	                offsetTop = offset.top;
	                $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
	            }
	        </script>
	    </footer>
	    <div class="container">
	        <div class="registro">
	            <font color="#2F2523">Museo de Arte de Queretaro. ® 2015.</font>
	        </div>
	    </div>
	    <div class="scroll-top-wrapper ">
	        <span class="scroll-top-inner">
	            <i class="fa fa-3x fa fa-chevron-up"></i>
	        </span>
	    </div>
<?php  } else { ?>
<footer>
	<div class="container">
			<div class="row" style="background-color:#9A9493;padding:70px;">
					<div class="col-md-4">
							<div id="TA_certificateOfExcellence966" class="TA_certificateOfExcellence" align="center">
									<ul id="wBDcQZ1zCcZ" class="TA_links b3usllerZh3">
											<li id="g2yjFnGboJK" class="FeUO3q">
													<a target="_blank" href="http://www.tripadvisor.com.mx/"><img src="http://www.tripadvisor.com.mx/img/cdsi/img2/awards/CoE2014_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
											</li>
									</ul>
							</div>
							<script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=966&amp;locationId=2315125&amp;lang=es_MX&amp;year=2014&amp;display_version=2"></script>


					</div>
					<div class="col-md-8">
							<font color="#55393A" size=8>Museo de Arte de Querétaro</font>
							<div class="row" style="padding-bottom:5em;">
									<div class="col-md-6">
											<font color="white">
													<ul><h2>• Misión</h2></ul>
													Resguardar, conservar y promover el arte plástico queretano, mexicano e internacional, así como difundir las diversas manifestaciones artísticas y culturales para fomentar la cultura y propiciar la consolidación de los valores del patrimonio cultural de nuestro país.
													<ul><h2>• Visión</h2></ul>
													Es un espacio queretano que da cabida a cualquier expresión de las artes plásticas, exhibiendo obra de artistas mexicanos, entre los que deberá representar las manifestaciones artísticas de los queretanos, no significando una limitante para exhibir diversas corrientes, tanto nacionales como extranjeras. El Museo tiene una vocación educativa y social por lo deberá promover el acercamiento al arte entre la población diversificando sus programas y actividades para dar cabida a la cultura a cualquier sector de la sociedad.
													<ul><h2>• Valores</h2></ul>
													Calidad en el servicio, sensibilidad social, trabajo en equipo, eficacia y eficiencia, respeto, comunicación, inclusión, dinamismo y creatividad.
											</font>
									</div>
									<div class="col-md-6">
											<div>
															<div class="form-group row">
																	<h2 id="contacto">Contacto</h2>
																	<?php echo do_shortcode( '[contact-form-7 id="26" title="Contact Main"]' ); ?>
																	<!-- <table style="color:white">
																			<tr>
																					<td>
																							<label for="inputNombre" class="control-label">Nombre:* </label>
																					</td>
																					<td>
																							<input type="text" class="form-control input-sm" name="inputNombre" placeholder="__________________________________________________________________">
																					</td>
																			</tr>
																			<tr>
																					<td>
																							<label for="inputInfoDe" class="control-label">Info de: </label>
																					</td>
																					<td>
																							<select class="form-control input-sm" name="inputInfoDe">
																									<option>Educación</option>
																									<option>Exposiciones</option>
																									<option>Eventos</option>
																									<option>Servicios</option>
																							</select>
																					</td>
																			</tr>
																			<tr>
																					<td>
																							<label for="inputCiudad" class="control-label">Ciudad:* </label>
																					</td>
																					<td>
																							<input type="text" class="form-control input-sm" name="inputCiudad" placeholder="__________________________________________________________________">
																					</td>
																			</tr>
																			<tr>
																					<td>
																							<label for="inputEmail" class="control-label">E-mail:* </label>
																					</td>
																					<td>
																							<input type="email" class="form-control input-sm" name="inputEmail" placeholder="__________________________________________________________________">
																					</td>
																			</tr>
																			<tr>
																					<td>
																							<label for="inputTelefono" class="control-label">Teléfono:* </label>
																					</td>
																					<td>
																							<input type="text" class="form-control input-sm" name="inputTelefono" placeholder="__________________________________________________________________">
																					</td>
																			</tr>
																			<tr>
																					<td>
																							<label for="inputMensaje" class="control-label">Mensaje:* </label>
																					</td>
																					<td>
																							<textarea class="form-control input-sm" name="inputMensaje" rows="4" placeholder="Escriba su mensaje"></textarea>
																					</td>
																			</tr>
																			<tr>
																					<td></td>
																					<td>
																							<button type="submit" name="contacto-general" class="btn btn-default">ENVIAR</button>
																							<button type="reset" class="btn btn-default">BORRAR</button>
																							<br/>* Son campos obligatorios para contactarnos con usted.
																					</td>
																			</tr>
																	</table> -->
															</div>

											</div>
											<div>
													<font color="white" size=2.5>
															<br>
															Directorio:
															<br>
															<table style="color:white;font-size:15px">
																	<tr>
																			<td>
																			• Lic. Roberto González García
																			</td>
																			<td>
																			Dirección
																			</td>
																	</tr>
																	<tr>
																			<td>
																			• Lic. Catalina Gómez Vázquez
																			</td>
																			<td>
																			Administración
																			</td>
																	</tr>
																	<tr>
																			<td>
																			• Lic. J. Salvador Pichardo Ramírez
																			</td>
																			<td>
																			Curaduría y Museografía
																			</td>
																	</tr>
																	<tr>
																			<td>
																			• Mtra. Adela González Cruz Manjarrez
																			</td>
																			<td>
																			Servicios Educativos
																			</td>
																	</tr>
															</table>
													</font>
											</div>
									</div>
							</div>

					</div>
					<div class="logoGob" align="center">
							<?php include("logos.php"); ?>
							<!-- <img src="media/logosGobierno2.png" /> -->
					</div>
			</div>
	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script>
			$(function(){

					$(document).on( 'scroll', function(){

							if ($(window).scrollTop() > 1500) {
									$('.scroll-top-wrapper').addClass('show');
							} else {
									$('.scroll-top-wrapper').removeClass('show');
							}
					});

					$('.scroll-top-wrapper').on('click', scrollToTop);
			});

			function scrollToTop() {
					verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
					element = $('body');
					offset = element.offset();
					offsetTop = offset.top;
					$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
			}
	</script>
</footer>
<div class="container">
	<div class="registro">
			<font color="#2F2523">Museo de Arte de Queretaro. ® 2015.</font>
	</div>
</div>
<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
			<i class="fa fa-3x fa fa-chevron-up"></i>
	</span>
</div>
<?php  } ?>

	<?php wp_footer(); ?>
	</body>
</html>
