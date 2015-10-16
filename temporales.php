<h1 class="text-center">
    <a href="#carousel-temporales" role="button" data-slide="prev">
        <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/white-left.png"></img>
    </a>
    Exposiciones Temporales
    <a  href="#carousel-temporales" role="button" data-slide="next">
        <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/white-right.png"></img>
    </a>
</h1>
<div id="carousel-temporales" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner text-center">
      <?php
        $type = 'temporal';
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
          } else if($i % 2 != 0) {
            echo '<div class="item">';
          }?>
              <div class="col-md-6">
                <h2><?php the_content(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <h3><?php the_title(); ?></h3>
              </div>
              <?php if ($i % 2 == 0 or $my_query->found_posts == $i) {
                  echo '</div>';
                }?>
              <?php
          endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
       ?>
        <!-- <div class="item active">
            <div class="col-md-6">
                <h2>Espacios oscuros con luz propia</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/temporales/InvitacionSegura.jpg"></img>
                <h3>Braulio Segura</h3>
            </div>
            <div class="col-md-6">
                <h2>El eterno femenino</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/temporales/InvitacionAnguiano.jpg"></img>
                <h3>Raúl Anguiano</h3>
            </div>
        </div>
        <div class="item">
            <div class="col-md-6">
                <h2>Placa de Media</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/temporales/InvitacionNevin.jpg"></img>
                <h3>Paul Nevin</h3>
            </div>
            <div class="col-md-6">
                <h2>Huellas de la memoria</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/src/media/temporales/InvitacionPaloma.jpg"></img>
                <h3>Paloma Torres</h3>
            </div>
        </div> -->
        <!-- <div class="item">
            <div class="col-md-6">
                <h2>Huellas de la memoria</h2>
                <img src="media/temporales/InvitacionPaloma.jpg"></img>
                <h3>Paloma Torres</h3>
            </div>
            <div class="col-md-6">
                <h2>Obras Maestras de la Gráfica Mexicana</h2>
                <img src="media/temporales/InvitacionMtras.jpg"></img>
                <h3>Dr. Augusto Isla Estrada</h3>
            </div>
        </div> -->
    </div>
</div>
